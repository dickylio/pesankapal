<?php

namespace App\Http\Controllers;

use App\Models\FasilitasKapal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasKapalController extends Controller
{
    // Menampilkan daftar fasilitas kapal
    public function index()
    {
        $fasilitasKapal = FasilitasKapal::with(['fasilitas', 'kapal'])->get();
        return response()->json($fasilitasKapal);
    }

    // Menyimpan fasilitas kapal baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_kapal' => 'required|exists:kapal,id',
            'id_fasilitas' => 'required|exists:fasilitas,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fasilitasKapal = FasilitasKapal::create($request->all());
        return response()->json($fasilitasKapal, 201);
    }

    // Menampilkan fasilitas kapal berdasarkan ID
    public function show($id)
    {
        $fasilitasKapal = FasilitasKapal::with(['fasilitas', 'kapal'])->find($id);

        if (!$fasilitasKapal) {
            return response()->json(['message' => 'Fasilitas Kapal not found'], 404);
        }

        return response()->json($fasilitasKapal);
    }

    // Mengupdate fasilitas kapal berdasarkan ID
    public function update(Request $request, $id)
    {
        $fasilitasKapal = FasilitasKapal::find($id);

        if (!$fasilitasKapal) {
            return response()->json(['message' => 'Fasilitas Kapal not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_kapal' => 'sometimes|required|exists:kapal,id',
            'id_fasilitas' => 'sometimes|required|exists:fasilitas,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fasilitasKapal->update($request->all());
        return response()->json($fasilitasKapal);
    }

    // Menghapus fasilitas kapal berdasarkan ID
    public function destroy($id)
    {
        $fasilitasKapal = FasilitasKapal::find($id);

        if (!$fasilitasKapal) {
            return response()->json(['message' => 'Fasilitas Kapal not found'], 404);
        }

        $fasilitasKapal->delete();
        return response()->json(['message' => 'Fasilitas Kapal deleted successfully']);
    }
}