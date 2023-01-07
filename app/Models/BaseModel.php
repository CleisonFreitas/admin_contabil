<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use HasFactory;

    protected function CreatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Date('Y-m-d',strtotime($value)),
        );
    }

    protected function UpdatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Date('Y-m-d',strtotime($value)),
        );
    }

    static function fetchAll($terms = "", $page, $per_page, $sort, $order, $baseModel)
    {
        $resource = $baseModel::OrderBy($sort, $order)
            ->where(function ($query) use ($terms) {
                return $query->WhereRaw($terms);
            })
            ->paginate($per_page, ['*'], 'page', $page);

        return [
            'data' => $resource->items(),
            'page' => $resource->currentPage(),
            'per_page' => $resource->perPage(),
            'last_item' => $resource->lastItem(),
            'prev_page_url' => $resource->previousPageUrl(),
            'next_page_url' => $resource->nextPageUrl(),
            'last_page' => $resource->lastPage(),
            'total' => $resource->total()
        ];
    }
}
