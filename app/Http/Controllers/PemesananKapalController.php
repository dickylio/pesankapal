<?php

namespace App\Http\Controllers;

use App\Models\PemesananKapal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemesananKapalController extends Controller
{
    // Menampilkan daftar pemesanan kapal
    public function index()
    {
        $pemesananKapal = PemesananKapal::with(['pelanggan', 'kapal'])->get();
        return response()->json($pemesananKapal);
    }

    // Menyimpan pemesanan kapal baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pelanggan' => 'required|exists:pelanggan,id',
            'id_kapal' => 'required|exists:kapal,id',
            'tanggal_pemesanan' => 'required|date',
            'jumlah_penumpang' => 'required|integer|min:1',
            'status_pemesanan' => 'required|string',
            'total_harga' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $pemesananKapal = PemesananKapal::create($request->all());
        return response()->json($pemesananKapal, 201);
    }

    // Menampilkan pemesanan kapal berdasarkan ID
    public function show($id)
    {
        $pemesananKapal = PemesananKapal::with(['pelanggan', 'kapal'])->find($id);

        if (!$pemesananKapal) {
            return response()->json(['message' => 'Pemesanan Kapal not found'], 404);
        }

        return response()->json($pemesananKapal);
    }

    // Mengupdate pemesanan kapal berdasarkan ID
    public function update(Request $request, $id)
    {
        $pemesananKapal = PemesananKapal::find($id);

        if (!$pemesananKapal) {
            return response()->json(['message' => 'Pemesanan Kapal not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'id_pelanggan' => 'sometimes|required|exists:pelanggan,id',
            'id_kapal' => 'sometimes|required|exists:kapal,id',
            'tanggal_pemesanan' => 'sometimes|required|date',
            'jumlah_penumpang' => 'sometimes|required|integer|min:1',
            'status_pemesanan' => 'sometimes|required|string',
            'total_harga' => 'sometimes|required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $pemesananKapal->update($request->all());
        return response()->json($pemesananKapal);
    }

    // Menghapus pemesanan kapal berdasarkan ID
    public function destroy($id)
    {
        $pemesananKapal = PemesananKapal::find($id);

        if (!$pemesananKapal) {
            return response()->json(['message' => 'Pemesanan Kapal not found'], 404);
        }

        $pemesananKapal->delete();
        return response()->json(['message' => 'Pemesanan Kapal deleted successfully']);
    }
}