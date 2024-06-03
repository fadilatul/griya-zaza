<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Anamnese;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        return view('pages.dokter.index');
    }

    public function priksa_pasien()
    {
        $data = Pendaftaran::orderBy('created_at', 'DESC')->get();
        return view('pages.dokter.data-priksa', compact('data'));
    }
}
