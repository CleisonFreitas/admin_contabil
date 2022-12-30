<?php

namespace App\Http\Controllers;

use App\Http\Requests\FornecedorRequest;
use App\Models\Fornecedores\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $query = $request->q ?? "";
            $page = $request->page ?? 1;
            $per_page = $request->per_page ?? 10;
            $sort = $request->sort ?? 'id';
            $order = $request->order ?? 'desc';

            $fornecedores = Fornecedor::listAll($query,$page,$per_page,$sort,$order);

            return response()->json($fornecedores,200);
        }catch(\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FornecedorRequest $request)
    {
        try{
            $fornecedor = Fornecedor::create($request->all());
            return response()->json(['fornecedor' => $fornecedor],201);
        }catch(\Exception $ex) {
            return response()->json(['erros' => [$ex->getMessage()],404]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        try{
            return response()->json(['fornecedor' => $fornecedor],200);

        }catch(\Exception $ex) {
            return response()->json(['error' => [$ex->getMessage()]],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        try{
            $fornecedor->update($request->all());

            return response()->json(['fornecedor' => $fornecedor],200);

        }catch(\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()],204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
        //
    }
}
