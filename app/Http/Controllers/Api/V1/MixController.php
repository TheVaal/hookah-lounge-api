<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Mix;
use App\Http\Requests\StoreMixRequest;
use App\Http\Requests\UpdateMixRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\MixResource;
use App\Http\Resources\V1\MixCollection;
use App\Filters\V1\MixFilter;
use Illuminate\Http\Request;

class MixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new MixFilter();
        $queryItems = $filter->transform($request);
        $items = Mix::where($queryItems);
        $includeDetails = request()->query('includeDetails');
        if ($includeDetails){
            $items = $items->with('hookahs');            
        }

            
        return new MixCollection($items->paginate()->appends($request->query()));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMixRequest $request)
    {
        return new MixResource(Mix::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function show(Mix $mix)
    {
        return new MixResource($mix);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMixRequest  $request
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMixRequest $request, Mix $mix)
    {
        $mix->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mix  $mix
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mix $mix)
    {
        //
    }
}
