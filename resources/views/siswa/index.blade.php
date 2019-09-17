@extends('template')

@section('main')
<div id="siswa">
    <center><h2>Siswa</h2></center>
    <form action="" method="get" class="form-cari">
        <input type="search" name="cari" id="cari" placeholder="search" aria-label="search">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Cari</button>
    </form>
    @if (!empty($siswa_list))
    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach($siswa_list as $siswa)
        <tr>
        <td>{{ $i++ }}</td>
        <td><a href="{{ url('siswa/' . $siswa->id) }}">{{ $siswa->nisn }}</a></td>
        <td><a href="{{ url('siswa/' . $siswa->id) }}">{{ $siswa->nama_siswa }}</a></td>
        <td><a href="{{ url('siswa/' . $siswa->id) }}">{{ $siswa->tanggal_lahir }}</a></td>
        <td><a href="{{ url('siswa/' . $siswa->id) }}">{{ $siswa->jenis_kelamin }}</a></td>
        <td>{{ ! empty($siswa->kelas->nama_kelas) ?
                $siswa->kelas->nama_kelas : '-' 
                }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('siswa/' . $siswa->id) }}">Detail</a></td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a></td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('siswa/' . $siswa->id . '/delete') }}" onclick="return confirm('Are you sure you want delete this data?')">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
       @else
    <p>Tidak ada data siswa</p>
    @endif
    </div>
    @stop

@section('footer')
<div id="footer">
    <center><h5>Total data : {{ $jumlah_siswa }}</h5></center>
    <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Siswa</a>
    <a href="{{ url('siswa/cetak_pdf') }}" class="btn btn-danger" target="_blank">Cetak PDF</a>
    <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop


    <!-- <ul>
    @foreach ($siswa as $anak)
        <li>{{$anak}}</li>
    @endforeach
    </ul> -->