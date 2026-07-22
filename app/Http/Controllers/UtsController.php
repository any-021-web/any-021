<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class UtsController extends Controller
{
    public function index()
    {
        return view('uts.index');
    }

    public function produk()
    {
        return view('uts.produk');
    }

    public function profil()
    {
        return view('uts.profil');
    }
   
    public function pemesanan()
    {
        $produk = request('produk');
        return view('uts.pemesanan', compact('produk'));
    }
    
    public function simpan(Request $request)
    {
        Pemesanan::create([

            'nama'        => $request->nama,
            'no_hp'       => $request->no_hp,
            'tanggal'     => $request->tanggal,
            'alamat'      => $request->alamat,
            'produk'      => $request->produk,
            'ukuran'      => $request->ukuran,
            'jumlah'      => $request->jumlah,
            'pembayaran'  => $request->pembayaran,
            'catatan'     => $request->catatan,

        ]);

        return redirect('/uts/data')
                ->with('success', 'Pemesanan berhasil disimpan.');
    }

    public function data()
    {
        $data = Pemesanan::all();
        return view('uts.data', compact('data'));
    }

    public function edit($id)
    {
        $data = Pemesanan::findOrFail($id);
        return view('uts.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pemesanan::findOrFail($id);

        $data->update([

            'nama'        => $request->nama,
            'no_hp'       => $request->no_hp,
            'tanggal'     => $request->tanggal,
            'alamat'      => $request->alamat,
            'produk'      => $request->produk,
            'ukuran'      => $request->ukuran,
            'jumlah'      => $request->jumlah,
            'pembayaran'  => $request->pembayaran,
            'catatan'     => $request->catatan,

        ]);

        return redirect('/uts/data')
                ->with('success', 'Data berhasil diubah.');
    }

    public function hapus($id)
    {
        $data = Pemesanan::findOrFail($id);

        $data->delete();

        return redirect('/uts/data')
                ->with('success', 'Data berhasil dihapus.');
    }
}