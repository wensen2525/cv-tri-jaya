<style>
      .sidebar{
            min-width:200px;
            max-width:250px;
            overflow-x: hidden;
            background: #4C48FF;
      }
      .sidebar-left::-webkit-scrollbar {
            width: 5px;
            height: 7px;
      }
      .sidebar-left::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
      }
      .sidebar-left::-webkit-scrollbar-thumb {
            background: #ffffff;
            border: 0px none #ffffff;
            border-radius: 0px;
      }
      .sidebar-left::-webkit-scrollbar-thumb:hover {
            background: #ffffff;
      }
      .sidebar-left::-webkit-scrollbar-thumb:active {
            background: #ffffff;
      }
      .sidebar-left::-webkit-scrollbar-track {
            background: white;
            border: 0px none #ffffff;
            border-radius: 50px;
      }
      .sidebar-left::-webkit-scrollbar-track:hover {
            background: transparent;
      }
      .sidebar-left::-webkit-scrollbar-track:active {
            background: transparent;
      }
      .sidebar-left::-webkit-scrollbar-corner {
            background: transparent;
      }
      .nav-item-active-top{
            background: white;
            border-radius: 50px 50px 0 50px;
      }
      .nav-item-active-bottom{
            background-color: white;
            border-radius: 50px 0 50px 50px;
      }
      .nav-list-0{
            background: #4C48FF;
            display: block;
            color: white;
            border-radius: 0 20px 0 0;
      }
      .nav-list-1{
            background: #4C48FF;
            display: block;
            color: white;
            border-radius: 0 0 20px 0;
      }
      .nav-list-active{
            background: white;
            display: block;
            border-radius: 30px 0 0 30px;
            color: #4C48FF
      }
      .padding-y-active{
            padding: 10px 0;
      }
      .padding-y{
            padding: 14px 0;
      }
</style>
<nav class="sidebar d-none d-sm-block overflow-hidden pb-3 pt-5 position-relative" style="height: 100vh;">
      <div class="row p-0 m-0 d-none d-lg-block pb-3">
            <li class="m-0 p-0 position-absolute col-12" style="list-style: none;top:0;">
                  <a class="fw-bold fs-4 text-white d-block ps-4 py-3 text-decoration-none" href="{{ route('home') }}">
                        CV TRI JAYA
                  </a>
    
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
            </li>
      </div>
      
      <div class="sidebar-left overflow-y-scroll" style="height: 80vh">
            <div class="position-absolute" style="min-height: 70px;min-width: 100%;background:linear-gradient(#4C48FF 50%,transparent 100%);top:50px"></div>
            <div class="nav flex-column ps-3">
                  <div class="{{ Request::is('dashboard') ? 'nav-item-active-top' : '' }}">
                        <a href="#" class="nav-list-1 padding-y px-4 text-decoration-none" style="cursor: default;color:#4C48FF">Kaca</a>
                  </div>
                  <div class="{{ Request::is('dashboard/kaca') ? '' : '' }} {{ Request::is('dashboard/kaca') ? 'nav-item-active-top' : '' }}">
                        <a href="/dashboard" class=" {{ Request::is('dashboard') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} {{ Request::is('dashboard/kaca') ? 'nav-list-1' : '' }} px-4 text-decoration-none"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
                  </div>
                  <div class="{{ Request::is('dashboard/jenis') || Request::is('dashboard') ? '' : '' }} {{ Request::is('dashboard') ? 'nav-item-active-bottom' : '' }} {{ Request::is('dashboard/jenis') ? 'nav-item-active-top' : '' }}">
                        <a href="/dashboard/kaca" class="{{ Request::is('dashboard/kaca') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} {{ Request::is('dashboard/jenis') ? 'nav-list-1' : '' }} px-4 text-decoration-none"><i class="bi bi-box-fill"></i> Kaca</a>
                  </div>
                  <div class="{{ Request::is('dashboard/ukuran') || Request::is('dashboard/kaca') ? '' : '' }} {{ Request::is('dashboard/kaca') ? 'nav-item-active-bottom' : '' }} {{ Request::is('dashboard/ukuran') ? 'nav-item-active-top' : '' }}">
                        <a href="/dashboard/jenis" class="{{ Request::is('dashboard/jenis') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} {{ Request::is('dashboard/ukuran') ? 'nav-list-1' : '' }} px-4 text-decoration-none"><i class="bi bi-basket2-fill"></i> Jenis</a>
                  </div>
                  <div class="{{ Request::is('dashboard/jenis') ? '' : '' }} {{ Request::is('dashboard/jenis') ? 'nav-item-active-bottom' : '' }}">
                        <a href="/dashboard/ukuran" class="{{ Request::is('dashboard/ukuran') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} px-4 text-decoration-none"><i class="bi bi-123"></i> Ukuran</a>
                  </div>
                  <div class="{{ Request::is('dashboard/ukuran') ? 'nav-item-active-bottom' : '' }} {{ Request::is('dashboard') ? 'nav-item-active-top' : '' }}">
                        <a href="#" class="{{ Request::is('dashboard/ukuran') ? 'nav-list-0' : '' }} {{ Request::is('dashboard') ? 'nav-list-1' : '' }} padding-y px-4 text-decoration-none" style="cursor: default;color:#4C48FF"><div class="border border-light"></div></a>
                  </div>
            {{-- </div> --}}
            {{-- <div class="px-3">
                  <div class="border border-light"></div>
            </div> --}}
            {{-- <div class="nav flex-column ps-3"> --}}
                  {{-- <div class="{{ Request::is('dashboard') ? 'nav-item-active-top' : '' }}">
                        <a href="#" class="nav-list-1 padding-y px-4 text-decoration-none" style="cursor: default;color:#4C48FF">Kaca</a>
                  </div> --}}
                  <div class="{{ Request::is('dashboard/kaca') ? '' : '' }} {{ Request::is('dashboard/kaca') ? 'nav-item-active-top' : '' }}">
                        <a href="/dashboard" class=" {{ Request::is('dashboard') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} {{ Request::is('dashboard/kaca') ? 'nav-list-1' : '' }} px-4 text-decoration-none"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
                  </div>
                  <div class="{{ Request::is('dashboard/jenis') || Request::is('dashboard') ? '' : '' }} {{ Request::is('dashboard') ? 'nav-item-active-bottom' : '' }} {{ Request::is('dashboard/jenis') ? 'nav-item-active-top' : '' }}">
                        <a href="/dashboard/kaca" class="{{ Request::is('dashboard/kaca') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} {{ Request::is('dashboard/jenis') ? 'nav-list-1' : '' }} px-4 text-decoration-none"><i class="bi bi-box-fill"></i> Kaca</a>
                  </div>
                  <div class="{{ Request::is('dashboard/ukuran') || Request::is('dashboard/kaca') ? '' : '' }} {{ Request::is('dashboard/kaca') ? 'nav-item-active-bottom' : '' }} {{ Request::is('dashboard/ukuran') ? 'nav-item-active-top' : '' }}">
                        <a href="/dashboard/jenis" class="{{ Request::is('dashboard/jenis') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} {{ Request::is('dashboard/ukuran') ? 'nav-list-1' : '' }} px-4 text-decoration-none"><i class="bi bi-basket2-fill"></i> Jenis</a>
                  </div>
                  <div class="{{ Request::is('dashboard/jenis') ? '' : '' }} {{ Request::is('dashboard/jenis') ? 'nav-item-active-bottom' : '' }}">
                        <a href="/dashboard/ukuran" class="{{ Request::is('dashboard/ukuran') ? 'nav-list-active fw-semibold padding-y-active' : 'nav-list-0 padding-y' }} px-4 text-decoration-none"><i class="bi bi-123"></i> Ukuran</a>
                  </div>
                  <div class="{{ Request::is('dashboard/ukuran') ? 'nav-item-active-bottom' : '' }}">
                        <a href="#" class="nav-list-0 padding-y px-4 text-decoration-none" style="cursor: default;color:#4C48FF">Home</a>
                  </div>
            </div>
            <div class="position-absolute" style="min-height: 60px;min-width: 100%;background:linear-gradient(#4C48FF 50%,transparent 100%);bottom:55px;transform: rotate(180deg)"></div>
      </div>
      
      <div class="row p-0 m-0 d-none d-lg-block">
            <li class="m-0 p-0 position-absolute col-12" style="list-style: none;bottom:0;">
                  <a class="fw-bold text-white bg-danger d-block ps-4 py-3 text-decoration-none" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  <i class="bi bi-box-arrow-left pe-2"></i> {{ __('Logout') }}
                  </a>
    
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
            </li>
      </div>
</nav>