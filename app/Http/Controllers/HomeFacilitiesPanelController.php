<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeFacilitiesPanel;
use App\Http\Resources\FacilitiesPanelResource;

class HomeFacilitiesPanelController extends Controller
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

        $facilities = HomeFacilitiesPanel::create($validatedData);
        return new FacilitiesPanelResource($facilities);
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
        $facilities = HomeFacilitiesPanel::findOrFail($id);

        return new FacilitiesPanelResource($facilities);
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

        $facilities = HomeFacilitiesPanel::findOrFail($id);
        $facilities->update($validatedData);

        return new FacilitiesPanelResource($facilities);
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
        HomeFacilitiesPanel::where('id', $id)->delete();
        return response()->json(null, 204);
    }

    public function getTop4()
    {
        $top4News = HomeFacilitiesPanel::orderBy('created_at', 'desc')->take(4)->get();
        return FacilitiesPanelResource::collection($top4News);
    }
}
