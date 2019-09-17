@extends('template')

@section('main')
<div id="walikelas">
    <center><h2>Walikelas</h2></center>
    <form action="" method="get" class="form-cari">
        <input type="search" name="cari" id="cari" placeholder="search" aria-label="search">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Cari</button>
    </form>
    @if (!empty($walikelas_list))
    <table class="table">
    <thead>
        <tr>
            <th>Nama Guru</th>
            <th>Nama Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($walikelas_list as $walikelas)
        <tr>
        <td>{{ ! empty($walikelas->guru->nama_guru) ?
                $walikelas->guru->nama_guru : '-' 
                }}</td>
        <td>{{ ! empty($walikelas->kelas->nama_kelas) ?
                $walikelas->kelas->nama_kelas : '-' 
                }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('walikelas/' . $walikelas->id) }}">Detail</a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/edit') }}">Edit</a></td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/delete') }}" onclick="return confirm('Are you sure you want delete this data?')">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
       @else
    <p>Tidak ada data walikelas</p>
    @endif
    </div>
    @stop

@section('footer')
<div id="footer">
    <center><h5>Total data : {{ $jumlah_walikelas }}</h5></center>
    <a href="{{ url('walikelas/create') }}" class="btn btn-primary">Tambah walikelas</a>
    <a href="{{ url('walikelas/cetak_pdf') }}" class="btn btn-danger" target="_blank">Cetak PDF</a>
    <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop
