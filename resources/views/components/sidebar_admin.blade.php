<style>
      .shadow-sm-red{
            box-shadow: 0 .125rem .25rem rgba(255,84,136,0.275);
      }
      .nav-link{
            width:200px;
      }
      .not-active{
            color: #000000;
            font-weight: 700;
      }
      .active{
            display: block;
            color: #ffffff;
            font-weight: 700;
            padding: 8px 20px;
            background: #4C48FF;
            border-radius: 30px;
      }
      .active:hover{
            color: #ffffff;
      }
  </style>
<nav class="d-none d-sm-block shadow-sm-red shadow-danger overflow-auto overflow-x-hidden position-relative pt-5" style="height: 100vh;">
      <div class="sidebar-content px-3 py-3">
            <ul class="nav flex-column">
                  @if (auth()->user()->role == 'ADMIN')
                        <p class="fw-bold" style="color: #AAAAAA;cursor:default">Menu</p>
                        <li class="nav-item">
                              <a href="{{ route('dashboard') }}"
                              class="nav-link {{ Request::is('dashboard') ? 'active' : 'not-active' }}">
                              Dashboard
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="/dashboard/kaca"
                              class="nav-link {{ Request::is('dashboard/kaca') ? 'active' : 'not-active' }}">
                              Kaca
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="/dashboard/jenis"
                              class="nav-link {{ Request::is('dashboard/jenis') ? 'active' : 'not-active' }}">
                              Jenis
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="/dashboard/ukuran"
                              class="nav-link {{ Request::is('dashboard/ukuran') ? 'active' : 'not-active' }}">
                              Ukuran
                              </a>
                        </li>
                        <div class="p-3"></div>
                        <p class="fw-bold" style="color: #AAAAAA;cursor:default">Others</p>
                        <li class="nav-item">
                              <a href="{{ route('dashboard') }}"
                              class="nav-link {{ Request::is('history') ? 'active' : 'not-active' }}">
                              History
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="{{ route('dashboard') }}"
                              class="nav-link {{ Request::is('project') ? 'active' : 'not-active' }}">
                              Project
                              </a>
                        </li>
                        {{-- <li class="nav-item">
                              <a href="{{ route('messages.index') }}"
                                    class="nav-link {{ Request::is('messages') ? 'active' : 'not-active' }}">
                                    <i class="fa-solid fa-message col-1"></i> Message
                              </a>
                        </li> --}}
                  @endif              
            </ul>
      </div>
      <div class="sidebar-content row p-0 m-0 d-none d-lg-block">
            <li class="m-0 p-0 position-absolute col-12" style="list-style: none;bottom:0;">
                  <a class="fw-bold text-white bg-danger d-block p-3 text-decoration-none" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                  </a>
    
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                  </form>
            </li>
      </div>
</nav>