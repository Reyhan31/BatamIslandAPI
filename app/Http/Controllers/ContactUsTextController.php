<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsText;
use App\Http\Resources\ContactUsTextResource;
class ContactUsTextController extends Controller
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
            "ContactUsText" => 'required|string',
            "FormText" => 'required|string',
        ]);

        $text = ContactUsText::create($validatedData);
        return new ContactUsTextResource($text);
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
        $text = ContactUsText::findOrFail($id);
        return new ContactUsTextResource($text);
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
            "ContactUsText" => 'required|string',
            "FormText" => 'required|string',
        ]);

        $text = ContactUsText::findOrFail($id);
        $text->update($validatedData);

        return new ContactUsTextResource($text);
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
        ContactUsText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = ContactUsText::orderBy('created_at', 'desc')->take(1)->get();
        return ContactUsTextResource::collection($text);
    }
}
