@extends('template')

@section('main')
    <div id="walikelas">
    <h2>Detail Walikelas</h2>
    
    <table class="table table-striped">
        <tr>
            <th>AVATAR</th>
            <td><img src="{{asset('images/'.$walikelas->ava)}}" class="rounded-circle" alt="ava" width="350" height="250">
        </tr>
        <tr>
            <th>Nama Guru</th>
            <td>{{ $walikelas->guru->nama_guru }}</td>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <td>{{ $walikelas->kelas->nama_kelas }}</td>
        </tr>
    </table>
    <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/walikelas'">Kembali</button>
    <td><a class="btn btn-warning" href="{{ url('walikelas/' . $walikelas->id . '/edit') }}">Edit</a></td>
    </div>
@stop