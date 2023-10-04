<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Sanpham;

class Loaisp extends Model
{
    use HasFactory;
    protected $table='loaisps';

    public function sanpham(): HasMany
    {
        return $this->hasMany(Sanpham::class,'id_loaisp','id');
    }
}
