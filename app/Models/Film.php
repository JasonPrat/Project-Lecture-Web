<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',
        'image',
        'title',
        'price',
        'rent_price',
        'synopsis',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
