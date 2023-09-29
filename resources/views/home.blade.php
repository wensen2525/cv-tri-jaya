@php
    $pageTitle = 'BERANDA';
@endphp

<x-app :pageTitle="$pageTitle">
    <img src="{{ url('./storage/gambar/bg-blue-home.svg') }}" alt="" class="bg-cover bg-center background-img position-absolute">
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
                        <section style="margin-top: 35rem">
                            <p style="font-size: 1.5rem;" class="text-center fw-semibold">GALERI</p>
                            <div class="row col-12 mt-5 mx-auto" style="font-size: 1.2rem">
                                <div class="col-6 col-md-3">
                                    <a style="text-decoration: none;" href="" class="navigator-home">
                                        <img src="{{ url('./storage/assets/home-location.png')}}" class="card-img-top" alt="lokasi">
                                        <p class="mt-3 fw-medium">LOKASI</p>
                                        <hr>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a style="text-decoration: none;" href="" class="navigator-home">
                                        <img src="{{ url('./storage/assets/home-mesin.png')}}" class="card-img-top" alt="produksi">
                                        <p class="mt-3 fw-medium">ALAT PRODUKSI</p>
                                        <hr>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a style="text-decoration: none;" href="" class="navigator-home">
                                        <img src="{{ url('./storage/assets/home-project.png')}}" class="card-img-top" alt="proyek">
                                        <p class="mt-3 fw-medium">PROYEK</p>
                                        <hr>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a style="text-decoration: none;" href="" class="navigator-home">
                                        <img src="{{ url('./storage/assets/home-produk.png')}}" class="card-img-top" alt="produk">
                                        <p class="mt-3 fw-medium">PRODUK</p>
                                        <hr>
                                    </a>
                                </div>
                            </div>
                        </section>
                        {{-- lokasi & Jam Operasional --}}
                        <section>
                              <div class="container" style="padding-top: 7rem">
                                  <div class="row justify-content-center">
                                      <div class="col-lg-7 col-12 pe-4">
                                          <p class="fw-semibold" style="font-size: 1.5rem">Kunjungi Toko Kami</p>
                                          <div class="rounded-2 row justify-content-center" style="background-color: #CAB172">
                                              <p class="text-white text-center fw-semibold pt-4" style="font-size: 1.2rem">Tersedia 2 Lokasi di Indonesia</p>
                                              <div class="row col-12 justify-content-center">
                                                      <div class="col-lg-6 mb-3 card p-0" style="background: transparent">
                                                          <div class="card-body d-lg-block d-flex flex-column align-items-center" >
                                                              <img src="{{ url('./storage/assets/lokasi1.png')}}" alt="" class="img-fluid" >
                                                              <p class="mt-3 d-lg-block d-none" style="min-height: 80px">Jl. Kemiri No.51 Pondok Cabe Udik, Pamulang, Tangerang Selatan, Banten 15418</p>
                                                              <p class="mt-3 d-block d-lg-none">Jl. Kemiri No.51 Pondok Cabe Udik, Pamulang, Tangerang Selatan, Banten 15418</p>
                                                              <a href="{{ url('https://www.google.com/maps/place/CV+TRI+JAYA/@-6.3566538,106.7491487,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69ef1143dce2bb:0x778ff404f4a9f656!8m2!3d-6.3566592!4d106.7540196!16s%2Fg%2F11bcdbgnft?entry=ttu') }}" class="text-white btn btn-red px-4" target="_blank">Lihat Rute ></a>
                                                          </div>
                                                      </div>
                                                      <div class=" col-lg-6 mb-3 card p-0" style="background: transparent">
                                                          <div class="card-body d-lg-block d-flex flex-column align-items-center" >
                                                              <img src="{{ url('./storage/assets/lokasi2.png')}}" alt="" class="img-fluid">
                                                              <p class="mt-3 d-lg-block d-none" style="min-height: 80px">Ruko Sawangan Megah, No. 9, Jl. Raya Parung - Ciputat, Kedaung, Kec. Sawangan, Kota Depok, Jawa Barat 16517</p>
                                                              <p class="mt-3 d-block d-lg-none">Ruko Sawangan Megah, No. 9, Jl. Raya Parung - Ciputat, Kedaung, Kec. Sawangan, Kota Depok, Jawa Barat 16517</p>
                                                              <a href="{{ url('https://www.google.com/maps/place/Tri+Jaya+Kaca+%26+Aluminium/@-6.3738788,106.7441055,18z/data=!4m14!1m7!3m6!1s0x2e69ef48358b93f1:0xc17b0c19dd4a8a19!2sTri+Jaya+Kaca+%26+Aluminium!8m2!3d-6.3739241!4d106.7451516!16s%2Fg%2F11bc7nl7fd!3m5!1s0x2e69ef48358b93f1:0xc17b0c19dd4a8a19!8m2!3d-6.3739241!4d106.7451516!16s%2Fg%2F11bc7nl7fd?entry=ttu') }}" class="text-white btn btn-red px-4" target="_blank">Lihat Rute ></a>
                                                          </div>
                                                      </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-5 col-12 custom-mt">
                                        <p class="fw-semibold" style="font-size: 1.5rem">Jam Operasional</p>
                                        <div class="rounded-2 container row justify-content-center px-4 text-center" style="background-color: #1E1E1E">
                                            <div class="container rounded-2 py-3 my-4" style="background-color: black">
                                                <p class="text-white" style="font-size: 1.2rem">Senin - Sabtu</p>
                                                <p class="fw-semibold mb-0" style="font-size: 1.2rem; color: #CAB172"><i class="bi bi-clock pe-2 fw-semibold" style="color: #CAB172"></i>08.15 - 16.30 WIB</p>
                                            </div>
                                            <div class="container rounded-2 py-3 mb-4" style="background-color: black">
                                                <p class="text-white" style="font-size: 1.2rem">Minggu</p>
                                                <p class="fw-semibold mb-0" style="font-size: 1.2rem; color: #CAB172">TUTUP</p>
                                            </div>
                                        </div>
                                        <div class="rounded-2 container row justify-content-center px-4 text-center mt-3" style="background-color: #1E1E1E">
                                            <div class="row py-4">
                                                <div class="col">
                                                    <p class="fw-semibold text-white mb-0" style="font-size: 1.2rem">BUKA</p>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="vl mb-0"></div>
                                                </div>
                                                <div class="col">
                                                    <p class="fw-semibold text-white mb-0" style="font-size: 1.2rem">TUTUP</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <p class=""> <b>*</b> Toko tetap libur pada hari raya tertentu</p>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                        </section>
                        {{-- alat produksi  --}}
                        <section>
                            <div class="container" style="padding-top: 7rem">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2 col-12 container rounded-2 py-4 px-4 alat-produksi" style="background-color: white">
                                                <p class="fw-semibold pe-4" style="font-size: 1.5rem">Alat Produksi</p>
                                                <p class="alat-penjelasan">Selain sebagai supplier kaca dan atau cermin, kami juga memiliki mesin yakni mesin gosok halus dan mesin bevel.</p>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="row align-items-md-center mb-3">
                                                    <div class="col-md-4">
                                                        <img class="object-contain img-fluid" src="{{ url('./storage/assets/mesin-bevel.png') }}" alt="">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="d-flex flex-column h-100">
                                                            <p class="fw-semibold mb-0" style="font-size: 1.2rem">Mesin Bevel</p>
                                                            <hr style="border: 1.5px solid #CAB172">
                                                            <p> <b>Mesin bevel</b> digunakan untuk membuat pinggiran kaca atau cermin memiliki tampilan yang lebih baik. Kami juga menerima pesanan untuk tempered kaca sehingga kaca memiliki daya tahan yang lebih kuat serta aman jika pecah karena bentuk pecahan menjadi bentuk debu kristal.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-md-center mb-3">
                                                    <div class="col-md-4">
                                                        <img class="object-contain img-fluid" src="{{ url('./storage/assets/mesin-gosokhalus.png') }}" alt="">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="d-flex flex-column h-100">
                                                            <p class="fw-semibold mb-0" style="font-size: 1.2rem">Mesin Gosok Halus</p>
                                                            <hr style="border: 1.5px solid #CAB172">
                                                            <p> <b>Mesin gosok halus</b> membuat pinggiran kaca memiliki tepian yang halus untuk keamanan kenyamanan serta meningkatkan tampilan. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{-- jasa  --}}
                        <section>
                            <div class="container mb-5" style="padding-top: 7rem">
                                <div class="row justify-content-center align-items-center">
                                    <div class="row col-12">
                                        <div class="row col-md-12 container p-4 rounded-2 mx-auto" style="background-color: #5181C1">
                                            <p class="text-white fw-semibold mb-4" style="font-size: 1.5rem">JASA YANG KAMI SEDIAKAN</p>
                                            <div class="col-md-6 col-12">
                                                @foreach ( $jasas as $jasa )
                                                @if ($jasa['index'] <= 3)
                                                <div class="accordion accordion-flush" id="accordionFlushExample" >
                                                    <div class="accordion-item mb-2 rounded-2">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed rounded-2 fw-semibold" style="font-size: 1.2rem" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $jasa['index'] }}" aria-expanded="false" aria-controls="collapse{{ $jasa['index'] }}">
                                                          {{ $jasa['title'] }}
                                                        </button>
                                                      </h2>
                                                      <div id="collapse{{ $jasa['index'] }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">{!! nl2br($jasa['body']) !!}</div>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6 col-12">
                                                @foreach ( $jasas as $jasa )
                                                @if ($jasa['index'] > 3)
                                                <div class="accordion accordion-flush" id="accordionFlushExample" >
                                                    <div class="accordion-item mb-2 rounded-2">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed rounded-2 fw-semibold" style="font-size: 1.2rem" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $jasa['index'] }}" aria-expanded="false" aria-controls="collapse{{ $jasa['index'] }}">
                                                          {{ $jasa['title'] }}
                                                        </button>
                                                      </h2>
                                                      <div id="collapse{{ $jasa['index'] }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">{!! nl2br($jasa['body']) !!}</div>
                                                      </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
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
            margin-top: 240vh;
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
      .vl {
            border-left: 3px solid #CAB172;
            height: 28px;
      }
      .accordion-button::after {
            display: none;
      }
      @media (max-width: 991.98px) {
            .custom-mt {
                margin-top: 1.5rem !important;
            }
            .alat-produksi {
                width: 100%;
            }

      }

      @media (max-width: 480px) {
        .alat-penjelasan {
            display: none;
        }
      }

</style>

