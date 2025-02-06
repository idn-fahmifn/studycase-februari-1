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
        $respon = Respon::where('id_laporan', $id)->get()->all();
        return view('admin.respon.respon', compact('data', 'respon'));
    }
    public function store(Request $request)
    {
        $input = $request;
        if ($request->hasFile('dokumentasi')) {
            // file yang diupload
            $file = $request->file('dokumentasi');
            $path = 'public/images/respon';
            $name = 'respon_' . Carbon::now()->format('ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->storeAs($path, $name);
            // yang dikirim ke database
            $dokumentasi = $name;
        }

        $tanggal_respon = Carbon::now()->format('Y-m-d H:i:s');
        $id_laporan = $request->id_laporan;        
        Respon::create([
            'judul_respon' => $input->judul_respon,
            'tanggal_respon' => $tanggal_respon,
            'id_laporan' => $id_laporan,
            'deskripsi' => $input->deskripsi,
            'dokumentasi' => $dokumentasi,
        ]);

        $status = Laporan::find($id_laporan);
        $status->status = $request->status;
        $status->save();

        return back()->with('success', 'Respon berhasil dikirim');
    }
}
