<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        return view('user.laporan.index');
    }

    public function create()
    {
        return view('user.laporan.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('dokumentasi'))
        {
            // file yang diupload
            $file = $request->file('dokumentasi');
            $path = 'public/images/laporan';
            $name = 'laporan_'.Carbon::now()->format('ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs($path, $name);

            // yang dikirim ke database
            $input['dokumentasi'] = $name;
        }
        
        $input['tanggal_laporan'] = Carbon::now()->format('Y-m-d H:i:s');
        $input['id_user'] = Auth::user()->id;

        Laporan::create($input);
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dikirim');

    }
}
