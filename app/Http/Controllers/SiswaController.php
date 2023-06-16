<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Else_;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswas=siswa::latest()->paginate(10);
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'nik'=>'required',
            'jenis_kelamin'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'alamat'=>'required',
        ]);
        DB::table('siswas')->insert([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
            'alamat'=>$request->alamat,
        ]);

        if(DB::table('siswas'))
        {
            return redirect()->route('siswa.index')->with(['success'=>'data berhasil disimpan']);
        }
        else
        {
            return redirect()->route('siswa.index')->with(['error'=>'data gagal disimpan']);
        }
    }
    
    public function edit(siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }
    public function update(Request $request, siswa $siswa)
    {
        $this->validate($request,[
            'nama'=>'required',
            'nik'=>'required',
            'jenis_kelamin'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'alamat'=>'required',
        ]);

        $siswa=siswa::findOrFail($siswa->id);
        $siswa->update([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
            'alamat'=>$request->alamat,
        ]);

        if($siswa)
        {
            return redirect()->route('siswa.index')->with(['success'=>'Data Saved']);
        }
        else{
            return redirect()->route('siswa.index')->with(['error'=>'Data Saved Failed']);
        }
    }
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);

        $siswa->delete();

        if($siswa)
        {
            return redirect()->route('siswa.index')->with(['success'=>'DATA BERHASIL DIHAPUS']);
        }
        else
        {
            return redirect()->route('siswa.index')->with(['error'=>'DATA GAGAL DIHAPUS']);
        }
    }
}
