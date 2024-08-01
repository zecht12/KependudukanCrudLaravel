<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KependudukanModels;

class KependudukanController extends Controller
{
    public function index()
    {
        $kependudukans = KependudukanModels::all();
        return view('kependudukan', compact('kependudukans'));
    }

    public function edit($nim)
    {
        $kependudukan = KependudukanModels::find($nim);
        return view('edit', compact('kependudukan'));
    }

    public function update(Request $request, $nik)
    {
        $kependudukan = KependudukanModels::find($nik);
        $kependudukan->nik = $request->nik;
        $kependudukan->nama = $request->nama;
        $kependudukan->alamat = $request->alamat;
        $kependudukan->tempat_lahir = $request->tempat_lahir;
        $kependudukan->tanggal_lahir = $request->tanggal_lahir;
        $kependudukan->agama = $request->agama;
        $kependudukan->pendidikan = $request->pendidikan;
        $kependudukan->save();
        $updatedkependudukan = KependudukanModels::find($nik);
        return view('update', compact('updatedkependudukan'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $kependudukan = new KependudukanModels();
        $kependudukan->nik = $request->nik;
        $kependudukan->nama = $request->nama;
        $kependudukan->alamat = $request->alamat;
        $kependudukan->tempat_lahir = $request->tempat_lahir;
        $kependudukan->tanggal_lahir = $request->tanggal_lahir;
        $kependudukan->agama = $request->agama;
        $kependudukan->pendidikan = $request->pendidikan;
        $kependudukan->save();
        return view('store', compact('kependudukan'));
    }
    public function delete($nik)
    {
        $kependudukan = KependudukanModels::find($nik);
        $kependudukan->delete();
        return redirect('/kependudukan');
    }
}
