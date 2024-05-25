<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageText;
use App\Http\Resources\PackageTextResource;
class PackageTextController extends Controller
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
            "PackageText" => 'required|string',
            "Trip1FromText" => 'required|string',
            "Trip1ToText" => 'required|string',
            "Trip2FromText" => 'required|string',
            "Trip2ToText" => 'required|string',
            "Trip1InclusiveText" => 'required|string',
            "Trip1ExclusiveText" => 'required|string',
            "Trip1TermsText" => 'required|string',
            "Trip2InclusiveText" => 'required|string',
            "Trip2ExclusiveText" => 'required|string',
            "Trip2TermsText" => 'required|string',
        ]);

        $text = PackageText::create($validatedData);
        return new PackageTextResource($text);
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
        $text = PackageText::findOrFail($id);
        return new PackageTextResource($text);
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
            "PackageText" => 'required|string',
            "Trip1FromText" => 'required|string',
            "Trip1ToText" => 'required|string',
            "Trip2FromText" => 'required|string',
            "Trip2ToText" => 'required|string',
            "Trip1InclusiveText" => 'required|string',
            "Trip1ExclusiveText" => 'required|string',
            "Trip1TermsText" => 'required|string',
            "Trip2InclusiveText" => 'required|string',
            "Trip2ExclusiveText" => 'required|string',
            "Trip2TermsText" => 'required|string',
        ]);

        $text = PackageText::findOrFail($id);
        $text->update($validatedData);

        return new PackageTextResource($text);
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
        PackageText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = PackageText::orderBy('created_at', 'desc')->take(1)->get();
        return PackageTextResource::collection($text);
    }
}
