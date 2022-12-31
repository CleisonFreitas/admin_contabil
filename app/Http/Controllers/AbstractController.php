<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    protected $model;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $query = $request->q ?? "";
            $page = $request->page ?? 1;
            $per_page = $request->per_page ?? 10;
            $sort = $request->sort ?? 'id';
            $order = $request->order ?? 'desc';

            $resource = $this->model::listAll($query, $page, $per_page, $sort, $order);

            return response()->json($resource, 200);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 404);
        }
    }


    public function create($request)
    {
        try {
            $resource = $this->model::create($request->all());

            return response()->json(['data' => $resource], 201);
        } catch (\Exception $ex) {
            return response()->json(['erros' => [$ex->getMessage()], 404]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedores\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function fetch(Model $model)
    {
        try {
            return response()->json(['data' => $model], 200);
        } catch (\Exception $ex) {
            return response()->json(['error' => [$ex->getMessage()]], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function up($request, Model $model)
    {
        try {
            $model->update($request->all());
            $model->refresh();
            return response()->json(['data' => $model], 200);
        } catch (\Exception $ex) {
            return response()->json(['error' => $ex->getMessage()], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Http\Response
     */
    public function delete(Model $model)
    {
        try {
            $model->delete();
            return response()->json(['data' => $model], 200);
        } catch (\Exception $ex) {
            return $this->respondWithErrors($ex);
        }
    }

    protected function respondWithErrors(\Exception $ex)
    {
        $code = $ex->getCode();
        switch ($code) {
            case 403:
                return response()->json(["errors" => [
                    'responseMessage' => 'You do not have the required authorization.',
                    'status'  => 403,
                    'internal_message' => $ex->getMessage(),
                    'message' => 'Você não tem a autorização necessária para acessar essa rotina, entre em contato com o administrador do sistema e solicite acesso.',
                ]], 403);
                break;

            case 204:
                return response()->json(["errors" => [
                    'status'  => 204,
                    'internal_message' => $ex->getMessage(),
                    'message' => 'Registro não encontrado',
                ]], 204);
                break;

            default:
                return response()->json(['errors' => [
                    'internal_message' => $ex->getMessage(),
                    'status'  => 500,
                    'message' => "Estamos com algum instabilidade no momento. Tente novamente em instantes.",
                ]], 500);
                break;
        }
    }
}
