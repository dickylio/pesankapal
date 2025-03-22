<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::with('user', 'pemesanankapal')->get();
        return response()->json($pelanggan);
    }

    // Menyimpan pelanggan baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'nomor_telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $pelanggan = Pelanggan::create($request->all());
        return response()->json($pelanggan, 201);
    }

    // Menampilkan pelanggan berdasarkan ID
    public function show($id)
    {
        $pelanggan = Pelanggan::with('user', 'pemesanankapal')->find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        return response()->json($pelanggan);
    }

    // Mengupdate pelanggan berdasarkan ID
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'user_id' => 'sometimes|required|exists:users,id',
            'nomor_telepon' => 'sometimes|required|string|max:15',
            'alamat' => 'sometimes|nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $pelanggan->update($request->all());
        return response()->json($pelanggan);
    }

    // Menghapus pelanggan berdasarkan ID
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        $pelanggan->delete();
        return response()->json(['message' => 'Pelanggan deleted successfully']);
    }
}