<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentroCustosRequest;
use App\Models\CentroCusto\CentroCustos;
use Illuminate\Http\Request;

class CentroCustosController extends AbstractController
{
    public function __construct()
    {
        $this->model = CentroCustos::class;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->fetchAll($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CentroCustosRequest $request)
    {
        return $this->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CentroCusto\CentroCustos  $centroCustos
     * @return \Illuminate\Http\Response
     */
    public function show(CentroCustos $centroCustos)
    {
        return $this->fetch($centroCustos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CentroCusto\CentroCustos  $centroCustos
     * @return \Illuminate\Http\Response
     */
    public function update(CentroCustosRequest $request, CentroCustos $centroCustos)
    {
        return $this->up($request,$centroCustos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CentroCusto\CentroCustos  $centroCustos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroCustos $centroCustos)
    {
        return $this->delete($centroCustos);
    }
}
