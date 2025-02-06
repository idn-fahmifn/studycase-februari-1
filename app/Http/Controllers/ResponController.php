<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Respon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function index()
    {
        $data = Laporan::all();
        return view('admin.respon.index', compact('data'));
    }
    public function respon($id)
    {
        $data = Laporan::findOrFail($id);
        return view('admin.respon.respon', compact('data'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('dokumentasi')) {
            // file yang diupload
            $file = $request->file('dokumentasi');
            $path = 'public/images/respon';
            $name = 'respon_' . Carbon::now()->format('ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->storeAs($path, $name);

            // yang dikirim ke database
            $input['dokumentasi'] = $name;
        }

        $input['tanggal_respon'] = Carbon::now()->format('Y-m-d H:i:s');
        $input['id_laporan'] = $request->id_laporan;

        Respon::create($input);
        return back()->with('success', 'Respon berhasil dikirim');
    }
}
