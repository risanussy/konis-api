<?php

namespace App\Http\Controllers;

use App\Models\Spektek;
use Illuminate\Http\Request;

class SpektekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Spektek::all();

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
        try {
            $data = $request->validate([
                'lokasi' => 'required',
                'kode_barang' => 'required',
                'jenis_barang' => 'required',
                'merk' => 'required',
                'spesifikasi' => 'required',
                'jumlah' => 'required',
                'satuan' => 'required',
                'kondisi' => 'required',
                'tahun' => 'required',
                'asal' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg,gif',
                'tanggal' => 'required',
                'dokumen' => 'required',
                'keterangan' => 'required',
                'qr_code' => 'required',
            ]);
        
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $data['gambar'] = $imageName;
            }
        
            $insert = Spektek::create($data);
        
            return response()->json([
                'message' => 'Data successfully inserted',
                'data' => $insert
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage()
            ], 500);
        }        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Spektek::find($id);

        return response()->json([
            'message' => 'Data successfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spektek $spektek)
    {
        $data = $request->validate([
            'lokasi' => 'required',
            'kode_barang' => 'required',
            'jenis_barang' => 'required',
            'merk' => 'required',
            'spesifikasi' => 'required',
            'jumlah' => 'required',
            'satuan' => 'required',
            'kondisi' => 'required',
            'tahun' => 'required',
            'asal' => 'required',
            'gambar' => 'required',
            'tanggal' => 'required',
            'dokumen' => 'required',
            'keterangan' => 'required',
            'qr_code' => 'required',

        ]);

        $spektek->update($data);

        return response()->json([
            'message' => 'Data successfully updated',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spektek $spektek)
    {
        $spektek->delete();

        return response()->json('Data has been deleted');
    }
}
