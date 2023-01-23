<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category=Category::all();
        $film=Film::paginate(6);
        return view('welcome',['film'=>$film,'category'=>$category]);
    }
    public function viewIndexForm(){
        $category=Category::all();
        $film = Film::all();
        return view('Film.index',['category'=>$category,'film'=>$film]);

    }
    public function viewInsertForm(){
        $category=Category::all();
        return view('Film.create',['category'=>$category]);
    }
    public function viewUpdateForm($id){
        $category=Category::all();
        $film = Film::findOrFail($id);
        return view('Film.update',['category'=>$category,'film'=>$film]);
    }
    public function create_post(Request $request){
        $valid = Validator::make($request->all(),[
            'title'=>'required|unique:films|max:20',
            'price'=>'required|numeric|min:10',
            'rent_price'=>'required|numeric|min:1',
            'synopsis'=>'required|max:20000',
            'images'=>'image|required',
            'category_id'=>'required'
        ]);
        $data = new Film();
        $name='';
        if($request->file('images')){
            $file= $request->file('images');
            $name= $file->getClientOriginalName();
            Storage::putFileAs('public/img',$file,$name);
        }
        if ($valid->fails()){
            return back()->withErrors($valid);
        }
       
        
        $data->title=$request->title;
        $data->category_id=$request->category_id;
        $data->price=$request->price;
        $data->rent_price=$request->rent_price;
        $data->synopsis=$request->synopsis;
        $data->image=$name;
        $data->save();
        
        
        return redirect()->route('indexfilm')-> with('success','item added succesfully');

    }
    public function update_post(Request $request){
        $valid = Validator::make($request->all(),[
            'id'=>'required',
            'title'=>'required|max:20',
            'price'=>'required|numeric|min:10',
            'rent_price'=>'required|numeric|min:1',
            'synopsis'=>'required|max:20000',
            'category_id'=>'required'
        ]);
        
        $data = Film::find($request->id);
        $name='';
        if($request->file('images')){
            $file= $request->file('images');
            $name= $file->getClientOriginalName();
            Storage::putFileAs('public/img',$file,$name);
            File::delete(public_path('/storage/img/'.$data->images));          
        }
        else{
            $data->image=$data->image;
        }
        if ($valid->fails()){
            return back()->withErrors($valid);
        }
       
        
        $data->title=$request->title;
        $data->category_id=$request->category_id;
        $data->price=$request->price;
        $data->rent_price=$request->rent_price;
        $data->synopsis=$request->synopsis;
        $data->image=$name;
        $data->save();
        
        
        return redirect()->route('indexfilm')-> with('success','item updated succesfully');

    }
 
}
