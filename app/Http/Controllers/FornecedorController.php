<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorRequest;
use Illuminate\Http\Request;
use App\Models\Fornecedores\Fornecedor;

class FornecedorController extends AbstractController
{
    public function __construct()
    {
        $this->model = Fornecedor::class;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Requests\FornecedorRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(FornecedorRequest $request)
    {
        return $this->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */

    public function show(Fornecedor $fornecedor)
    {
        return $this->fetch($fornecedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request\FornecedorRequest  $request
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */

    public function update(FornecedorRequest $request, Fornecedor  $fornecedor)
    {
        return $this->up($request, $fornecedor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
        return $this->delete($fornecedor);
    }
}
