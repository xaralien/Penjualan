<?php

namespace App\Http\Controllers;

use App\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(){
        $jenis['jenis'] = \App\Jenis::paginate(12);

        return view('admin.include.jenis.all')->with($jenis);
    }
    
    public function save(Request $r){
        $jenis = new jenis;
        $jenis->kodejenis= $r->input('kodejenis');
        $jenis->jenis = $r->input('jenis');

        $jenis->save();

        // Session::flash('success_add',"Sukses menambahkan barang!");
        //ok coba
        return redirect()->route('semua_jenis');
    }

    public function delete($id){
        $hapus = \App\Jenis::find($id);
        $hapus->delete();
        return redirect()->route('semua_jenis');
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
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jenis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis)
    {
        //
    }
}
