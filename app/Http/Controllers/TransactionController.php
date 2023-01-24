<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function index_member(){
        $category=Category::all();
        $userid=Auth::id();
        $trans = Transaction::where('user_id',$userid)->get();
        return view('transaction')->with(["trans"=>$trans,'category'=>$category]);
    }
    public function index_admin(){
        $category=Category::all();
        $trans = Transaction::all();
        return view('transaction')->with(["trans"=>$trans,'category'=>$category]);
    }
    public function buy(Request $req){
        $this->validate($req,[
            'film_id'=>'required',
            
        ]);
        
        $userid= Auth::id();
        $film = Film::findOrFail($req->film_id);
        $trans = Transaction::where('user_id',$userid)->where('type',"buy")->first();
        if ($trans){
            $itemtrans=$trans;
        }
        else{
            $transatr['user_id']=$userid;
            $transatr['grandtotal']=0;
            $transatr['type']="buy";
            $itemtrans=Transaction::create($transatr);
        }
        $transdetail=TransactionDetail::where('transaction_id',$itemtrans->id)
                                ->where('film_id',$film->id)->first();
       
        $film_price=$film->price;
        $subtotal=$film_price;
        if($transdetail){
            $transdetail->updatedetail($transdetail,$film_price);
            $transdetail->transaction->grandtotal($transdetail,$subtotal);
        }
        else{
            $detail['transaction_id']=$itemtrans->id;
            $detail['film_id']=$film->id;
            
            $detail['subtotal']=$subtotal;
            $transdetail = TransactionDetail::create($detail);
            $transdetail->transaction->grandtotal($transdetail->transaction,$subtotal);
        }


        return redirect()->route('transindex');


    }
    public function rent(Request $req){
        $this->validate($req,[
            'film_id'=>'required',
            
        ]);
        $userid= Auth::id();
        $film = Film::findOrFail($req->film_id);
        $trans = Transaction::where('user_id',$userid)->where('type',"rent")->first();
        if ($trans){
            $itemtrans=$trans;
        }
        else{
            $transatr['user_id']=$userid;
            $transatr['type']="rent";
            $transatr['grandtotal']=0;
            $itemtrans=Transaction::create($transatr);
        }
        $transdetail=TransactionDetail::where('transaction_id',$itemtrans->id)
                                ->where('film_id',$film->id)->first();
       
        $film_price=$film->rent_price;
        $subtotal=$film_price;
        if($transdetail){
            $transdetail->updatedetail($transdetail,$film_price);
            $transdetail->transaction->grandtotal($transdetail,$subtotal);
        }
        else{
            $detail['transaction_id']=$itemtrans->id;
            $detail['film_id']=$film->id;
            
            $detail['subtotal']=$subtotal;
            $transdetail = TransactionDetail::create($detail);
            $transdetail->transaction->grandtotal($transdetail->transaction,$subtotal);
        }


        return redirect()->route('transindex');

    }
}
