<?php

namespace App\Models\PlanoContas;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanoContas extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'plano_contas';

    protected $fillable = [
        'nome',
        'tipo',
        'modalidade',
        'owner_id'
    ];

    public $timestamps = true;
}
