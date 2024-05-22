<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingText;
use App\Http\Resources\BookingTextResource;
class BookingTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['getText']]);
    }

    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            "BookingText" => 'required|string',
            "FormHeaderText" => 'required|string',
            "FormHeaderText2" => 'required|string',
            "FormSubText" => 'required|string',
            "FormSubText2" => 'required|string',
        ]);

        $text = BookingText::create($validatedData);
        return new BookingTextResource($text);
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
        $text = BookingText::findOrFail($id);
        return new BookingTextResource($text);
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
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            "BookingText" => 'required|string',
            "FormHeaderText" => 'required|string',
            "FormHeaderText2" => 'required|string',
            "FormSubText" => 'required|string',
            "FormSubText2" => 'required|string',
        ]);

        $text = BookingText::findOrFail($id);
        $text->update($validatedData);

        return new BookingTextResource($text);
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
        BookingText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = BookingText::orderBy('created_at', 'desc')->take(1)->get();
        return BookingTextResource::collection($text);
    }
}
