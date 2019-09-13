<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'name' => $request->nama,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'stok' => $request->stok
        ]);

        return redirect('/barang');
    }

    public function index()
    {   
        $barang = DB::table('barang')->get();
        return view('index', ['barang' => $barang]);
    }

    public function update(Request $request)
    {
        DB::table('barang')->where('id', $request->id)->update([
            'name' => $request->nama,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'stok' => $request->stok
        ]);
            
        return redirect('/barang');
    }

    public function delete($id)
    {
        DB::table('barang')->where('id', $id)->delete();

        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = DB::table('barang')->where('id', $id)->get();

        return view('edit', ['barang' => $barang]);
    }

    public function show()
    {
        //
    }
}
