<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterText;
use App\Http\Resources\FooterTextResource;

class FooterTextController extends Controller
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
            "phoneNumber" => 'required|string',
            "whatsAppNumber" => 'required|string',
            "address" => 'required|string',
            "email" => 'required|string',
            "webUrl" => 'required|string',
            "instagram" => 'required|string',
        ]);

        $footer = FooterText::create($validatedData);
        return new FooterTextResource($footer);
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
        $footer = FooterText::findOrFail($id);
        return new FooterTextResource($footer);
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
            "phoneNumber" => 'required|string',
            "whatsAppNumber" => 'required|string',
            "address" => 'required|string',
            "email" => 'required|string',
            "webUrl" => 'required|string',
            "instagram" => 'required|string',
        ]);

        $footer = FooterText::findOrFail($id);
        $footer->update($validatedData);

        return new FooterTextResource($footer);
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
        FooterText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = FooterText::orderBy('created_at', 'desc')->take(1)->get();
        return FooterTextResource::collection($text);
    }
}
