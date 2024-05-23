<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TelegramKeluar;

class TelegramKeluarController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TelegramKeluar::all();

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
            'tembusan' => 'required',
            'klasifikasi' => 'required',
            'jenis_telegram' => 'required',
            'no' => 'required',
            'tanggal_waktu_penunjukan' => 'required',
            'tanggal_waktu_pembikinan' => 'required',
            'isi' => 'required'
        ]);

        $insert = TelegramKeluar::create($data);

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
        $data = TelegramKeluar::find($id);

        return response()->json([
            'message' => 'Data succesfully finded',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TelegramKeluar $telegramkeluar)
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
            'tanggal_waktu_pembikinan' => 'required',
            'isi' => 'required'
        ]);

        $telegramkeluar->update($data);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telegramkeluar $telegramkeluar)
    {
        $telegramkeluar->delete();

        return response()->json('Data deleted successfully');
    }
}
