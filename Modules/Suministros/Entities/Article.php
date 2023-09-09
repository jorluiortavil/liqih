<?php

namespace Modules\Suministros\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'reception', 'tipo', 'supply', 'cantidad', 'proveedor', 'lote', 'caducidad', 'estante', 'indice'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Suministros\Database\factories\ArticleFactory::new();
    }
}
