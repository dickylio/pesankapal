<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RuteController extends Controller
{
    // Menampilkan daftar rute
    public function index()
    {
        $rute = Rute::with('kapal')->get();
        return response()->json($rute);
    }

    // Menyimpan rute baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rute' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $rute = Rute::create($request->all());
        return response()->json($rute, 201);
    }

    // Menampilkan rute berdasarkan ID
    public function show($id)
    {
        $rute = Rute::with('kapal')->find($id);

        if (!$rute) {
            return response()->json(['message' => 'Rute not found'], 404);
        }

        return response()->json($rute);
    }

    // Mengupdate rute berdasarkan ID
    public function update(Request $request, $id)
    {
        $rute = Rute::find($id);

        if (!$rute) {
            return response()->json(['message' => 'Rute not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'rute' => 'sometimes|required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $rute->update($request->all());
        return response()->json($rute);
    }

    // Menghapus rute berdasarkan ID
    public function destroy($id)
    {
        $rute = Rute::find($id);

        if (!$rute) {
            return response()->json(['message' => 'Rute not found'], 404);
        }

        $rute->delete();
        return response()->json(['message' => 'Rute deleted successfully']);
    }
}