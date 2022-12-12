<?php

namespace App\Http\Controllers;

use App\Models\EnVenta;
use App\Http\Requests\StoreEnVentaRequest;
use App\Http\Requests\UpdateEnVentaRequest;

class EnVentaController extends Controller
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
     * @param  \App\Http\Requests\StoreEnVentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnVentaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnVenta  $enVenta
     * @return \Illuminate\Http\Response
     */
    public function show(EnVenta $enVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnVenta  $enVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(EnVenta $enVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnVentaRequest  $request
     * @param  \App\Models\EnVenta  $enVenta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnVentaRequest $request, EnVenta $enVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnVenta  $enVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnVenta $enVenta)
    {
        //
    }
}
