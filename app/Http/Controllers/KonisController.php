<?php

namespace App\Http\Controllers;

use App\Models\Konis;
use Illuminate\Http\Request;

class KonisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Konis::all();

        return response()->json([
            'messege' => 'Data successfully get all',
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
            'keterangan' => '',
        ]);

        $insert = Konis::create($data);

        return response()->json([
            'messege' => 'Data insert succesfully',
            'data' => $insert
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Konis::find($id);

        return response()->json([
            'messege' => 'Data successfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konis $konis)
    {
        $data = $request->validate([
            'lokasi' => 'required',
            'jenis_barang' => 'required',
            'merk' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'kondisi' => 'required',
            'keterangan' => '',
        ]);

        $konis->update($data);

        return response()->json([
            'message' => 'Data has been updated successfully',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konis $konis)
    {
        $konis->delete();

        return response()->json('Data has been deleted');
    }
}
