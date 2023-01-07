<?php

namespace App\Models\CentroCusto;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CentroCustos extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'centro_custos';

    protected $fillable  = [
        'nome'
    ];

    public $timestamps = true;
}
