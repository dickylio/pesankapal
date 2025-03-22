<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
    // Menampilkan daftar fasilitas
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return response()->json($fasilitas);
    }

    // Menyimpan fasilitas baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|string',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fasilitas = Fasilitas::create($request->all());
        return response()->json($fasilitas, 201);
    }

    // Menampilkan fasilitas berdasarkan ID
    public function show($id)
    {
        $fasilitas = Fasilitas::find($id);

        if (!$fasilitas) {
            return response()->json(['message' => 'Fasilitas not found'], 404);
        }

        return response()->json($fasilitas);
    }

    // Mengupdate fasilitas berdasarkan ID
    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);

        if (!$fasilitas) {
            return response()->json(['message' => 'Fasilitas not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'gambar' => 'sometimes|required|string',
            'nama' => 'sometimes|required|string|max:255',
            'deskripsi' => 'sometimes|nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fasilitas->update($request->all());
        return response()->json($fasilitas);
    }

    // Menghapus fasilitas berdasarkan ID
    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);

        if (!$fasilitas) {
            return response()->json(['message' => 'Fasilitas not found'], 404);
        }

        $fasilitas->delete();
        return response()->json(['message' => 'Fasilitas deleted successfully']);
    }
}