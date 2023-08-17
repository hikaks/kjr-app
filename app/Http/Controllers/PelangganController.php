<?php

namespace App\Http\Controllers;

use App\Models\JenisGerobak;
use App\Models\JenisMinuman;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PelangganController extends Controller
{
    public function create()
    {
        $jenisMinuman = JenisMinuman::all();
        $jenisGerobak = JenisGerobak::all();

        return view('pelanggan-form', compact('jenisMinuman', 'jenisGerobak'));
    }

    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());

        if ($pelanggan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Pelanggan Sukses!');
        }

        return redirect('/tambah-pelanggan');
    }

    public function merk()
    {
        $data = JenisMinuman::where('nama_minuman','Like','%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }
    public function type($id)
    {
        $data = JenisGerobak::where('id_minuman',$id)->where('nama_gerobak','Like','%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }

}
