<?php

namespace App\Http\Controllers;

use App\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $penjualan['penjualan'] = \App\Penjualan::paginate(12);

        return view('admin.include.penjualan.all')->with($penjualan);
    }
    
    public function save(Request $r){
        $penjualan = new penjualan;
        $penjualan->nofaktur = $r->input('nofaktur');
        $penjualan->tanggalpenjualan= $r->input('tanggalpenjualan');
        $penjualan->idpetugas = $r->input('idpetugas');
        $penjualan->bayar = $r->input('bayar');
        $penjualan->sisa = $r->input('sisa');
        $penjualan->total = $r->input('total');
        
        $penjualan->save();

        // Session::flash('success_add',"Sukses menambahkan barang!");
        //ok coba
        return redirect()->route('semua_penjualan');
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
        $hapus = \App\Penjualan::find($id);
        $hapus->delete();
        return redirect()->route('semua_penjualan');
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
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
