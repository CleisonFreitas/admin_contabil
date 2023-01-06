<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanoContasRequest;
use App\Models\PlanoContas\PlanoContas;
use Illuminate\Http\Request;

class PlanoContasController extends AbstractController
{
    public function __construct()
    {
        $this->model = PlanoContas::class;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $baseModel = new PlanoContas();
        return $this->fetchAll($request,$baseModel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanoContasRequest $request)
    {
        return $this->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanoContas\PlanoContas  $planoContas
     * @return \Illuminate\Http\Response
     */
    public function show(PlanoContas $planoContas)
    {
        return $this->fetch($planoContas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanoContas\PlanoContas  $planoContas
     * @return \Illuminate\Http\Response
     */
    public function update(PlanoContasRequest $request, PlanoContas $planoContas)
    {
        return $this->up($request,$planoContas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanoContas\PlanoContas  $planoContas
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanoContas $planoContas)
    {
        return $this->delete($planoContas);
    }
}
