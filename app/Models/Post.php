<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{
    public function scopeLatestLimit(Builder $q, $limit)
    {
        $q->orderBy('updated_at')
            ->limit($limit);
    }
}
