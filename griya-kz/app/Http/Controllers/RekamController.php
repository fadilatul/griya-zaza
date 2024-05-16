<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Anamnese;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RekamController extends Controller
{
    public function rekam_medis(Request $request)
    {
        $pasien = Pendaftaran::find($request->id);
        // return response()->json($pasien);
        return view('pages.rekam-medis.rekammedis', compact('pasien'));
    }

    public function tambah_rekam(Request $request)
    {
        return view('pages.rekam-medis.tambah-rekam');
    }

    public function add_rekam(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tanggal_masuk' => 'required',
            'poli_id' => 'integer',
            'tekanan_darah' => 'required',
            'suhu_tubuh' => 'required',
            'gejala' => 'required',
            'diagnosa_id' => 'required',
            'terapi' => 'required'
        ], [
            'tanggal_masuk.required' => 'Tanggal Masuk Harus diisi',
            'poli.required' => 'Pilih Salah satu Poli',
            'tekanan_darah.required' => 'Wajib Di isi',
            'suhu_tubuh.required' => 'Wajib Di isi',
        ]);

        // return response()->json($request->all());
        $addRekam = Anamnese::insert([
            'pasien_id' => $request->pasien_id,
            'tanggal_masuk' => $request->tanggal_masuk,
            'poli_id' => $request->poli_id,
            'tekanan_darah' => $request->tekanan_darah,
            'suhu_tubuh' => $request->suhu_tubuh,
            'gejala' => $request->gejala,
            'diagnosa_id' => $request->diagnosa_id,
            'terapi' => $request->terapi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if ($addRekam) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }
        // return response()->json($addRekam);
        return redirect('/admin/rekam-medis/{id}');
    }
}
