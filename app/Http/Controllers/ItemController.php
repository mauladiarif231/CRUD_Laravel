<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $item = DB::table('item')->get();
        return view('item/index', ['item' => $item]);
    }

    public function tambah()
    {
        return view('item/tambah');
    }

    public function store(Request $request)
    {
        DB::table('item')->insert([
            'name' => $request->nama,
            'detail' => $request->detail
        ]);
        return redirect('/item');
    }

    public function update(Request $request)
    {
        DB::table('item')->where('id', $request->id)->update([
            'name' => $request->nama,
            'detail' => $request->detail
        ]);
        return redirect('/item');
    }

    public function delete($id)
    {
        $item = DB::table('item')->where('id', $id)->delete();
        return redirect('/item');
    }

    public function edit($id)
    {
        $item = DB::table('item')->where('id', $id)->get();
        return view('item/edit', ['item' => $item]);
    }

    public function show($id)
    {
        $item = DB::table('item')->where('id', $id)->get();
        return view('item/show', ['item' => $item]);
    }
}
