<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Khitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KhitanController extends Controller
{
    public function index()
    {
        $khitan = Khitan::orderBy('created_at', 'DESC')->get();
        return view('pages.khitan.index', compact('khitan'));
    }
    public function create()
    {
        return view('pages.khitan.tambah-khitan');
    }
    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'jenis_paket' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Nama Wajib Di isi',
            'tanggal.required' => 'Tanggal Daftar Wajib Di isi',
            'jam.required' => 'Jam Wajib Di isi',
            'jenis_paket.required' => 'Jenis Paket Wajib Di isi',
            'tempat.required' => 'Tempat Wajib Di isi',
            'alamat.required' => 'Alamat Wajib Di isi'
        ]);

        // return response()->json($request->all());
        $addKhitan = Khitan::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'jenis_paket' => $request->jenis_paket,
            'tempat' => $request->tempat,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // return response()->json($request->all());
        if ($addKhitan) {
            Session::flash('success', 'Berhasil Menambahkan Data');
        }

        // return response()->json($addKhitan);
        return redirect('/khitan');
    }

    public function hapus(Request $request)
    {
        Khitan::where('id', $request->id)->delete();
        return redirect('/khitan');
    }

    public function detail(Request $request)
    {
        $detail = Khitan::find($request->id);

        // return response()->json($detail);
        return view('pages.khitan.detail', compact('detail'));
    }

    public function edit(Request $request)
    {
        $khitan = Khitan::find($request->id);
        return view('pages.khitan.edit', compact('khitan'));
    }

    public function update(Request $request)
    {
        $khitan = Khitan::where('id', $request->id)->first();
        $khitan->name = $request->name;
        $khitan->tanggal = $request->tanggal;
        $khitan->jam = $request->jam;
        $khitan->jenis_paket = $request->jenis_paket;
        $khitan->tempat = $request->tempat;
        $khitan->alamat = $request->alamat;
        $khitan->status = $request->status;
        $khitan->save();
        // return response()->json($khitan);
        return redirect('/khitan')->with('success', 'Data updated successfully');
    }
}
