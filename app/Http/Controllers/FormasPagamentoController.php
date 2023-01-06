<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormasPagamentoRequest;
use App\Models\FormasPagamento\FormasPagamento;
use Illuminate\Http\Request;

class FormasPagamentoController extends AbstractController
{
    public function __construct()
    {
        $this->model = FormasPagamento::class;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $baseModel = new FormasPagamento();
        return $this->fetchAll($request,$baseModel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormasPagamentoRequest $request)
    {
        return $this->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormasPagamento\FormasPagamento  $formasPagamento
     * @return \Illuminate\Http\Response
     */
    public function show(FormasPagamento $formasPagamento)
    {
        return $this->fetch($formasPagamento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormasPagamento\FormasPagamento  $formasPagamento
     * @return \Illuminate\Http\Response
     */
    public function update(FormasPagamentoRequest $request, FormasPagamento $formasPagamento)
    {
        return $this->up($request,$formasPagamento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormasPagamento\FormasPagamento  $formasPagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormasPagamento $formasPagamento)
    {
        return $this->delete($formasPagamento);
    }
}
