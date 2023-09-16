<x-app>
    <section>
        {{-- Sub-NavBar untuk jenis kaca --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    {{-- Tab untuk jenis kaca --}}
                    <ul class="nav justify-content-center">
                        @foreach ($jenises as $jenis)
                            <li class="nav-item">
                                <a class="nav-link @if ($loop->first) active @endif text-decoration-none"
                                    id="list-{{ $jenis->nama }}-list" data-bs-toggle="list"
                                    href="#list-{{ $jenis->nama }}" role="tab"
                                    aria-controls="list-{{ $jenis->nama }}">KACA {{ $jenis->nama }}
                                </a>   
                            </li>
                        @endforeach
                        <div class="mobile-nav dropdown center">
                            <button class="mobile-nav-btn btn btn-secondary dropdown-toggle shadow-sm p-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Pilih Jenis Kaca
                            </button>
                            <ul class="mobile-nav-dropdown dropdown-menu">
                                @foreach ($jenises as $jenis)
                                    <li><a class="dropdown-item" id="list-{{ $jenis->nama }}-list" data-bs-toggle="list"
                                    href="#list-{{ $jenis->nama }}" role="tab"
                                    aria-controls="list-{{ $jenis->nama }}">{{ $jenis->nama }}</a></li>
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
                                <div class="jenis-container col py-2 px-4">Kaca {{ $jenis->nama }}</div>
                                <a class="ukuran-btn col py-2 text-center" href="">
                                    <i class="bi bi-info-circle me-3"></i>Cek Ukuran</a>
                            </div>

                            <p class="deskripsi-placeholder my-4">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Vivamus vel arcu a leo venenatis auctor. Nullam
                                vel volutpat nisi. Sed a nisi nec odio varius cursus in at quam. Sed tristique magna
                                id
                                justo convallis,
                                at posuere velit egestas. Maecenas id est tristique, ullamcorper justo in, varius
                                velit. Sed
                                id diam vel
                                lectus sodales feugiat nec vel justo. Integer congue erat eget purus placerat
                                bibendum.</p>

                            {{-- List Kaca --}}
                            <div class="mt-3">
                                <div class="row">
                                    {{-- Loop untuk ngambil nama kaca --}}
                                    @foreach ($kacas as $kaca)
                                        {{-- Untuk grouping tiap kaca yang di input berdasarkan jenisnya --}}
                                        @if ($kaca->jenis->nama == $jenis->nama)
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 p-2">
                                                <div class="kaca-container pb-3 rounded shadow bg-body-tertiary position-relative">
                                                {{-- Placeholder gambar kaca -> Format penamaan gambar kaca :  [nama_kaca].[png/jpeg/jpg]  --}}
                                                @if(file_exists(public_path('./storage/gambar/' . $kaca->nama . '.png')))
                                                    <img src="{{ asset('./storage/gambar/' . $kaca->nama . '.png') }}" alt="Gambar Produk Kaca" class="kaca-img rounded-top">
                                                @elseif(file_exists(public_path('./storage/gambar/' . $kaca->nama . '.jpeg')))
                                                    <img src="{{ asset('./storage/gambar/' . $kaca->nama . '.jpeg') }}" alt="Gambar Produk Kaca" class="kaca-img rounded-top">
                                                @elseif(file_exists(public_path('./storage/gambar/' . $kaca->nama . '.jpg')))
                                                    <img src="{{ asset('./storage/gambar/' . $kaca->nama . '.jpg') }}" alt="Gambar Produk Kaca" class="kaca-img rounded-top">
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

        margin-inline: 100px;
    }
    .nav{

        font-size: 1.5rem;
        margin-top: 75px;
        margin-bottom: 50px;
    }
    .nav-link {

        text-transform: uppercase;
        color: #1e1e1e;
    }
    .nav-link:hover {

        color: #1e1e1e;
        font-weight: 700;
    }
    .nav-link:focus {

        color: #1e1e1e;
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
        font-weight: 400
    }
    .kaca-container{
        
        height: 480px;
        min-width: 240px;
        /* max-width: 410px; */
    }
    .kaca-img{

        height: 350px;
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

        width: 30px;
        height: 30px;
    }

    @media only screen and (max-width: 1170px){

        .content-container{

            margin-inline: 50px;
        }
        .nav-link{

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

    @media only screen and (max-width: 576px){

        .content-container{

            margin-inline: 25px;
        }
        .nav{

            margin-top: 50px;
        }
        .nav-link{

            font-size: 1rem;
            display: none;
        }
        .mobile-nav{

            display:block;
            width: 100%;
        }
        .mobile-nav-btn{

            width: 100%;
            background-color: #FFFFFF;
            color: #1e1e1e;
            border-radius: 2px;
            border: none;
        }
        .mobile-nav-dropdown{

            width: 100%;
            border-radius: 2px;
        }
        .heading-container{

            font-size: 1rem;
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
