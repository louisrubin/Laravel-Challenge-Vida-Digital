<?php

namespace App\Http\Controllers;

use App\Models\EncargoProvee;
use App\Http\Requests\StoreEncargoProveeRequest;
use App\Http\Requests\UpdateEncargoProveeRequest;

class EncargoProveeController extends Controller
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
     * @param  \App\Http\Requests\StoreEncargoProveeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEncargoProveeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EncargoProvee  $encargoProvee
     * @return \Illuminate\Http\Response
     */
    public function show(EncargoProvee $encargoProvee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EncargoProvee  $encargoProvee
     * @return \Illuminate\Http\Response
     */
    public function edit(EncargoProvee $encargoProvee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEncargoProveeRequest  $request
     * @param  \App\Models\EncargoProvee  $encargoProvee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEncargoProveeRequest $request, EncargoProvee $encargoProvee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EncargoProvee  $encargoProvee
     * @return \Illuminate\Http\Response
     */
    public function destroy(EncargoProvee $encargoProvee)
    {
        //
    }
}
