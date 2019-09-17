<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
use PDF;

class gurucontroller extends Controller
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

        public function guru(Request $request) {
            if($request->has('cari')){
                $guru_list = guru::where('nama_guru', 'LIKE', '%'.$request->cari.'%')->get();
            }else{
                $guru_list = guru::all();
            }
            $halaman = 'guru';
            $jumlah_guru = guru::count();
            return view ('guru.index', compact('halaman', 'guru_list', 'jumlah_guru'));
    }
    public function cetak_pdf()
    {
        $guru = guru::all();
        $pdf = PDF::loadview('guru.cetak_pdf',['guru'=>$guru]);
        return $pdf->download('laporan-guru.pdf');
    }
    public function create() {
        $halaman = 'guru';
        return view('guru.create', compact('halaman'));
    }
    public function store(Request $request) {
        guru::create($request->all());
        return redirect('guru');
    }
    public function show($id) {
        $halaman = 'guru';
        $guru = guru::findOrFail($id);
        return view('guru.show', compact('halaman', 'guru'));
    }
    public function edit($id) {
        $halaman = 'guru';
        $guru = guru::findOrFail($id);
        return view('guru.edit', compact('halaman', 'guru'));
    }
    public function update($id, Request $request) {
        $halaman = 'guru';
        $guru = guru::findOrFail($id);
        $guru->nip = $request->nip;
        $guru->nama_guru = $request->nama_guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $guru->avatar = $request->file('avatar')->getClientOriginalName();
            $guru->save();
        }
        $guru->save();
        return redirect('guru');
    }
    public function delete($id) {
        $guru = guru::findOrFail($id);
        $guru->delete();
        return redirect('guru');
    }
}
