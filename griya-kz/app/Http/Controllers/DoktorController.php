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

    // public function index()
    // {
    //     return view('pages.dokter.index');
    // }

    public function priksa_pasien()
    {
        $data = Pendaftaran::orderBy('created_at', 'DESC')->get();
        return view('pages.dokter.data-priksa', compact('data'));
    }
}
