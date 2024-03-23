<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable =[
        'title','price','sale_price','image','destination_id','category_id ,stock' ,'ma_tour','ngay_khoi_hanh','thoi_gian','xuat_phat','diem_du_lich','so_cho'  ];

        public function destination(){
            return $this->belongsTo(Destinations::class);
        }
}
