<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Anamnese;
use App\Models\Pendaftaran;
use App\Models\Khitan;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        $jumpasien = Pendaftaran::count();
        $jumkhit = Khitan::count();
        return view('pages.dokter.index', compact('jumpasien','jumkhit'));
    }



    public function priksa_umum(Request $request)
    {
        $data_umum = Pendaftaran::where('jenis_pemeriksaan', 'periksa_umum')
                                ->orderBy('created_at', 'DESC')
                                ->get();
        return view('pages.dokter.data-priksa', compact('data_umum'));
    }

    public function priksa_gigi(Request $request)
    {
        $data_gigi = Pendaftaran::where('jenis_pemeriksaan', 'periksa_gigi')
                                ->orderBy('created_at', 'DESC')
                                ->get();
        return view('pages.dokter.data-gigi', compact('data_gigi'));
    }
}
