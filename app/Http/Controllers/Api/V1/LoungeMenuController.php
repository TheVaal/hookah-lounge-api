<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\LoungeMenu;
use App\Http\Requests\StoreLoungeMenuRequest;
use App\Http\Requests\UpdateLoungeMenuRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LoungeMenuResource;
use App\Http\Resources\V1\LoungeMenuCollection;
use App\Filters\V1\LoungeMenuFilter;
use Illuminate\Http\Request;

class LoungeMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        $filter = new LoungeMenuFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new LoungeMenuCollection(LoungeMenu::paginate());
        } else {
            $items = LoungeMenu::where($queryItems)->paginate();
            return new LoungeMenuCollection($items->appends($request->query()));
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
     * @param  \App\Http\Requests\StoreLoungeMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoungeMenuRequest $request)
    {
        return new LoungeMenuResource(LoungeMenu::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoungeMenu  $loungeMenu
     * @return \Illuminate\Http\Response
     */
    public function show(LoungeMenu $loungeMenu)
    {
        return new LoungeMenuResource($loungeMenu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoungeMenu  $loungeMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(LoungeMenu $loungeMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoungeMenuRequest  $request
     * @param  \App\Models\LoungeMenu  $loungeMenu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoungeMenuRequest $request, LoungeMenu $loungeMenu)
    {
        $loungeMenu->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoungeMenu  $loungeMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoungeMenu $loungeMenu)
    {
        //
    }
}
