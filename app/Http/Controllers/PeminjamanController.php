<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::all();

        return response()->json([
            'message' => 'Data successfully get all',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'kode_barang' => 'required',
            'jenis_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'nama_peminjaman' => 'required',
            'bagian' => 'required',
            'dokumen' => 'required',
        ]);

        $insert = Peminjaman::create($data);

        return response()->json([
            'message' => 'Data successfully added',
            'data' => $insert
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Peminjaman::find($id);

        return response()->json([
            'message' => 'Data succesfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $pinjam)
    {
        $data = $request->validate([
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'kode_barang' => 'required',
            'jenis_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'nama_peminjaman' => 'required',
            'bagian' => 'required',
            'dokumen' => 'required',
        ]);

        $pinjam->update($data);
        
        return response()->json([
            'message' => 'Data successfully updated',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $pinjam)
    {
        $pinjam->delete();

        return response()->json('Data has been deleted');
    }
}
