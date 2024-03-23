<?php

namespace App\Models;

use App\Models\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','image','category_id','slug','description'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
