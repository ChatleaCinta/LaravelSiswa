@extends('template')

@section('main')
    <div id="kelas">
    <h2>Detail Guru</h2>
    
    <table class="table table-striped">
        <tr>
            <th>Nama Kelas</th>
            <td>{{ $kelas->nama_kelas }}</td>
        </tr>
    </table>
    <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/kelas'">Kembali</button>
    </div>
@stop