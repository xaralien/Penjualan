<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $petugas['petugas'] = \App\Petugas::paginate(12);

        return view('admin.include.petugas.all')->with($petugas);
    }
    
    public function save(Request $r){
        $petugas = new petugas;
        $petugas->namapetugas= $r->input('namapetugas');
        $petugas->alamat = $r->input('alamat');
        $petugas->email = $r->input('email');
        $petugas->telpon = $r->input('telpon');
        
        $petugas->save();

        // Session::flash('success_add',"Sukses menambahkan barang!");
        //ok coba
        return redirect()->route('semua_petugas');
    }
    
    public function delete($id){
        $hapus = \App\Petugas::find($id);
        $hapus->delete();
        return redirect()->route('semua_petugas');
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
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas)
    {
        //
    }
}
