<<<<<<< Updated upstream
<x-home>
      <section>
            <div class="container">
                  <div class="row">
                        <div class="col">
                              <h1 class="text-center">HOME</h1>
                              <hr>
                              {{-- code here --}}
                              <p>Landing Page</p>
                                <p>Halusdfghuhg</p>
                        </div>
                  </div>
            </div>
      </section>
</x-home>
=======
<x-app>
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
                              <p style="font-size: 1.7rem;" class="text-center fw-semibold">GALERI</p>
                              <div class="row mt-5" style="font-size: 1.2rem">
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="">
                                                <img src="{{ url('./storage/assets/home-location.png')}}" class="card-img-top" alt="lokasi">
                                                <p class="mt-3 fw-medium navigator-home">LOKASI</p>
                                                <hr>
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="">
                                                <img src="{{ url('./storage/assets/home-mesin.png')}}" class="card-img-top" alt="lokasi">
                                                <p class="mt-3 fw-medium navigator-home">ALAT PRODUKSI</p>
                                                <hr>
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="">
                                                <img src="{{ url('./storage/assets/home-project.png')}}" class="card-img-top" alt="lokasi">
                                                <p class="mt-3 fw-medium navigator-home">PROYEK</p>
                                                <hr>
                                          </a>
                                    </div>
                                    <div class="col-3">
                                          <a style="text-decoration: none;" href="">
                                                <img src="{{ url('./storage/assets/home-produk.png')}}" class="card-img-top" alt="lokasi">
                                                <p class="mt-3 fw-medium navigator-home">PRODUK</p>
                                                <hr>
                                          </a>
                                    </div>
                              </div>
                        </section>
                  </div>
            </div>
      </div>
</x-app>
<style>
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
      .navigator-home{
            color: #1E1E1E;
            transition: ease-in-out 0.3s;
      }
      .navigator-home:hover{
            color: #ABABAB;
      }
</style>
>>>>>>> Stashed changes

{{-- cara ambil gambar --}}
{{-- style="background: url('./storage/gambar/Elsa Cosplay.jpg'); --}}
{{-- <img src="{{ url('./storage/gambar/Elsa Cosplay.jpg') }}" alt=""> --}}
