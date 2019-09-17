<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\guru;
use App\Kelas;
use PDF;

class walikelascontroller extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function walikelas(Request $request) {
        if($request->has('cari')){
            $walikelas_list = Walikelas::where('nama_guru', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $walikelas_list = Walikelas::all();
        }
        $halaman = 'walikelas';
        $jumlah_walikelas = Walikelas::count();
        return view ('walikelas.index', compact('halaman', 'walikelas_list', 'jumlah_walikelas'));
    }
    public function cetak_pdf()
    {
        $walikelas = Walikelas::all();
        $pdf = PDF::loadview('walikelas.cetak_pdf',['walikelas'=>$walikelas]);
        return $pdf->download('laporan-walikelas.pdf');
    }
    public function create() {
        $halaman = 'walikelas';
        $kelas = Kelas::all();
        $guru = guru::all();
        return view('walikelas.create', compact('halaman', 'kelas', 'guru'));
    }
    public function store(Request $request) {
        Walikelas::create($request->all());
        return redirect('walikelas');
    }
    public function show($id) {
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        return view('walikelas.show', compact('halaman', 'walikelas'));
    }
    public function edit($id) {
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $kelas = Kelas::all();
        $guru = guru::all();
        return view('walikelas.edit', compact('halaman', 'walikelas', 'kelas', 'guru'));
    }
    public function update($id, Request $request) {
        // dd($resuest->all());

        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->id_guru = $request->id_guru;
        $walikelas->id_kelas = $request->id_kelas;
        if($request->hasFile('ava')){
            $request->file('ava')->move('images/',$request->file('ava')->getClientOriginalName());
            $siswa->ava = $request->file('ava')->getClientOriginalName();
            $siswa->save();
        }
        $walikelas->save();
        return redirect('walikelas');
    }
    public function delete($id) {
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->delete();
        return redirect('walikelas');
    }
}
