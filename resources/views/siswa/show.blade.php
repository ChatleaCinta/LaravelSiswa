@extends('template')

@section('main')
    <div id="siswa">
    <h2>Detail Siswa</h2>
    
    <table class="table table-striped">
        <tr>
            <th>AVATAR</th>
            <td><img src="{{asset('images/'.$siswa->ava)}}" class="rounded-circle" alt="ava" width="350" height="250">
        </tr>
        <tr>
            <th>NISN</th>
            <td>{{ $siswa->nisn }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $siswa->nama_siswa }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $siswa->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $siswa->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $siswa->kelas->nama_kelas }}</td>
        </tr>
    </table>
    <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/siswa'">Kembali</button>
    <a class="btn btn-warning" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a>
    </div>
@stop