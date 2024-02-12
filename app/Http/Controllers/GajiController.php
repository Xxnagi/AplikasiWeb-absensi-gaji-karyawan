<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    //menampilkan semua data
    {
        return view('gaji.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    //menampilkan form untuk data baru
    {
        return view('gaji.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    //memasukkan data baru ke database
    {
        $request->validate([
           'id_gaji' => 'required|numeric|unique:gaji,id_gaji',
           'nama_karyawan' => 'required',
           'jabatan' => 'required',
           'bulan' => 'required',
           'gaji_pokok' => 'required',
           'potongan' => 'required',
           'total_gaji' => 'required',
        ]);
        $data = [
           'id_gaji' => $request ->id_gaji,
           'nama_karyawan' => $request ->nama,
           'jabatan' => $request ->jabatan,
           'bulan' => $request ->bulan,
           'gaji_pokok' => $request ->gaji_pokok,
           'potongan' => $request ->potongan_gaji,
           'total_gaji' => $request ->total_gaji,
        ];
        Gaji::create($data);
        return'HI';
        
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    //menampilkan detail data
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    //menampilkan form untuk proses edit
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    //menyimpan update data
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    //melakukan penghapusan data
    {
        //
    }
}
