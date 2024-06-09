<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Anamnese;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $jmlpasien = Pendaftaran::count();
        return view('pages.admin.index', compact('jmlpasien'));
    }

    public function data_pasien(Request $request)
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
        $addPasien = Pendaftaran::create([
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


        $anamnese = Anamnese::create([
            'pasien_id' => $addPasien->id,
            'poli' => $request->input('poli'),
            'tekanan_darah' => $request->input('tekanan_darah'),
            'suhu_tubuh' => $request->input('suhu_tubuh'),
            'gejala' => $request->input('gejala'),
            'diagnosa' => $request->input('diagnosa'),
            'terapi' => $request->input('terapi'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // return response()->json($request->all());
        if ($anamnese) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }

        // return response()->json($addPasien);
        return redirect('/admin/data-pasien');
    }
    public function hapuspendaftaran(Request $request)
    {
        Pendaftaran::where('id', $request->id)->delete();
        return redirect('/admin/data-pasien');
    }
}
