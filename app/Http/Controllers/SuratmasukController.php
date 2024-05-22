<?php

namespace App\Http\Controllers;

use App\Models\Suratmasuk;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Suratmasuk::all();

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
            'tanggal_masuk' => 'required',
            'no_surat' => 'required',
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'asal_surat' => 'required',
            'klasifikasi' => 'required',
            'perihal' => 'required'
        ]);

        $insert = Suratmasuk::create($data);

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
        $data = Suratmasuk::find($id);

        return response()->json([
            'message' => 'Data succesfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suratmasuk $suratmasuk)
    {
        $data = $request->validate([
            'no_agenda' => 'required',
            'buku_agenda' => 'required',
            'tanggal_masuk' => 'required',
            'no_surat' => 'required',
            'tanggal_surat' => 'required',
            'jenis_surat' => 'required',
            'asal_surat' => 'required',
            'klasifikasi' => 'required',
            'perihal' => 'required'
        ]);

        $suratmasuk->update($data);

        return response()->json([
            'message' => 'Data successfully updated',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suratmasuk $suratmasuk)
    {
        $suratmasuk->delete();

        return response()->json('Data has been deleted');
    }
}
