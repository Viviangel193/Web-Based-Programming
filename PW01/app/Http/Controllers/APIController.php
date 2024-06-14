<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class APIController extends Controller
{
    public function searchmovies(Request $request)
    {
        $cari = $request->input('q');

        $movies = Movies::where('title', 'LIKE', "%$cari%")->get();
        if ($movies->isEmpty())
        {
            return response()->json([
                'Success' => false,
                'data' => 'Data Tidak Ditemukan'
            ], 200)->header('Access-Control-Allow-Origin', '*');
        }
        else
        {
            return response()->json([
                'Success' => true,
                'data' => $movies
            ], 200)->header('Access-Control-Allow-Origin', '*');
        }
    }
}
