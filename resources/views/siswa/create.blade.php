@extends('template')

@section('main')
    <div id="siswa">
    <h2>Tambah Siswa</h2>
    
    <form action="{{ url('siswa') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nisn" class="control-label">NISN</label>
            <input name="nisn" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama_siswa" class="control-label">Nama</label>
            <input name="nama_siswa" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
            
        <div class="form-check">
            <input class="form-check-input" type="radio" 
            name="jenis_kelamin" id="jenis_kelamin" value="L">
            <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" 
            name="jenis_kelamin" id="jenis_kelamin" value="P">
            <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
        </div>
        </div>
        <div class="form-group">
    <label for="id_kelas" class="control-label">Nama Kelas</label>
    <select name="id_kelas" class="form-control" id="" class="custom-select">
    <option selected>kelas..</option>
    <!-- @if(!empty($kelas)) -->
        @foreach ($kelas as $kelas)
        <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
        @endforeach
        </select>
        </div>
        <!-- @endif  -->
    </div>
        <div class="form-group">
    <label for="textarea" class="control-label">Avatar</label>
            <input name="ava" type="file" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/siswa'">Kembali</button>
        </form>
        </div>
    @stop