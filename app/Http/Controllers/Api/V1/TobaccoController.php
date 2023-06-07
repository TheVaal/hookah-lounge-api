<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Tobacco;
use App\Http\Requests\StoreTobaccoRequest;
use App\Http\Requests\UpdateTobaccoRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TobaccoResource;
use App\Http\Resources\V1\TobaccoCollection;
use App\Filters\V1\TobaccoFilter;
use Illuminate\Http\Request;

class TobaccoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new TobaccoFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new TobaccoCollection(Tobacco::paginate());
        } else {
            $items = Tobacco::where($queryItems)->paginate();
            return new TobaccoCollection($items->appends($request->query()));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTobaccoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTobaccoRequest $request)
    {
        return new TobaccoResource(Tobacco::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tobacco  $tobacco
     * @return \Illuminate\Http\Response
     */
    public function show(Tobacco $tobacco)
    {
        return new TobaccoResource($tobacco);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTobaccoRequest  $request
     * @param  \App\Models\Tobacco  $tobacco
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTobaccoRequest $request, Tobacco $tobacco)
    {
        $tobacco->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tobacco  $tobacco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tobacco $tobacco)
    {
        //
    }
}
