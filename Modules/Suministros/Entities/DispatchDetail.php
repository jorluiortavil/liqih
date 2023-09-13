<?php

namespace Modules\Suministros\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DispatchDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'dispatch', 'article', 'cantidad'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Suministros\Database\factories\DispatchDetailFactory::new();
    }
}
