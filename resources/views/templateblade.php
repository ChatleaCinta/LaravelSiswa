<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <title>Belajar Laravel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="{{url('public/css/main/css')}}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <aside id="sideBar">
            <ul class="main-nav">
                <li class="nav-brand">
                    <a href="/">Belajar Laravel</a>
                </li>
                <li>
                    <a href="#">-Tambah Kontak</a>
                </li>
                <li>
                    <a href="#">-Data Kontak</a>
                </li>
            </ul>
        </aside>

            @yield('content')

    </div>

    <script src="{{url('public/js/query-1.11.1.min.js')}}"></script>
    <script src="{{url('public/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/js/custom.js')}}"></script>
</body>
</html>