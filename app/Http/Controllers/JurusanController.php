<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class JurusanController extends Controller
{
    public function index()
    {
        $jurusans=Jurusan::latest()->paginate(10);
        return view('jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'kepala_jurusan'=>'required',
            'jumlahsiswa'=>'required',
        ]);
        DB::table('jurusans')->insert([
            'nama'=>$request->nama,
            'kepala_jurusan'=>$request->kepala_jurusan,
            'jumlahsiswa'=>$request->jumlahsiswa,
        ]);

        if(DB::table('jurusans'))
        {
            return redirect()->route('jurusan.index')->with(['success'=>'data berhasil disimpan']);
        }
        else
        {
            return redirect()->route('jurusan.index')->with(['error'=>'data gagal disimpan']);
        }
    }
    
    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }
    public function update(Request $request, Jurusan $jurusan)
    {
        $this->validate($request,[
            'nama'=>'required',
            'kepala_jurusan'=>'required',
            'jumlahsiswa'=>'required',
        ]);

        $siswa=Jurusan::findOrFail($jurusan->id);
        $siswa->update([
            'nama'=>$request->nama,
            'kepala_jurusan'=>$request->kepala_jurusan,
            'jumlahsiswa'=>$request->jumlahsiswa,
        ]);

        if($jurusan)
        {
            return redirect()->route('jurusan.index')->with(['success'=>'Data Saved']);
        }
        else{
            return redirect()->route('jurusan.index')->with(['error'=>'Data Saved Failed']);
        }
    }
    public function destroy($id)
    {
        $jurusan = Jurusan ::findOrFail($id);

        $jurusan->delete();

        if($jurusan)
        {
            return redirect()->route('jurusan.index')->with(['success'=>'DATA BERHASIL DIHAPUS']);
        }
        else
        {
            return redirect()->route('jurusan.index')->with(['error'=>'DATA GAGAL DIHAPUS']);
        }
    }
}
