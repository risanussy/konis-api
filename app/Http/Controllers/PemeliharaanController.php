<?php

namespace App\Http\Controllers;

use App\Models\Pemeliharaan;
use Illuminate\Http\Request;

class PemeliharaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pemeliharaan::all();

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
            'tanggal' => 'required',
            'uraian' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'durasi' => 'required',
            'keterangan' => 'required',
        ]);

        $insert = Pemeliharaan::create($data);

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
        $data = Pemeliharaan::find($id);

        return response()->json([
            'message' => 'Datra successfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemeliharaan $pp)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'uraian' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'durasi' => 'required',
            'keterangan' => 'required',
        ]);

        $pp->update($data);

        return response()->json([
            'message' => 'Data successfully updated',
            'data' => $data
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemeliharaan $pp)
    {
        $pp->delete();

        return response()->json('Data has been deleted');
    }
}
