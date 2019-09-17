@extends('template')

@section('main')
<div id="kelas">
    <center><h2>Kelas</h2></center>

    @if (!empty($kelas_list))
    <table class="table">
    <thead>
        <tr>
            <th>ID Kelas</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas_list as $kelas)
        <tr>
        <td>{{ $kelas->id }}</td>
        <td>{{ $kelas->nama_kelas }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('kelas/' . $kelas->id) }}">Detail</a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('kelas/' . $kelas->id . '/edit') }}">Edit</a></td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('kelas/' . $kelas->id . '/delete') }}" onclick="return confirm('Are you sure you want delete this data?')">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
       @else
    <p>Tidak ada data kelas</p>
    @endif
    </div>
    @stop

@section('footer')
<div id="footer">
    <center><h5>Total data : {{ $jumlah_kelas }}</h5></center>
    <a href="{{ url('kelas/create') }}" class="btn btn-primary">Tambah Kelas</a>
    <a href="{{ url('kelas/cetak_pdf') }}" class="btn btn-danger" target="_blank">Cetak PDF</a>
    <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop
