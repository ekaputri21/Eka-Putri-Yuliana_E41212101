<?php

namespace App\Http\Controllers;

use App\Models\PartaiPolitik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kandidat= DB::table('kandidat')->get();
        return view('kandidat/kandidatindex', compact('kandidat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Tampilan Create
        return view('kandidat/kandidatcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan Data
        DB::table('kandidat')->insert([
            'id' => $request->id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_partai' => $request->nama_partai
        ]);

        //jika berhasil kembali ke index
        return redirect()->route('kandidat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan lebih detail data
        $kandidat = DB::table('kandidiat')->where('id', $id)->get();
        return view('kandidat/kandidatshow', compact('kandidat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit data
        $kandidat = DB::table('kandidat')->where('id', $id)->get();
        return view('kandidat/kandidatedit', compact('kandidat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update data
        DB::table('kandidat')->where('id', $id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_partai' => $request->nama_partai
        ]);

        //jika berhasil diubah kembali ke index
        return redirect()->route('kandidat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //untuk menghapus data
        DB::table('kandidat')->where('id', $id)->delete();

        //jika berhasil kembali ke index
        return redirect()->route('kandidat.index');
    }
}
