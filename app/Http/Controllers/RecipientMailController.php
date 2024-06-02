<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipientMail;
use App\Http\Resources\RecipientMailResource;
class RecipientMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index()
    {
        //
        $mail = RecipientMail::all();
        return RecipientMailResource::collection($mail);
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
            "email" => 'required|string',
        ]);

        $mail = RecipientMail::create($validatedData);
        return new RecipientMailResource($mail);
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
        $mail = RecipientMail::findOrFail($id);
        return new RecipientMailResource($mail);
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
            "email" => 'required|string',
        ]);

        $mail = RecipientMail::findOrFail($id);
        $mail->update($validatedData);

        return new RecipientMailResource($mail);
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
        RecipientMail::where('id', $id)->delete();
        return response()->json(null, 204);
    }
}
