<?php

namespace App\Models\FormasPagamento;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormasPagamento extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'formas_pagamento';

    protected $fillable = [
        'nome',
        'tipo',
        'quantidade'
    ];

    public $timestamps = true;
}
