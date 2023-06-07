<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\WaiterCall;
use App\Http\Requests\StoreWaiterCallRequest;
use App\Http\Requests\UpdateWaiterCallRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\WaiterCallResource;
use App\Http\Resources\V1\WaiterCallCollection;
use App\Filters\V1\WaiterCallFilter;
use Illuminate\Http\Request;

class WaiterCallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new WaiterCallFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new WaiterCallCollection(WaiterCall::paginate());
        } else {
            $items = WaiterCall::where($queryItems)->paginate();
            return new WaiterCallCollection($items->appends($request->query()));
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
     * @param  \App\Http\Requests\StoreWaiterCallRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWaiterCallRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WaiterCall  $waiterCall
     * @return \Illuminate\Http\Response
     */
    public function show(WaiterCall $waiterCall)
    {
        return new WaiterCallResource($waiterCall);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaiterCall  $waiterCall
     * @return \Illuminate\Http\Response
     */
    public function edit(WaiterCall $waiterCall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWaiterCallRequest  $request
     * @param  \App\Models\WaiterCall  $waiterCall
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWaiterCallRequest $request, WaiterCall $waiterCall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WaiterCall  $waiterCall
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaiterCall $waiterCall)
    {
        //
    }
}
