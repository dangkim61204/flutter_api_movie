<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $query = Movie::query();

        if ($search = $request->query('search')) {
            $query->where('title', 'like', "%$search%")
                ->orWhere('genre', 'like', "%$search%");
        }

        // Lấy danh sách và phân trang
        $movies = $query->orderBy('created_at', 'desc')->paginate(8);



        return response()->json($movies);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'genre' => 'required|string',
            'episodes' => 'required|integer',
            'duration' => 'required|string',
            'status' => 'required|string',
            'actors' => 'required|string',
            'rating' => 'required|numeric',
            'imageUrl' => 'nullable|string',
            'content' => 'required|string',
        ]);

        $movie = Movie::create($validated);
        return response()->json($movie, 201);
    }

    public function show($id)
    {
        return response()->json(Movie::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'genre' => 'sometimes|required|string',
            'episodes' => 'sometimes|required|integer',
            'duration' => 'sometimes|required|string',
            'status' => 'sometimes|required|string',
            'actors' => 'sometimes|required|string',
            'rating' => 'sometimes|required|numeric',
            'imageUrl' => 'nullable|string',
            'content' => 'sometimes|required|string',
        ]);

        $movie->update($validated);
        return response()->json($movie);
    }

    public function destroy($id)
    {
        Movie::destroy($id);
        return response()->json(['message' => 'Movie deleted successfully']);
    }
}
