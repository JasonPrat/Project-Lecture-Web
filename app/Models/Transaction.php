<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'type',
        'grandtotal'
    ];
    public function detail(){
        return $this->hasMany(TransactionDetail::class,'transaction_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function grandtotal($cartdetails,$subtotal){
        $this->attributes['grandtotal']=$cartdetails->grandtotal+$subtotal;
        self::save();
    }
}
