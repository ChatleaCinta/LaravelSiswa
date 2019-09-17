@extends('template')

@section('main')
    <div id="guru">
    <h2>Detail Guru</h2>
    
    <table class="table table-striped">
        <tr>
            <th>AVATAR</th>
            <td><img src="{{asset('images/'.$guru->avatar)}}" class="rounded-circle" alt="avatar" width="350" height="250">
        </tr>
        <tr>
            <th>NIP</th>
            <td>{{ $guru->nip }}</td>
        </tr>
        <tr>
            <th>Nama Guru</th>
            <td>{{ $guru->nama_guru }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $guru->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $guru->jenis_kelamin }}</td>
        </tr>
    </table>
    <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/guru'">Kembali</button>
    <td><a class="btn btn-warning" href="{{ url('guru/' . $guru->id . '/edit') }}">Edit</a></td>
    </div>
@stop