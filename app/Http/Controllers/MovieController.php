<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all(); //return all records from movies table
        return view('pages.home', compact('movies')); //send to view
    }

    public function addMovie(){

         return view('pages.add-movie');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title'=>'required|unique:movies|max:255',
            'director'=>'required',
            'description'=>'required'
        ]);

        Movie::create([
           'title'=>request('title'),
           'imdb'=>request('imdb'),
           'director'=>request('director'),
           'description'=>request('description'),
           'created'=>request('created')
        ]);
        return redirect('/');
    }
}
