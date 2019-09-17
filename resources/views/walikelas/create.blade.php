@extends('template')

@section('main')
    <div id="walikelas">
    <h2>Tambah Walikelas</h2>
    
    <form action="{{ url('walikelas') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="id_guru" class="control-label">Nama Guru</label>
    <select name="id_guru" class="form-control" id="" class="custom-select">
    <option selected>Pilih Nama Guru</option>
    <!-- @if(!empty($guru)) -->
        @foreach ($guru as $guru)
        <option value="{{$guru->id}}">{{$guru->nama_guru}}</option>
        @endforeach
        </select>
        </div>
        <!-- @endif  -->
    </div>
    
    <div class="form-group">
    <label for="id_kelas" class="control-label">Nama Kelas</label>
    <select name="id_kelas" class="form-control" id="" class="custom-select">
    <option selected>Pilih Nama Kelas</option>
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
        <button type="button" class="btn btn-warning" onclick="window.location='/register_laravel/public/walikelas'">Kembali</button>
        </form>
        </div>
    @stop