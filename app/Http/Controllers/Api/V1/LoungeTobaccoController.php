<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\LoungeTobacco;
use App\Http\Requests\StoreLoungeTobaccoRequest;
use App\Http\Requests\UpdateLoungeTobaccoRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LoungeTobaccoResource;
use App\Http\Resources\V1\LoungeTobaccoCollection;
use App\Filters\V1\LoungeTobaccoFilter;
use Illuminate\Http\Request;

class LoungeTobaccoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new LoungeTobaccoFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new LoungeTobaccoCollection(LoungeTobacco::paginate());
        } else {
            $items = LoungeTobacco::where($queryItems)->paginate();
            return new LoungeTobaccoCollection($items->appends($request->query()));
        }
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
     * @param  \App\Http\Requests\StoreLoungeTobaccoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoungeTobaccoRequest $request)
    {
        return new LoungeTobaccoResource(LoungeTobacco::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoungeTobacco  $loungeTobacco
     * @return \Illuminate\Http\Response
     */
    public function show(LoungeTobacco $loungeTobacco)
    {
        return new LoungeTobaccoResource($loungeTobacco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoungeTobacco  $loungeTobacco
     * @return \Illuminate\Http\Response
     */
    public function edit(LoungeTobacco $loungeTobacco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoungeTobaccoRequest  $request
     * @param  \App\Models\LoungeTobacco  $loungeTobacco
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoungeTobaccoRequest $request, LoungeTobacco $loungeTobacco)
    {
        $loungeTobacco->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoungeTobacco  $loungeTobacco
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoungeTobacco $loungeTobacco)
    {
        //
    }
}
