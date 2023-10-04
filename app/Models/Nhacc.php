<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nhacc extends Model
{
    use HasFactory;
    protected $table='nhaccs';
    public function sanpham(): belongsTo
    {
        return $this->belongsTo(sanpham::class,'id_nhacc','id');
    }
}
