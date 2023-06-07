<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Lounge;
use App\Http\Requests\StoreLoungeRequest;
use App\Http\Requests\UpdateLoungeRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LoungeResource;
use App\Http\Resources\V1\LoungeCollection;
use App\Filters\V1\LoungeFilter;

class LoungeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new LoungeFilter();
        $queryItems = $filter->transform($request);
        $items = Lounge::where($queryItems);
        $includeTables = request()->query('includeTables');
        if ($includeTables){
            $items = $items->with('tables');            
        }

        return new LoungeCollection($items->paginate()->appends($request->query())); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoungeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoungeRequest $request)
    {
        return new LoungeResource(Lounge::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lounge  $lounge
     * @return \Illuminate\Http\Response
     */
    public function show(Lounge $lounge)
    {
        $includeTables = request()->query('includeTables');
        if ($includeTables){
            return new LoungeResource($lounge->loadMissing('tables'));               
        }
        return new LoungeResource($lounge);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoungeRequest  $request
     * @param  \App\Models\Lounge  $lounge
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoungeRequest $request, Lounge $lounge)
    {
        $lounge->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lounge  $lounge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lounge $lounge)
    {
        //
    }
}
