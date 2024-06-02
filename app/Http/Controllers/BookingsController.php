<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Resources\BookingsResource;
use App\Mail\callbackMail;
use App\Mail\ErrorMail;
use App\Models\Bookings;
use App\Models\RecipientMail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['filterByMonthYear', 'callbackXendit', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $pagination = $request->header('X-PAGINATION', false);
        if ($pagination) {
            $page = $request->header('X-PAGE', 1);
            $pageSize = $request->header('X-PAGESIZE', 10);

            $query = Bookings::query()->where("isDeleted", "=", "false");
            $total = $query->count();
            $result = $query->offset(($page - 1) * $pageSize)->limit($pageSize)->get();

            return response()->json([
                'data' => $result,
                'page' => $page,
                'pageSize' => $pageSize,
                'totalPage' => ceil($total / $pageSize),
                'totalData' => $total,
            ], 200);
        }
        $bookings = Bookings::all();

        return BookingsResource::collection($bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingRequest  $request)
    {
        //
        $validatedData = $request->validated();
        $validatedData['status'] = 'PENDING';

        // Auto-increment the custom_id - Assuming 'custom_id' is an auto-incremented field in your database
        // You might need to handle this using database auto-increment functionality
        // Below is an example of how to create a custom_id based on the last ID + 1
        $lastBooking = Bookings::latest()->first();
        $lastId = ($lastBooking) ? (int)substr($lastBooking->custom_id, strrpos($lastBooking->custom_id, '_') + 1) : 0;
        $validatedData['custom_id'] = 'invoice_' . ($lastId + 1);
        $validatedData['isDeleted'] = false;

        $bookings = Bookings::create($validatedData);

        return new BookingsResource($bookings);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $bookings = Bookings::findOrFail($id);

        return new BookingsResource($bookings);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingRequest $request, $id)
    {
        //
        $validatedData = $request->validated();

        $bookings = Bookings::findOrFail($id);
        $bookings->update($validatedData);

        return new BookingsResource($bookings);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $package = Bookings::findOrFail($id);
            $package->isDeleted = true;
            $package->save();

            return response()->json([], 204);
        } catch (Exception $error) {
            return response()->json([
                "Error" => "Data Not Found"
            ], 404);
        }
    }

    public function filterByMonthYear(Request $request)
    {

        $year = $request->header('year');
        $month = $request->header('month');

        if (!$year || !$month) {
            return response()->json(['error' => 'Year and month parameters are required.'], 400);
        }

        $startDate = Carbon::create($year, $month, 1)->startOfMonth();
        $endDate = $startDate->copy()->endOfMonth();

        $query = Bookings::query()
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->where("isDeleted", "=", "false")
            ->where("status", "!=", "EXPIRED");

        $total = $query->count();
        $result = $query->get();

        return response()->json([
            'data' => $result,
            'year' => $year,
            'month' => $month,
        ], 200);
    }

    public function callbackXendit(Request $request)
    {
        $xIncomingCallbackTokenHeader = $request->header('x-callback-token') ? $request->header('x-callback-token') : "";

        if ($xIncomingCallbackTokenHeader === env('xenditXCallbackToken')) {

            try {
                $externalId = $request['external_id'];

                $booking = Bookings::where('custom_id', $externalId)->first();
                $recipients = RecipientMail::all();

                if ($booking) {
                    $booking->status = $request['status'];

                    $booking->save();

                    foreach ($recipients as $recipient) {
                        Mail::to($recipient->email)->send(new callbackMail($booking));
                    }

                    return response()->json([
                        'message' => 'Booking status updated successfully',
                        'data' => $booking
                    ], 200);
                } else {

                    foreach ($recipients as $recipient) {
                        Mail::to($recipient->email)->send(new ErrorMail("Booking with the provided custom_id (external_id) not found"));
                    }
                    
                    return response()->json([
                        'error' => 'Booking with the provided custom_id (external_id) not found'
                    ], 404);
                }
            } catch (Exception $error) {
                $recipients = RecipientMail::all();

                foreach ($recipients as $recipient) {
                    Mail::to($recipient->email)->send(new ErrorMail("Failed"));
                }
                
                return response()->json([
                    'message' => 'Failed',
                    'error' => $error
                ], 400);
            }
        } else {
            return response()->json(null, 403);
        }
    }
}
