<?php

namespace App\Models\Fornecedores;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'fornecedores';

    protected $fillable = [
        'nm_fornecedor',
        'nr_cnpj',
        'nr_cpf',
        'ins_estadual',
        'ins_municipal',
        'email',
        'telefone',
        'celular',
        'whatsapp',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'observacao'

    ];

    public $timestamps = true;

    static function listAll($query,$page,$per_page,$sort,$order)
    {
        $resource = Self::OrderBy($sort,$order)
                    ->paginate($per_page, ['*'],'page',$page);

        return [
            'data' => $resource->items(),
            'page' => $resource->currentPage(),
            'per_page' => $resource->perPage(),
            'last_item' => $resource->lastItem(),
            'total' => $resource->total()
        ];
    }
}
