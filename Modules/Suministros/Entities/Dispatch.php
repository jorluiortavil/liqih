<?php

namespace Modules\Suministros\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dispatch extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'concepto', 'fecha', 'responsable', 'beneficiario', 'observacion',];
    
    protected static function newFactory()
    {
        return \Modules\Suministros\Database\factories\DispatchFactory::new();
    }
    public function details(){
        return $this->hasMany(DispatchDetail::class, 'dispatch');
    }
}
