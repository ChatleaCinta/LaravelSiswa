<nav class="navbar navbar-expand-lg bg-secondary text-uppercase top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href={{ url ('/') }}>Laravel.co</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('/') }}>Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('siswa') }}>Siswa</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('guru') }}>Guru</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('kelas') }}>Kelas</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('walikelas') }}>Walikelas</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href={{ url('about') }}>About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
               
              <a class="nav-link py-2 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
              </form>
              
              </li>
        </ul>
      </div>
    </div>
  </nav>
