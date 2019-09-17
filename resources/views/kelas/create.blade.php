@extends('template')

@section('main')
    <div id="kelas">
    <h2>Tambah Kelas</h2>
    
    <form action="{{ url('kelas') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama_kelas" class="control-label">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/kelas'">Kembali</button>
        </form>
        </div>
    @stop