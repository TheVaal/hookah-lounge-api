<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Hardness;
use App\Http\Requests\StoreHardnessRequest;
use App\Http\Requests\UpdateHardnessRequest;
use App\Http\Resources\V1\HardnessResource;
use App\Http\Resources\V1\HardnessCollection;
use App\Http\Controllers\Controller;
use App\Filters\V1\HardnessFilter;


class HardnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new HardnessFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new HardnessCollection(Hardness::paginate());
        } else {
            $items = Hardness::where($queryItems)->paginate();
            return new HardnessCollection($items->appends($request->query()));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHardnessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHardnessRequest $request)
    {
        return new HardnessResource(Hardness::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hardness  $hardness
     * @return \Illuminate\Http\Response
     */
    public function show(Hardness $hardness)
    {
        
        return new HardnessResource($hardness);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHardnessRequest  $request
     * @param  \App\Models\Hardness  $hardness
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHardnessRequest $request, Hardness $hardness)
    {
        $hardness->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hardness  $hardness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hardness $hardness)
    {
        //
    }
}
