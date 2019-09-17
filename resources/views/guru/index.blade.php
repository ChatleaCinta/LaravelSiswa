@extends('template')

@section('main')
<div id="guru">
    <center><h2>Guru</h2></center>
    <form action="" method="get" class="form-cari">
        <input type="search" name="cari" id="cari" placeholder="search" aria-label="search">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Cari</button>
    </form>
    @if (!empty($guru_list))
    <table class="table">
    <thead>
        <tr>
            <th>ID guru</th>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guru_list as $guru)
        <tr>
        <td>{{ $guru->id }}</td>
        <td>{{ $guru->nip }}</td>
        <td>{{ $guru->nama_guru }}</td>
        <td>{{ $guru->tanggal_lahir }}</td>
        <td>{{ $guru->jenis_kelamin }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('guru/' . $guru->id) }}">Detail</a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('guru/' . $guru->id . '/edit') }}">Edit</a></td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('guru/' . $guru->id . '/delete') }}" onclick="return confirm('Are you sure you want delete this data?')">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
       @else
    <p>Tidak ada data guru</p>
    @endif
    </div>
    @stop

@section('footer')
<div id="footer">
    <center><h5>Total data : {{ $jumlah_guru }}</h5></center>
    <a href="{{ url('guru/create') }}" class="btn btn-primary">Tambah Guru</a>
    <a href="{{ url('guru/cetak_pdf') }}" class="btn btn-danger" target="_blank">Cetak PDF</a>
    <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop
