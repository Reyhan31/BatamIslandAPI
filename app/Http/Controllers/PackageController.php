<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Http\Resources\PackageResource;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['getPackage']]);
    }

    public function getPackage()
    {
        $package = Package::where('isDeleted', false)->get();

        return PackageResource::collection($package);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $pagination = $request->header('X-PAGINATION', false);
        if ($pagination) {
            $page = $request->header('X-PAGE', 1);
            $pageSize = $request->header('X-PAGESIZE', 10);

            $query = Package::query()->where("isDeleted", "=", "false");
            $total = $query->count();
            $result = $query->offset(($page - 1) * $pageSize)->limit($pageSize)->get();

            return response()->json([
                'data' => $result,
                'page' => $page,
                'pageSize' => $pageSize,
                'totalPage' => ceil($total / $pageSize),
                'totalData' => $total,
            ], 200);
        }
        $package = Package::all();

        return PackageResource::collection($package);
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
    public function store(PackageRequest $request)
    {

        try {
            $validatedData = $request->validated();
            $validatedData['isDeleted'] = false;
            $news = Package::create($validatedData);
            return new PackageResource($news);
        } catch (Exception $error) {
            return response()->json([
                "Error" => $error
            ], 400);
        }
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
        $package = Package::findOrFail($id);

        return new PackageResource($package);
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
    public function update(PackageRequest $request, $id)
    {
        //
        $validatedData = $request->validated();

        $package = Package::findOrFail($id);
        $package->update($validatedData);

        return new PackageResource($package);
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
        try {
            $package = Package::findOrFail($id);
            $package->isDeleted = true;
            $package->save();

            return response()->json([], 204);
        } catch (Exception $error) {
            return response()->json([
                "Error" => "Data Not Found"
            ], 404);
        }
    }
}
