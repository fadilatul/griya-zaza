<?php
// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Khitan;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // Ambil data jumlah pendaftaran pasien per bulan
        $patients = Pendaftaran::select('month', 'count')->orderBy('month')->get();
        $patientLabels = $patients->pluck('month')->toArray();
        $patientData = $patients->pluck('count')->toArray();

        // Ambil data jumlah pasien khitan per bulan
        $khitanPatients = Khitan::select('month', 'count')->orderBy('month')->get();
        $khitanLabels = $khitanPatients->pluck('month')->toArray();
        $khitanData = $khitanPatients->pluck('count')->toArray();

        return view('pages.admin.index', [
            'patientLabels' => json_encode($patientLabels),
            'patientData' => json_encode($patientData),
            'khitanLabels' => json_encode($khitanLabels),
            'khitanData' => json_encode($khitanData),
        ]);
    }
}
