<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeInstagramPanel;
use App\Http\Resources\InstagramPanelResource;

class HomeInstagramPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['getTop4']]);
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
            'file_id' => 'required|string',
        ]);

        $instagram = HomeInstagramPanel::create($validatedData);
        return new InstagramPanelResource($instagram);
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
        $instagram = HomeInstagramPanel::findOrFail($id);

        return new InstagramPanelResource($instagram);
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
            'file_id' => 'required|string',
        ]);

        $instagram = HomeInstagramPanel::findOrFail($id);
        $instagram->update($validatedData);

        return new InstagramPanelResource($instagram);
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
        HomeInstagramPanel::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getTop4()
    {
        $top4News = HomeInstagramPanel::orderBy('created_at', 'desc')->take(4)->get();
        return InstagramPanelResource::collection($top4News);
    }
}
