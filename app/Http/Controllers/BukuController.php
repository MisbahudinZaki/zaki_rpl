<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use Illuminate\Support\Facades\Facades;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    //
    public function index(){
        $bukus=buku::latest()->paginate(10);
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        return view('buku.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'=>'required',
            'penerbit'=>'required',
            'jumlah'=>'required',
        ]);
        DB::table('bukus')->insert([
            'judul'=>$request->judul,
            'penerbit'=>$request->penerbit,
            'jumlah'=>$request->jumlah,
        ]);

        if(DB::table('bukus'))
        {
            return redirect()->route('buku.index')->with(['success'=>'data berhasil disimpan']);
        }
        else
        {
            return redirect()->route('buku.index')->with(['error'=>'data gagal disimpan']);
        }
    }
    
    public function edit(buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }
    public function update(Request $request, buku $buku)
    {
        $this->validate($request,[
            'judul'=>'required',
            'penerbit'=>'required',
            'jumlah'=>'required',
        ]);

        $buku=buku::findOrFail($buku->id);
        $buku->update([
            'judul'=>$request->judul,
            'penerbit'=>$request->penerbit,
            'jumlah'=>$request->jumlah,
        ]);

        if($buku)
        {
            return redirect()->route('buku.index')->with(['success'=>'Data Saved']);
        }
        else{
            return redirect()->route('buku.index')->with(['error'=>'Data Saved Failed']);
        }
    }
    public function destroy($id)
    {
        $buku = buku ::findOrFail($id);

        $buku->delete();

        if($buku)
        {
            return redirect()->route('buku.index')->with(['success'=>'DATA BERHASIL DIHAPUS']);
        }
        else
        {
            return redirect()->route('buku.index')->with(['error'=>'DATA GAGAL DIHAPUS']);
        }
    }
}
