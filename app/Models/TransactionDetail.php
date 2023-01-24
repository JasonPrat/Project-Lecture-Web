<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'transaction_id',
        'film_id',
        'subtotal',
    ];
    public function transaction(){
        return $this->belongsTo(Transaction::class,'transaction_id');
    }
    public function film(){
        return $this->belongsTo(Film::class,'film_id');
    }
    public function updatedetail($cartdetail,$harga){
        
        $this->attributes['subtotal']=$cartdetail->subtotal+($harga);
        self::save();
    }
}
