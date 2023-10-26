<?php

namespace Modules\Suministros\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReceptionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'reception', 'tipo', 'supply', 'cantidad', 'lote', 'caducidad', 'estante', 'indice'
    ];
   
    public function supplies(){
        return $this->belongsTo(Supply::class, 'supply');
    }
}
