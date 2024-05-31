<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeText;
use App\Http\Resources\HomeTextResource;

class HomeTextController extends Controller
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
            "WelcomeSubHeaderText" => 'required|string',
            "WelcomeMainHeaderText" => 'required|string',
            "WelcomeToText" => 'required|string',
            "FacilitiesGolfCourseHeaderText" => 'required|string',
            "FacilitiesGolfCourseText" => 'required|string',
            "FacilitiesTournamentsHeaderText" => 'required|string',
            "FacilitiesTournamentsText" => 'required|string',
            "FacilitiesCaddiesHeaderText" => 'required|string',
            "FacilitiesCaddiesText" => 'required|string',
            "FacilitiesGreenFieldsHeaderText" => 'required|string',
            "FacilitiesGreenFieldsText" => 'required|string',
            "BookingPanelText" => 'required|string',
            "NewsText" => 'required|string',
            "MembershipPanelHeaderText" => 'required|string',
            "MembershipPanelSubText" => 'required|string',
            "TakeATourPanelHeaderText" => 'required|string',
            "TakeATourPanelSubText" => 'required|string',
        ]);

        $home = HomeText::create($validatedData);
        return new HomeTextResource($home);
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
        $home = HomeText::findOrFail($id);
        return new HomeTextResource($home);
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
            "WelcomeSubHeaderText" => 'required|string',
            "WelcomeMainHeaderText" => 'required|string',
            "WelcomeToText" => 'required|string',
            "FacilitiesGolfCourseHeaderText" => 'required|string',
            "FacilitiesGolfCourseText" => 'required|string',
            "FacilitiesTournamentsHeaderText" => 'required|string',
            "FacilitiesTournamentsText" => 'required|string',
            "FacilitiesCaddiesHeaderText" => 'required|string',
            "FacilitiesCaddiesText" => 'required|string',
            "FacilitiesGreenFieldsHeaderText" => 'required|string',
            "FacilitiesGreenFieldsText" => 'required|string',
            "BookingPanelText" => 'required|string',
            "NewsText" => 'required|string',
            "MembershipPanelHeaderText" => 'required|string',
            "MembershipPanelSubText" => 'required|string',
            "TakeATourPanelHeaderText" => 'required|string',
            "TakeATourPanelSubText" => 'required|string',
        ]);

        $home = HomeText::findOrFail($id);
        $home->update($validatedData);

        return new HomeTextResource($home);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HomeText::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getText()
    {
        $text = HomeText::orderBy('created_at', 'desc')->take(1)->get();
        return HomeTextResource::collection($text);
    }
}
