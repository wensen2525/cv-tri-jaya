@php
    $pageTitle = 'PRODUK';
@endphp

<x-app :pageTitle="$pageTitle">
    <section>
        {{-- Sub-NavBar untuk jenis kaca --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    {{-- Tab untuk jenis kaca --}}
                    <ul class="nav justify-content-center">
                        @foreach ($jenises as $jenis)
                            <li class="nav-item">
                                <a class="tab-kaca nav-link @if ($loop->first) active @endif text-decoration-none"
                                    id="list-{{ $jenis->nama }}-list" data-bs-toggle="list"
                                    href="#list-{{ $jenis->nama }}" role="tab"
                                    aria-controls="list-{{ $jenis->nama }}">
                                    @if ($jenis->nama == "Cermin")
                                        {{ $jenis->nama }}
                                    @else
                                        KACA {{ $jenis->nama }}
                                    @endif
                                    
                                </a>   
                            </li>
                        @endforeach
                        <div class="mobile-nav dropdown center">
                            <button class="mobile-nav-btn btn btn-secondary dropdown-toggle shadow p-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Pilih Jenis Kaca &nbsp <i class="bi bi-chevron-down "></i>
                            </button>
                            <ul class="mobile-nav-dropdown dropdown-menu shadow">
                                @foreach ($jenises as $jenis)
                                    <li><a class="mobile-menu-dropdown dropdown-item p-2" id="list-{{ $jenis->nama }}-list" data-bs-toggle="list"
                                    href="#list-{{ $jenis->nama }}" role="tab"
                                    aria-controls="list-{{ $jenis->nama }}">
                                    @if ($jenis->nama == "Cermin")
                                        {{ $jenis->nama }}
                                    @else
                                        KACA {{ $jenis->nama }}
                                    @endif
                                    </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>   

        {{-- Konten Produk Kaca --}}
        <div class="content-container col">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($jenises as $jenis)
                    <div class="tab-pane fade @if ($loop->first) show active @endif"
                        id="list-{{ $jenis->nama }}" role="tabpanel" aria-labelledby="list-{{ $jenis->nama }}-list">
                        <div>
                            {{-- Intro Jenis Kaca --}}
                            <div class="heading-container row gap-2">
                                <div class="jenis-container col py-2 ps-3">
                                    @if ($jenis->nama == "Cermin")
                                        {{ $jenis->nama }}
                                    @else
                                        Kaca {{ $jenis->nama }} 
                                        {{-- <a href="https://www.freepik.com/free-vector/dotted-black-background_43313905.htm#query=dot%20texture&position=0&from_view=keyword&track=ais">Image by juicy_fish</a> on Freepik --}}
                                    @endif 
                                </div>
                                <a class="ukuran-btn col py-2 text-center" href="">
                                    <i class="info-icon bi bi-info-circle me-3"></i>Cek Ukuran</a>
                            </div>

                            <p class="deskripsi-placeholder my-4">{{ $jenis->deskripsi }}</p>

                            {{-- List Kaca --}}
                            <div class="mt-3">
                                <div class="row">
                                    {{-- Loop untuk ngambil nama kaca --}}
                                    @foreach ($kacas as $kaca)
                                        {{-- Untuk grouping tiap kaca yang di input berdasarkan jenisnya --}}
                                        @if ($kaca->jenis->nama == $jenis->nama)    
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-2">
                                                <div class="kaca-container pb-3 rounded shadow-sm bg-body-tertiary position-relative">
                                                {{-- Placeholder gambar kaca -> Format penamaan gambar kaca :  [nama_kaca].[png/jpeg/jpg]  --}}
                                                @if(file_exists(public_path('./storage/kaca/' . $kaca->nama . '.png')))
                                                    <img src="{{ asset('./storage/kaca/' . $kaca->nama . '.png') }}" alt="Gambar Produk Kaca" class="kaca-img rounded-top">
                                                @elseif(file_exists(public_path('./storage/kaca/' . $kaca->nama . '.jpeg')))
                                                    <img src="{{ asset('./storage/kaca/' . $kaca->nama . '.jpeg') }}" alt="Gambar Produk Kaca" class="kaca-img rounded-top">
                                                @elseif(file_exists(public_path('./storage/kaca/' . $kaca->nama . '.jpg')))
                                                    <img src="{{ asset('./storage/kaca/' . $kaca->nama . '.jpg') }}" alt="Gambar Produk Kaca" class="kaca-img rounded-top">
                                                @else
                                                    <div class="kaca-img rounded-top"></div>
                                                @endif
                                                {{-- Placeholder nama kaca --}}
                                                <p class="kaca-nama-placeholder px-4 pt-3 pb-2">{{ $kaca->nama }}</p>
                                                {{-- 3 Dot Ornament --}}
                                                <div class="position-absolute bottom-0 end-0 pb-3 pe-3">
                                                    <img src="{{ url('./storage/gambar/3dot.png') }}" alt="3dot" class="dot-decoration-img">
                                                </div>
                                            </div>
                                            </div>

                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app>

<style>
    .content-container{

        margin-inline: 7vw; 
        margin-bottom: 15vh;
    }
    .nav{

        font-size: 1.5rem;
        margin-top: 75px;
        margin-bottom: 50px;
    }
    .tab-kaca {

        text-transform: uppercase;
        color: #1e1e1e;
    }
    .tab-kaca:hover {

        color: #CAB172;
    }
    .tab-kaca:focus {

        color: #CAB172;
    }
    .tab-kaca.active {

        color: #CAB172;
        font-weight: 700;
    }
    .mobile-nav{

        display: none;
    }
    .heading-container{

        font-size: 1.75rem;
    }
    .jenis-container{

        background-color: #5181C1;
        font-weight: 600;
        color: #FFFFFF;
        border-radius: 2px;
    }
    .ukuran-btn{

        background-color: #CAB172;
        font-weight: 400;
        text-decoration: none;
        color: #FFFFFF;
        max-width: 282px;
        border-radius: 2px;
    }
    .deskripsi-placeholder{

        font-size: 1.125rem;
        font-weight: 400;
        text-align: justify;
        text-justify: inter-word;
    }
    .kaca-container{
        
        height: 420px;
        min-width: 240px;
        /* max-width: 410px; */
    }
    .kaca-img{

        height: 300px;
        width: 100%;
        object-fit: cover;
        background-color: #1e1e1e;
    }
    .kaca-nama-placeholder{

        font-size: 1.25rem;
        font-weight: 700;
        color: #1e1e1e;
    }
    .dot-decoration-img{

        width: 25px;
        height: 25px;
    }

    @media only screen and (max-width: 1170px){

        .content-container{

            margin-inline: 50px;
        }
        .tab-kaca{

            font-size: 1.25rem;
        }
        .deskripsi-placeholder{

            font-size: 1rem;
        }
        .heading-container{

            font-size: 1.25rem;
        }
        .kaca-nama-placeholder{

            font-size: 1rem;
        }
        .dot-decoration-img{

            width: 20px;
            height: 20px;
        }
    }

    @media only screen and (max-width: 780px){

        .content-container{

            margin-inline: 25px;
        }
        .nav{

            margin-top: 50px;
            margin-bottom: 25px;
        }
        .tab-kaca{

            display: none;
            font-size: 1rem;
        }
        .mobile-nav{

            display: block;
            width: 100%;

        }
        .mobile-nav-btn{

            width: 100%;
            height: 50px;
            color: #6c6c6c;
            border-radius: 2px;
            border: none;
            font-weight: 700;  
            background-color: #FFFFFF;  
        }
        .mobile-nav-btn:hover{

            color: #ababab;
            background-color: #e0e0e0;
        }
        .mobile-nav-btn::after{

            content: none;
        }
        .mobile-nav-dropdown{

            font-size: 1rem;
            text-transform: uppercase;
            text-align: center;
            width: 100%;
            border-radius: 0px 0px 10px 10px;
        }
        .mobile-menu-dropdown:focus{

            background-color: #CAB172;
        }
        .mobile-menu-dropdown.active{

            background-color: #CAB172;
        }
        .mobile-menu-dropdown:active{

            background-color: #CAB172;
        }
        .heading-container{

            font-size: 1.25rem;
        }
        .jenis-container{

            background-color: #5181C1;
            font-weight: 600;
            color: #FFFFFF;
            border-radius: 2px;
        }
        .ukuran-btn{

            background-color: #CAB172;
            font-weight: 400;
            text-decoration: none;
            color: #FFFFFF;
            max-width: 282px;
            border-radius: 2px;     
        }
    }
    @media only screen and (max-width: 360px){

        .info-icon{

            display: none;
        }
        .heading-container{

            font-size: 1rem;
        }   
        .deskripsi-placeholder{
    
            font-size: 0.875rem;
        }
    }
    @media only screen and (max-width: 280px){

        .kaca-container{

            height: 350px;
        }
        .kaca-img{

            height: 250px;
        }
    }
</style>

<script>
    const triggerTabList = document.querySelectorAll('#myTabs a')
    triggerTabList.forEach(triggerEl => {
        const tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', event => {
            event.preventDefault()
            tabTrigger.show()
        })
    })
</script>
