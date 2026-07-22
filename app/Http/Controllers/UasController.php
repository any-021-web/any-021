<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoffeeMenu;

class UasController extends Controller
{
    public function index()
    {
        $totalMenu = CoffeeMenu::count();
        $totalStok = CoffeeMenu::sum('stok');
        $rataHarga = CoffeeMenu::avg('harga');
        $menuTermahal = CoffeeMenu::orderBy('harga', 'desc')->first();
        $menuTerbaru = CoffeeMenu::latest()->take(5)->get();

        return view('uas.index', compact(
            'totalMenu',
            'totalStok',
            'rataHarga',
            'menuTermahal',
            'menuTerbaru'
        ));
    }

    public function data()
    {
        $data = CoffeeMenu::all();
        return view('uas.data', compact('data'));
    }

    public function tambah()
    {
        return view('uas.tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'kategori'  => 'required',
            'harga'     => 'required|numeric',
            'stok'      => 'required|numeric',
        ]);

        CoffeeMenu::create([
            'nama'      => $request->nama,
            'kategori'  => $request->kategori,
            'harga'     => $request->harga,
            'stok'      => $request->stok,
        ]);

        return redirect('/uas/data')
            ->with('success', 'Data menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = CoffeeMenu::findOrFail($id);
        return view('uas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'      => 'required',
            'kategori'  => 'required',
            'harga'     => 'required|numeric',
            'stok'      => 'required|numeric',
        ]);

        $data = CoffeeMenu::findOrFail($id);

        $data->update([
            'nama'      => $request->nama,
            'kategori'  => $request->kategori,
            'harga'     => $request->harga,
            'stok'      => $request->stok,
        ]);

        return redirect('/uas/data')
            ->with('success', 'Data menu berhasil diperbarui.');
    }

    public function hapus($id)
    {
        $data = CoffeeMenu::findOrFail($id);
        $data->delete();
        return redirect('/uas/data')
            ->with('success', 'Data menu berhasil dihapus.');
    }
}