<?php

namespace App\Http\Controllers;

use App\DetailPenjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $detailpenjualan['detailpenjualan'] = \App\DetailPenjualan::paginate(12);

        return view('admin.include.detailpenjualan.all')->with($detailpenjualan);
    }
    
    public function save(Request $r){
        $detailpenjualan = new detailpenjualan;
        $detailpenjualan->nofaktur = $r->input('nofaktur');
        $detailpenjualan->kodebarang = $r->input('kodebarang');
        $detailpenjualan->jumlah = $r->input('jumlah');
        $detailpenjualan->subtotal = $r->input('subtotal');
        
        $detailpenjualan->save();

        // Session::flash('success_add',"Sukses menambahkan barang!");
        //ok coba
        return redirect()->route('semua_detail_penjualan');
    }

    // public function edit($id){
    //     $data['guru'] = \App\guru::find($id);

    //     return view('guru.edit')->with($data);
    // }

    // public function update(Request $r){
    //     $edit_guru = guru::find($r->input('id'));

    //     $edit_guru->nip = $r->input('nip');
    //     $edit_guru->nama = $r->input('nama');
    //     $edit_guru->pelajaran = $r->input('pelajaran');
    //     $edit_guru->jenis_kelamin = $r->input('jenis_kelamin');

    //     $foto = $r->file("foto");
    //     $foto->getClientOriginalName();

    //     if ($foto != ''){
    //     $nama_foto = $foto->getClientOriginalName();
    //     $r->file('foto')->move("uploads/img/", $nama_foto);
    //     $edit_guru->foto = $nama_foto;
    //     }

    //     $edit_guru->save();
    //     return redirect()->route('semua_guru');
    // }
    

    public function delete($id){
        $hapus = \App\DetailPenjualan::find($id);
        $hapus->delete();
        return redirect()->route('semua_detail_penjualan');
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
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPenjualan $detailPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPenjualan  $detailPenjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPenjualan $detailPenjualan)
    {
        //
    }
}
