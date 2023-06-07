<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\InOrder;
use App\Http\Requests\StoreInOrderRequest;
use App\Http\Requests\UpdateInOrderRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\InOrderResource;
use App\Http\Resources\V1\InOrderCollection;
use App\Filters\V1\InOrderFilter;

class InOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new InOrderFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new InOrderCollection(InOrder::paginate());
        } else {
            $items = InOrder::where($queryItems)->paginate();
            return new InOrderCollection($items->appends($request->query()));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInOrderRequest $request)
    {
        return new InOrderResource(InOrder::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOrder  $inOrder
     * @return \Illuminate\Http\Response
     */
    public function show(InOrder $inOrder)
    {
        return new InOrderResource($inOrder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInOrderRequest  $request
     * @param  \App\Models\InOrder  $inOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInOrderRequest $request, InOrder $inOrder)
    {
        $inOrder->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOrder  $inOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(InOrder $inOrder)
    {
        //
    }
}
