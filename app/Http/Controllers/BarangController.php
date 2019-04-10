<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
     public function all(){
        $barang['barang'] = \App\Barang::paginate(12);

        return view('admin.include.barang.all')->with($barang);
    }
    
    public function add(){
        $barang = Barang::all(['kodejenis']);

        return view('barang.add', compact('kodejenis'));
    }

    public function save(Request $r){
        $barang = new barang;
        $barang->kodebarang = $r->input('kodebarang');
        $barang->namabarang = $r->input('namabarang');
        $barang->kodejenis = $r->input('kodejenis');
        $barang->harganet = $r->input('harganet');
        $barang->hargajual = $r->input('hargajual');
        $barang->stok = $r->input('stok');
        
        $barang->save();

        // Session::flash('success_add',"Sukses menambahkan barang!");
        //ok coba
        return redirect()->route('semua_barang');
    }

    public function edit($id){
        $barang['barang'] = \App\barang::find($kodebarang);

        return view('barang.edit')->with($data);
    }

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
        $hapus = \App\Barang::find($id);
        $hapus->delete();
        return redirect()->route('semua_barang');
    }
}
