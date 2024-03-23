<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'adult',
        'children',
        'start_date_book',
        'message',
        'tour_id',
    ];

    // Định nghĩa mối quan hệ với model Tour
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

}
