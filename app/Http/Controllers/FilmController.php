<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;

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
    public function viewInsertForm(){
        $category=Category::all();
        $film = Film::all();
        return view('Film.index',['category'=>$category,'film'=>$film]);

    }
 
}
