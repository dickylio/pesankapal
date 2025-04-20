<?php

namespace App\Http\Controllers;


use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::where('user_id', Auth::id())->first();
        return view('pelanggan', compact('pelanggan'));
    }

    // Membuat pelanggan baru
    public function create()
    {
        // Cek apakah user sudah memiliki data pelanggan
        $existingPelanggan = Pelanggan::where('user_id', Auth::id())->first();
        
        if ($existingPelanggan) {
            return redirect()->route('pelanggan')->with('error', 'You have already submitted your information.');
        }

        return view('pelanggan');
    }

    // Menyimpan pelanggan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:15',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:pelanggan',
            'alamat_lengkap' => 'required|string|max:255'
        ]);

        try {
            Pelanggan::updateOrCreate(
                ['user_id' => Auth::id()],
                $validated
            );

            return redirect()->route('homebooking')->with('success', 'Pelanggan created successfully.');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Something went wrong! Please try again.')
                ->withInput();
        }
    }

    // Menampilkan pelanggan berdasarkan ID
    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);

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
            'nama_lengkap' => 'required|string|max:15',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:pelanggan',
            'alamat_lengkap' => 'sometimes|nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $pelanggan->update($request->only(['nama_lengkap', 'nomor_telepon','email', 'alamat_lengkap']));
        return response()->json(['message' => 'Pelanggan updated successfully.', 'data' => $pelanggan]);
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