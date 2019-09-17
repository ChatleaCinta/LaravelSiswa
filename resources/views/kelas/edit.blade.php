@extends('template')

@section('main')
    <div id="kelas">
    <h2>Edit Kelas</h2>

    <form action="{{ url('kelas/' . $kelas->id . '/update') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="nama_kelas" class="control-label">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control" value="{{$kelas->nama_kelas}}">
    </div>
    <button type="submit" class="btn-btn-primary">Submit</button>
    </form>
    </div>
@stop