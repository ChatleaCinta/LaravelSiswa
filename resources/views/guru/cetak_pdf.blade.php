<!DOCTYPE html>
<html>
<head>  
    <title>Membuat laporan PDF dengan DOMPDF laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
    </style>
    <center>
    <h5>Membuat laporan PDF dengan DOMPDF laravel</h5>
    <h6><a target="_blank" href=""></a>XI RPL 5</h6>
    </center>
    <table class="table table-bordered">
    <thead>
        <tr>
        <th>ID guru</th>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        @php $i=1 @endphp
        @foreach($guru as $guru)
        <tr>
        <td>{{ $guru->id }}</td>
        <td>{{ $guru->nip }}</td>
        <td>{{ $guru->nama_guru }}</td>
        <td>{{ $guru->tanggal_lahir }}</td>
        <td>{{ $guru->jenis_kelamin }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
      