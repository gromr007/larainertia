<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExtraRequest;
use App\Http\Requests\UpdateExtraRequest;
use App\Models\Extra;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreExtraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExtraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExtraRequest  $request
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExtraRequest $request, Extra $extra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Extra  $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extra $extra)
    {
        //
    }
}
