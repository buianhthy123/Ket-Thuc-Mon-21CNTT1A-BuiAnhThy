<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Bill;
use App\Models\Sanpham;

class Bill_detail extends Model
{
    use HasFactory;
    protected $table='bill_details';

    public function bill(){
        return $this->belongsTo(Bill::class,'id_bill','id');
    }

    public function sanpham(){
        return $this->belongsTo(Sanpham::class,'id_sp','id');   
    }
}
