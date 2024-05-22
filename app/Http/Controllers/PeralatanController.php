<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peralatan::all();

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
            'lokasi' => 'required',
            'jenis_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'kondisi' => 'required',
            'tanggal' => 'required',
            'dokumen' => 'required',
        ]);

        $insert = Peralatan::create($data);

        return response()->json([
            'message' => 'Data succussfully added',
            'data' => $insert 
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Peralatan::find($id);

        return response()->json([
            'message' => 'Data succussfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peralatan $peralatan)
    {
        $data = $request->validate([
            'lokasi' => 'required',
            'jenis_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'kondisi' => 'required',
            'tanggal' => 'required',
            'dokumen' => 'required',
            'keterangan' => '',
        ]);

        $peralatan->update($data);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $peralatan,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peralatan $peralatan)
    {
        $peralatan->delete();

        return response()->json('Data has been deleted successfully');
    }
}
