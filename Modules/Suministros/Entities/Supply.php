<?php

namespace Modules\Suministros\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','codigo','nombre', 'principio', 'unidades', 'presentacion', 'formula', 'administración', 'farmacopedia', 'laboratorio'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Suministros\Database\factories\SupplyFactory::new();
    }
}
