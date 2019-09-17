<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Siswa;
use App\Kelas;
use PDF;

class siswacontroller extends Controller
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
    
    public function siswa(Request $request) {
        if($request->has('cari')){
            $siswa_list = Siswa::where('nama_siswa', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $siswa_list = Siswa::all();
        }
        $halaman = 'siswa';
        $jumlah_siswa = Siswa::count();
        return view ('siswa.index', compact('halaman', 'siswa_list', 'jumlah_siswa'));
    }
    // public function index()
    // {
    //     $siswa = Siswa::all();
    //     return view('siswa',['siswa'=>$siswa]);
    // }
    public function cetak_pdf()
    {
        $siswa = Siswa::all();
        $pdf = PDF::loadview('siswa.cetak_pdf',['siswa'=>$siswa]);
        return $pdf->download('laporan-siswa.pdf');
    }
    public function create() {
        $halaman = 'siswa';
        $kelas = Kelas::all();
        return view('siswa.create', compact('halaman', 'kelas'));
    }
    public function store(Request $request) {
        Siswa::create($request->all());
        return redirect('siswa');
    }
    public function show($id) {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('halaman', 'siswa'));
    }
    public function edit($id) {
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('halaman', 'siswa', 'kelas'));
    }
    public function update($id, Request $request) {
        // dd($resuest->all());

        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->id_kelas = $request->id_kelas;
        if($request->hasFile('ava')){
            $request->file('ava')->move('images/',$request->file('ava')->getClientOriginalName());
            $siswa->ava = $request->file('ava')->getClientOriginalName();
            $siswa->save();
        }
        $siswa->save();
        return redirect('siswa');
    }
    public function delete($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}
