<?php

namespace Modules\Suministros\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reception extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'concepto', 'tipo', 'fecha', 'nota', 'responsable', 'proveedor', 'observacion',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Suministros\Database\factories\ReceptionFactory::new();
    }
    public function details(){
        return $this->hasMany(ReceptionDetail::class, 'reception');
    }
}
