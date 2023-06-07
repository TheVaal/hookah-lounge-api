<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;

use App\Models\Hookah;
use App\Http\Requests\StoreHookahRequest;
use App\Http\Requests\UpdateHookahRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\HookahResource;
use App\Http\Resources\V1\HookahCollection;
use App\Filters\V1\HookahFilter;

class HookahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new HookahFilter();
        $queryItems = $filter->transform($request);
        $items = Hookah::where($queryItems);   
        return new HookahCollection($items->paginate()->appends($request->query()));
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
     * @param  \App\Http\Requests\StoreHookahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHookahRequest $request)
    {
        return new HookahResource(Hookah::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hookah  $hookah
     * @return \Illuminate\Http\Response
     */
    public function show(Hookah $hookah)
    {
        return new HookahResource($hookah);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHookahRequest  $request
     * @param  \App\Models\Hookah  $hookah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHookahRequest $request, Hookah $hookah)
    {
        $hookah->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hookah  $hookah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hookah $hookah)
    {
        //
    }
}
