<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembershipText;
use App\Http\Resources\MembershipTextResource;
class MembershipTextController extends Controller
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
            "MembershipText" => 'required|string',
            "GoldMemberHeaderText" => 'required|string',
            "GoldMemberContentText" => 'required|string',
            "PerksHeaderText" => 'required|string',
            "PriorityHeaderText" => 'required|string',
            "PriorityContentText" => 'required|string',
        ]);

        $text = MembershipText::create($validatedData);
        return new MembershipTextResource($text);
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
        $text = MembershipText::findOrFail($id);
        return new MembershipTextResource($text);
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
            "MembershipText" => 'required|string',
            "GoldMemberHeaderText" => 'required|string',
            "GoldMemberContentText" => 'required|string',
            "PerksHeaderText" => 'required|string',
            "PriorityHeaderText" => 'required|string',
            "PriorityContentText" => 'required|string',
        ]);

        $text = MembershipText::findOrFail($id);
        $text->update($validatedData);

        return new MembershipTextResource($text);
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
        MembershipText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = MembershipText::orderBy('created_at', 'desc')->take(1)->get();
        return MembershipTextResource::collection($text);
    }
}
