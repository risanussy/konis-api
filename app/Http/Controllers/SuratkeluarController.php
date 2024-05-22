<?php

namespace App\Http\Controllers;

use App\Models\Suratkeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Suratkeluar::all();

        return response()->json([
            'message' => 'Data succussfully get all',
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'no_agenda' => 'required',
            'buku_agenda' => 'required',
            'tanggal_keluar' => 'required',
            'no_surat' => 'required',
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'tujuan_surat' => 'required',
            'klasifikasi' => 'required',
            'perihal' => 'required'
        ]);

        $insert = Suratkeluar::create($data);

        return response()->json([
            'message' => 'Data succesfully added',
            'data' => $insert
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Suratkeluar::find($id);

        return response()->json([
            'message' => 'Data succesfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suratkeluar $suratkeluar)
    {
        $data = $request->validate([
            'no_agenda' => 'required',
            'buku_agenda' => 'required',
            'tanggal_keluar' => 'required',
            'no_surat' => 'required',
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'tujuan_surat' => 'required',
            'klasifikasi' => 'required',
            'perihal' => 'required'
        ]);

        $suratkeluar->update($data);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suratkeluar $suratkeluar)
    {
        $suratkeluar->delete();

        return response()->json('Data deleted successfully');
    }
}
