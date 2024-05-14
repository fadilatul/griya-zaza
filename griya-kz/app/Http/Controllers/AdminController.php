<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }

    public function data_pasien()
    {
        $data = Pendaftaran::orderBy('created_at', 'DESC')->get();
        return view('pages.admin.data-pasien', compact('data'));
    }

    public function tambah_pasien()
    {
        return view('pages.admin.tambah-pasien');
    }

    public function add_pasien(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'keterangan' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
        ], [
            'name.required' => 'Nama Wajib Di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Wajib Di isi',
            'usia.required' => 'Usia Wajib Di isi',
            'keterangan.required' => 'Keterangan Wajib Di isi',
            'jenis_kelamin.required' => 'Jenis Kelamin Wajib Di isi',
            'alamat.required' => 'Alamat Wajib Di isi',
            'kategori.required' => 'Tanggal Lahir Wajib Di isi'
        ]);

        // return response()->json($request->all());
        $addPasien = Pendaftaran::insert([
            'name' => $request->name,
            'tanggal_lahir' => $request->tanggal_lahir,
            'usia' => $request->usia,
            'keterangan' => $request->keterangan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomer_hp' => $request->nomer_hp,
            'alamat' => $request->alamat,
            'kategori' => $request->kategori,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if ($addPasien) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }
        // return response()->json($addPasien);
        return redirect('/admin/data-pasien');
    }
}
