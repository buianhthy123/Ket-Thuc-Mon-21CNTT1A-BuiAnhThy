<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use App\Models\Loaisp;
use App\Models\Bill_detail;


class Sanpham extends Model
{
    use HasFactory;
    protected $table='sanphams';
    public function billDetail(){
        return $this->hasMany(Bill_detail::class,'id_sp','id');
    }
    public function Loaisp(): BelongsTo
    {
        return $this->belongsTo(Loaisp::class,'id_loaisp','id');
    }
    public function Nhacc(): HasMany
    {
        return $this->HasMany(Nhacc::class,'id_nhacc','id');
    }
}
