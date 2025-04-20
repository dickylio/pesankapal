<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;

class KapalController extends Controller
{
    public function index(Request $request)
    {
        $query = Kapal::query();
        
        // Filter by availability - only show available boats
        $query->where('status_kapal', 'tersedia');

        // Additional filters
        if ($request->filled('nama_kapal')) {
            $query->where('nama_kapal', 'like', '%' . $request->nama_kapal . '%');
        }

        if ($request->filled('kapasitas')) {
            // Handle capacity ranges
            $kapasitas = $request->kapasitas;
            if ($kapasitas == '1-10') {
                $query->whereBetween('kapasitas', [1, 10]);
            } elseif ($kapasitas == '11-20') {
                $query->whereBetween('kapasitas', [11, 20]);
            } elseif ($kapasitas == '21-50') {
                $query->whereBetween('kapasitas', [21, 50]);
            } elseif ($kapasitas == '50+') {
                $query->where('kapasitas', '>', 50);
            } else {
                // If not a range, try to match exact value
                $query->where('kapasitas', $kapasitas);
            }
        }

        // Use pagination for better performance
        $kapal = $query->paginate(10);

        return view('booking', compact('kapal'));
    }
}