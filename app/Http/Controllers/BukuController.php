<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBuku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelBuku::all();
        return view('Admin.databuku', compact('data'));
    }

    public function stok()
    {
        $data = ModelBuku::all();
        return view('Admin.stokbuku', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ModelBuku::where('id','=',$id)->get();
        return view('Admin.detailbuku', compact('data'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelBuku::where('id','=',$id)->get();
        return view('Admin.detailbuku', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ModelBuku::where('id',$id)->first();
        $data->judul = $request->judul;
        $data->penulis = $request->penulis;
        $data->stok = $request->stok;
        $data->save();
        return redirect()->route('buku.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
