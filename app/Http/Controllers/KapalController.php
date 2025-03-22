<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KapalController extends Controller
{
    // Menampilkan daftar kapal
    public function index()
    {
        $kapal = Kapal::with(['fasilitas', 'rute', 'pemesanankapal'])->get();
        return response()->json($kapal);
    }

    // Menyimpan kapal baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_rute' => 'required|exists:rute,id',
            'gambar' => 'required|string',
            'nama_kapal' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'harga_tiket' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'status_kapal' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $kapal = Kapal::create($request->all());
        return response()->json($kapal, 201);
    }

    // Menampilkan kapal berdasarkan ID
    public function show($id)
    {
        $kapal = Kapal::with(['fasilitas', 'rute', 'pemesanankapal'])->find($id);

        if (!$kapal) {
            return response()->json(['message' => 'Kapal not found'], 404);
        }

        return response()->json($kapal);
    }

    // Mengupdate kapal berdasarkan ID
    public function update(Request $request, $id)
    {
        $kapal = Kapal::find($id);

        if (!$kapal) {
            return response()->json(['message' => 'Kapal not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_rute' => 'sometimes|required|exists:rute,id',
            'gambar' => 'sometimes|required|string',
            'nama_kapal' => 'sometimes|required|string|max:255',
            'kapasitas' => 'sometimes|required|integer',
            'harga_tiket' => 'sometimes|required|numeric',
            'deskripsi' => 'sometimes|nullable|string',
            'status_kapal' => 'sometimes|required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $kapal->update($request->all());
        return response()->json($kapal);
    }

    // Menghapus kapal berdasarkan ID
    public function destroy($id)
    {
        $kapal = Kapal::find($id);

        if (!$kapal) {
            return response()->json(['message' => 'Kapal not found'], 404);
        }

        $kapal->delete();
        return response()->json(['message' => 'Kapal deleted successfully']);
    }
}