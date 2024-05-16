<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUsText;
use App\Http\Resources\AboutUsTextResource;
class AboutUsTextController extends Controller
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
            "AboutUsText" => 'required|string',
            "HeaderContentText" => 'required|string',
            "ContentText" => 'required|string',
        ]);

        $text = AboutUsText::create($validatedData);
        return new AboutUsTextResource($text);
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
        $text = AboutUsText::findOrFail($id);
        return new AboutUsTextResource($text);
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
            "AboutUsText" => 'required|string',
            "HeaderContentText" => 'required|string',
            "ContentText" => 'required|string',
        ]);

        $text = AboutUsText::findOrFail($id);
        $text->update($validatedData);

        return new AboutUsTextResource($text);
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
        AboutUsText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = AboutUsText::orderBy('created_at', 'desc')->take(1)->get();
        return AboutUsTextResource::collection($text);
    }
}
