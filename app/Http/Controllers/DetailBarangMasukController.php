<?php

namespace App\Http\Controllers;

use App\DetailBarangMasuk;
use Illuminate\Http\Request;

class DetailBarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $detailbarangmasuk['detailbarangmasuk'] = \App\DetailBarangMasuk::paginate(12);

        return view('admin.include.detailbarang.all')->with($detailbarangmasuk);
    }
    
    public function save(Request $r){
        $detailbrg = new detailbarangmasuk;
        $detailbrg->nonota = $r->input('nonota');
        $detailbrg->kodebarang = $r->input('kodebarang');
        $detailbrg->jumlah = $r->input('jumlah');
        $detailbrg->subtotal = $r->input('subtotal');
        
        $detailbrg->save();

        // Session::flash('success_add',"Sukses menambahkan barang!");
        //ok coba
        return redirect()->route('semua_detail_barang_masuk');
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
        $hapus = \App\DetailBarangMasuk::find($id);
        $hapus->delete();
        return redirect()->route('semua_detail_barang_masuk');
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
     * @param  \App\DetailBarangMasuk  $detailBarangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(DetailBarangMasuk $detailBarangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailBarangMasuk  $detailBarangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailBarangMasuk $detailBarangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailBarangMasuk  $detailBarangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailBarangMasuk $detailBarangMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailBarangMasuk  $detailBarangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailBarangMasuk $detailBarangMasuk)
    {
        //
    }
}
