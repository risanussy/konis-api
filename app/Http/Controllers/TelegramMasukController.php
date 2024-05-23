<?php

namespace App\Http\Controllers;

use App\Models\TelegramMasuk;
use Illuminate\Http\Request;

class TelegramMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TelegramMasuk::all();

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
            'dari' => 'required',
            'kepada' => 'required',
            'tanggal_masuk' => 'required',
            'tembusan' => 'required',
            'klasifikasi' => 'required',
            'jenis_telegram' => 'required',
            'no' => '',
            'tanggal_waktu_penunjukan' => 'required',
            'isi' => 'required'
        ]);

        $insert = TelegramMasuk::create($data);

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
        $data = TelegramMasuk::find($id);

        return response()->json([
            'message' => 'Data succesfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TelegramMasuk $telegramMasuk)
    {
        $data = $request->validate([
            'dari' => 'required',
            'kepada' => 'required',
            'tanggal_masuk' => 'required',
            'tembusan' => 'required',
            'klasifikasi' => 'required',
            'jenis_telegram' => 'required',
            'no' => 'required',
            'tanggal_waktu_penunjukan' => 'required',
            'isi' => 'required'
        ]);

        $telegramMasuk->update($data);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TelegramMasuk $telegramMasuk)
    {
        $telegramMasuk->delete();

        return response()->json('Data deleted successfully');
    }
}
