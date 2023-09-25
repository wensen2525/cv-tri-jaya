@php
    $pageTitle = 'BERANDA';
@endphp

<x-app :pageTitle="$pageTitle">
    <img src="{{ url('./storage/gambar/bg-blue.svg') }}" alt="" class="bg-cover bg-center background-img position-absolute">
      <div class="container">
            <div class="row">
                  <div class="col">
                        {{-- banner  --}}
                        <section class="text-white">
                              <img src="{{ url('./storage/assets/LandingImage.png') }}" alt="Image" class="position-absolute start-0 w-100" style="object-fit: cover;">
                              <div class="row">
                                    <div class="col-12 text-center" style="position: relative; top: 10vw; display: flex; align-items: center;">
                                          <div class="col-5 container" style="display: flex; align-items: center;">
                                                <img class="m-5 banner" src="{{ url('./storage/assets/logo-white.svg')}}" alt="logo-white" style="width: 7.5vw; height: auto;">
                                                <div style="text-align: left;">
                                                    <p style="font-size: 2rem; font-family:'Space Grotesk', sans-serif;">CV TRI JAYA</p>
                                                    <a href="{{ url('/product') }}" class="text-white btn btn-blue px-4">Lihat Produk ></a>
                                                </div>
                                          </div>
                                          <div class="col-5 container" style="text-align: justify">
                                                <p class="fw-semibold" style="font-size: 1.5rem">TENTANG KAMI</p>
                                                <p><b>CV Tri Jaya</b> telah melakukan kegiatan perdagannya sejak tahun 2003. Dimulai dari menyewa toko berukuran kecil dan beberapa kali berpindah hingga saat ini memiliki gudang sendiri. Membuktikan bahwa kami telah berhasil menjawab setiap tantangan dalam berbisnis.</p>
                                                <p class="mt-1">Pelanggan kami terdiri dari berbagai macam latar belakang, mulai dari toko reseller, industri (rak piring, jam dinding, furniture) serta proyek-proyek bangunan baik interior maupun eksterior. Terbukti kami telah diberikan kepercayaan oleh banyak perusahaan sebagai supplier kaca dan atau cermin.</p>
                                          </div>
                                    </div>
                              </div>
                        </section>
                        {{-- galeri  --}}
                        <section style="margin-top: 32rem">
                              <p style="font-size: 1.5rem;" class="text-center fw-semibold">GALERI</p>
                              <div class="row mt-5" style="font-size: 1.2rem">
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="" class="navigator-home">
                                                <img src="{{ url('./storage/assets/home-location.png')}}" class="card-img-top" alt="lokasi">
                                                <p class="mt-3 fw-medium">LOKASI</p>
                                                <hr>
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="" class="navigator-home">
                                                <img src="{{ url('./storage/assets/home-mesin.png')}}" class="card-img-top" alt="produksi">
                                                <p class="mt-3 fw-medium">ALAT PRODUKSI</p>
                                                <hr>
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="" class="navigator-home">
                                                <img src="{{ url('./storage/assets/home-project.png')}}" class="card-img-top" alt="proyek">
                                                <p class="mt-3 fw-medium">PROYEK</p>
                                                <hr>
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="" class="navigator-home">
                                                <img src="{{ url('./storage/assets/home-produk.png')}}" class="card-img-top" alt="produk">
                                                <p class="mt-3 fw-medium">PRODUK</p>
                                                <hr>
                                          </a>
                                    </div>
                              </div>
                        </section>
                        <section>
                              <div class="row" style="padding-top: 10rem">
                                  <div class="col-12 row">
                                      <div class="col-lg-7 col-12">
                                          <p class="fw-semibold" style="font-size: 1.5rem">Kunjungi Toko Kami</p>
                                          <div class="" style="background-color: #CAB172">
                                              <p class="text-white text-center fw-semibold pt-4 pb-2" style="font-size: 1.2rem">Tersedia 2 Lokasi di Indonesia</p>
                                              <div class="row px-4">
                                                  <div class="col-md-6 mb-3">
                                                      <div class="card">
                                                          <div class="card-body" style="background-color: #CAB172">
                                                              <img src="{{ url('./storage/assets/lokasi1.png')}}" alt="" class="img-fluid">
                                                              <p class="mt-3">Jl. Kemiri No.51 Pondok Cabe Udik, Pamulang, Tangerang Selatan, Banten 15418</p>
                                                              <a href="{{ url('https://www.google.com/maps/place/CV+TRI+JAYA/@-6.3566538,106.7491487,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ef1143dce2bb:0x778ff404f4a9f656!8m2!3d-6.3566592!4d106.7540196!16s%2Fg%2F11bcdbgnft?entry=ttu') }}" class="text-white btn btn-red px-4" target="_blank">Lihat Rute ></a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6 mb-3">
                                                      <div class="card">
                                                          <div class="card-body" style="background-color: #CAB172">
                                                              <img src="{{ url('./storage/assets/lokasi2.png')}}" alt="" class="img-fluid">
                                                              <p class="mt-3">Ruko Sawangan Megah, No. 9, Jl. Raya Parung - Ciputat, Kedaung, Kec. Sawangan, Kota Depok, Jawa Barat 16517</p>
                                                              <a href="{{ url('https://www.google.com/maps/place/Tri+Jaya+Kaca+%26+Aluminium/@-6.3738788,106.7441055,18z/data=!4m14!1m7!3m6!1s0x2e69ef48358b93f1:0xc17b0c19dd4a8a19!2sTri+Jaya+Kaca+%26+Aluminium!8m2!3d-6.3739241!4d106.7451516!16s%2Fg%2F11bc7nl7fd!3m5!1s0x2e69ef48358b93f1:0xc17b0c19dd4a8a19!8m2!3d-6.3739241!4d106.7451516!16s%2Fg%2F11bc7nl7fd?entry=ttu') }}" class="text-white btn btn-red px-4" target="_blank">Lihat Rute ></a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-5 col-12 ps-lg-4 p-0" >
                                          <p class="fw-semibold" style="font-size: 1.5rem">Jam Operasional</p>
                                          <div class="container py-1" style="background-color: #1E1E1E">
                                              <div class="container my-3 text-center" style="background-color: #000000; width: 25rem; border-radius: 10px">
                                                <p class="fw-semibold text-white" style="font-size: 1.2rem">Senin - Sabtu</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </section>

                  </div>
            </div>
      </div>
</x-app>
<style>
        .background-img{
            width: 100%;
            margin-top: 108rem;
            z-index: -1;
        }
      .banner{
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
      }
      .btn-blue{
            background-color: #5181C1;
            border: none;
            transition: background-color 0.3s ease;
      }
      .btn-blue:hover {
            background-color: #244C80;
            transition: ease-in-out 0.3s;
      }
      .btn-red{
            background-color: #E94D36;
            border: none;
            transition: background-color 0.3s ease;
      }
      .btn-red:hover {
            background-color: #a03322;
            transition: ease-in-out 0.3s;
      }
      .navigator-home{
            color: #1E1E1E;
            transition: ease-in-out 0.3s;
      }
      .navigator-home:hover{
            color: #ABABAB;
      }
      .card{
            border: none;
      }
</style>

{{-- cara ambil gambar --}}
{{-- style="background: url('./storage/gambar/Elsa Cosplay.jpg'); --}}
{{-- <img src="{{ url('./storage/gambar/Elsa Cosplay.jpg') }}" alt=""> --}}
