<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function list(){
        $movies = Movie::paginate(4);

        $datas = [
            'movies'=>$movies
        ];

        return view('movieList', $datas);
    }
    public function addForm(){
        $genres = Genre::All();
        return view('addMovie', ['genres'=>$genres]);
    }

    public function addNew(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:30',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'publish_date' => 'required|date|before_or_equal:today',
            'description'=>'required|string|max:50',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $photo = $request->file('photo')->store('images', 'public');
        $validated['photo'] = $photo;
        Movie::create($validated);

        return redirect()->route('movie.index')->with('success', 'New movie added successfully');
    }

    public function delete(Movie $movie){
        if ($movie->photo) {
            Storage::disk('public')->delete($movie->photo);
        }

        $movie->delete();

        return redirect()->route('movie.index')->with('success', 'Movie deleted successfully');
    }
}
