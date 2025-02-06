<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
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
}
