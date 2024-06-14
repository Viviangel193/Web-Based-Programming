<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Freelancer;

class FreelancerController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $freelancers = Freelancer::where('nama', 'like', "%$query%")
                                ->orWhere('spesialisasi', 'like', "%$query%")
                                ->orWhere('lokasi', 'like', "%$query%")
                                ->orderBy('id_freelancer', 'desc')
                                ->get();

        if ($freelancers->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $freelancers,
        ], 200);
    }
}
