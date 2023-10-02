@php
    $pageTitle = 'Beranda';
    @endphp

<x-app :pageTitle="$pageTitle">
    {{-- banner  --}}
    <div class="banner-img d-block">
        <div class="container p-4 text-white">
            <div class="row gap-5 text-center" style="align-items: center;">
                <div class="col-lg-5 col-md-10 d-flex mx-auto justify-content-center">
                    <img class="logo-img" src="{{ url('./storage/assets/logo-white.svg') }}" alt="logo-white">
                    <div style="text-align: left;">
                        <p class="company-name-placeholder" style="">CV TRI JAYA</p>
                        <a href="{{ url('/product') }}" class="text-white btn btn-blue px-3 py-2">Lihat Produk ></a>
                    </div>
                </div>
                <div class="landing-paragraph col justify-content-center" style="text-align: justify">
                    <p class="fw-semibold" style="font-size: 1.5rem">TENTANG KAMI</p>
                    <p><b>CV Tri Jaya</b> telah melakukan kegiatan perdagannya sejak tahun 2003. Dimulai dari menyewa
                        toko berukuran kecil dan beberapa kali berpindah hingga saat ini memiliki gudang sendiri.
                        Membuktikan bahwa kami telah berhasil menjawab setiap tantangan dalam berbisnis.</p>
                        <p class="mt-1">Pelanggan kami terdiri dari berbagai macam latar belakang, mulai dari toko
                            reseller, industri (rak piring, jam dinding, furniture) serta proyek-proyek bangunan baik
                            interior maupun eksterior. Terbukti kami telah diberikan kepercayaan oleh banyak perusahaan
                            sebagai supplier kaca dan atau cermin.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ url('./storage/gambar/bg-blue-home.svg') }}" alt="" class="bg-cover bg-center background-img position-absolute">
            <div class="container">
                <div class="row">
                    <div class="col">
                    {{-- galeri  --}}
                    <section style="margin-top: 9vw;">
                    <p style="font-size: 1.5rem;" class="text-center fw-semibold">GALERI</p>
                    <div class="row col-12 mt-5 mx-auto" style="font-size: 1.2rem">
                        @foreach ( $galeris as $galeri )
                        <div class="col-6 col-md-3">
                            <a style="text-decoration: none;" href="{{ url($galeri['link']) }}" class="navigator-home">
                                <img src="{{ url('./storage/assets/'. $galeri['img'].'.png') }}" class="card-img-top"
                                    alt="lokasi">
                                <p class="mt-3 fw-medium">{{ $galeri['title'] }}</p>
                                <hr>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
                {{-- lokasi & Jam Operasional --}}
                <section id="lokasi">
                    <div class="container" style="margin-top: 9vw;">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-12 pe-lg-4 pe-md-0">
                                <p class="fw-semibold" style="font-size: 1.5rem">Kunjungi Toko Kami</p>
                                <div class="rounded-2 row justify-content-center" style="background-color: #CAB172">
                                    <p class="text-white text-center fw-semibold pt-4" style="font-size: 1.2rem">
                                        Tersedia 2 Lokasi di Indonesia</p>
                                    <div class="row col-12 justify-content-center">
                                        @foreach ($lokasis as $lokasi )
                                        <div class="col-lg-6 mb-3 card p-0" style="background: transparent">
                                            <div class="card-body d-lg-block d-flex flex-column align-items-center">
                                                <img src="{{ asset('./storage/assets/'. $lokasi['img'].'.png') }}" alt="lokasi"
                                                class="img-fluid">
                                                <p class="mt-3 d-lg-block lokasi-nama" style="min-height: 80px"> {{ $lokasi['nama'] }}
                                                </p>
                                                    <a href="{{ url($lokasi['link']) }}"
                                                    class="text-white btn btn-red px-4" target="_blank">Lihat Rute ></a>
                                                </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12 custom-mt">
                                <p class="fw-semibold" style="font-size: 1.5rem">Jam Operasional</p>
                                <div class="rounded-2 row justify-content-center text-center px-4" style="background-color: #1E1E1E">
                                    <div class="container rounded-2 py-3 my-4" style="background-color: black">
                                        <p class="text-white" style="font-size: 1.2rem">Senin - Sabtu</p>
                                        <p class="fw-semibold mb-0" style="font-size: 1.2rem; color: #CAB172"><i
                                                class="bi bi-clock pe-2 fw-semibold" style="color: #CAB172"></i>08.15 - 16.30 WIB</p>
                                    </div>
                                    <div class="container rounded-2 py-3 mb-4" style="background-color: black">
                                        <p class="text-white" style="font-size: 1.2rem">Minggu</p>
                                        <p class="fw-semibold mb-0" style="font-size: 1.2rem; color: #CAB172">TUTUP
                                        </p>
                                    </div>
                                </div>
                                <div class="rounded-2 row justify-content-center px-4 text-center mt-3"
                                    style="background-color: #1E1E1E">
                                    <div class="row py-4">
                                        <div class="col">
                                            <p class="fw-semibold mb-0" style="font-size: 1.2rem" id="buka">BUKA</p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="vl mb-0"></div>
                                        </div>
                                        <div class="col">
                                            <p class="fw-semibold mb-0" style="font-size: 1.2rem" id="tutup">TUTUP</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <p> <b>*</b> Toko libur pada hari raya tertentu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- alat produksi  --}}
                <section id="alatproduksi">
                    <div class="container" style="margin-top: 9vw;">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2 col-12 container rounded-2 py-4 px-4 alat-produksi"
                                        style="background-color: white">
                                        <p class="fw-semibold pe-4" style="font-size: 1.5rem">Alat Produksi</p>
                                        <p class="alat-penjelasan">Selain sebagai supplier kaca dan atau cermin, kami
                                            juga memiliki mesin yakni mesin gosok halus dan mesin bevel.</p>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row align-items-md-center mb-3">
                                            <div class="col-md-4">
                                                <img class="object-contain img-fluid"
                                                    src="{{ url('./storage/assets/mesin-bevel.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="d-flex flex-column h-100">
                                                    <p class="fw-semibold mb-0" style="font-size: 1.2rem">Mesin Bevel
                                                    </p>
                                                    <hr style="border: 1.5px solid #CAB172">
                                                    <p> <b>Mesin bevel</b> digunakan untuk membuat pinggiran kaca atau
                                                        cermin memiliki tampilan yang lebih baik. Kami juga menerima
                                                        pesanan untuk tempered kaca sehingga kaca memiliki daya tahan
                                                        yang lebih kuat serta aman jika pecah karena bentuk pecahan
                                                        menjadi bentuk debu kristal.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-md-center mb-3">
                                            <div class="col-md-4">
                                                <img class="object-contain img-fluid"
                                                    src="{{ url('./storage/assets/mesin-gosokhalus.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="d-flex flex-column h-100">
                                                    <p class="fw-semibold mb-0" style="font-size: 1.2rem">Mesin Gosok
                                                        Halus</p>
                                                    <hr style="border: 1.5px solid #CAB172">
                                                    <p> <b>Mesin gosok halus</b> membuat pinggiran kaca memiliki tepian
                                                        yang halus untuk keamanan kenyamanan serta meningkatkan
                                                        tampilan. </p>
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
                    <div class="container mb-5" style="margin-top: 8vw;">
                        <div class="row justify-content-center align-items-center">
                            <div class="row col-12 m-0 p-0">
                                <div class="row col-md-12 m-0 p-4 pe-0 rounded-2 mx-auto"
                                    style="background-color: #5181C1">
                                    <p id="kontak" class="text-white fw-semibold mb-4" style="font-size: 1.5rem">JASA YANG KAMI
                                        SEDIAKAN</p>
                                    <div class="col-12 row">
                                        @foreach ($jasas as $jasa)
                                            @if ($jasa['index'] <= 6)
                                                <div class="accordion accordion-flush col-12 col-md-6"
                                                    id="accordionFlushExample">
                                                    <div class="accordion-item mb-2 rounded-2">
                                                        <h2 class="accordion-header">
                                                            <button
                                                                class="accordion-button collapsed rounded-2 fw-semibold"
                                                                style="font-size: 1.2rem" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $jasa['index'] }}"
                                                                aria-expanded="false"
                                                                aria-controls="collapse{{ $jasa['index'] }}">
                                                                {{ $jasa['title'] }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $jasa['index'] }}"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionFlushExample">
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
                {{-- kontak  --}}
                <section>
                    <div class="rounded-2 container p-5" style="background-color: #1E1E1E;">
                        <div class="justify-content-center text-white row col-md-12 mx-auto">
                            <div class="col-md-2 hubungi-kami mb-4">
                                <p class="fs-3 fw-semibold">HUBUNGI KAMI</p>
                                <div style="border-bottom: 2px solid #CAB172;"></div>
                            </div>
                            <div class="col-md-6 hubungi-kami">
                                <a href="{{ url('https://wa.me/6283875418202') }}" target="_blank"
                                    class="mb-3 text-decoration-none text-white px-2 d-flex justify-content-between position-relative py-2"
                                    style="background-color: #595959">
                                    <div class="d-flex align-items-center fw-semibold"><i
                                            class="bi bi-whatsapp px-3 py-2 fs-4 text-success me-1"></i>Whatsapp</div>
                                    <img width="12" src="{{ url('./storage/gambar/3dot.png') }}" alt="3dot"
                                        class="m-3 position-absolute bottom-0 end-0 img-fluid">
                                </a>
                                <a href=" {{ url('https://mail.google.com/mail/?view=cm&source=mailto&to=cvtrijayakaca@gmail.com') }}"
                                    target="_blank"
                                    class="text-decoration-none text-white px-2 d-flex justify-content-between position-relative py-2"
                                    style="background-color: #595959">
                                    <div class="d-flex align-items-center fw-semibold"><i
                                            class="bi bi-envelope-at px-3 py-2 fs-4 text-warning me-1"></i>Gmail</div>
                                    <img width="12" src="{{ url('./storage/gambar/3dot.png') }}" alt="3dot"
                                        class="m-3 position-absolute bottom-0 end-0 img-fluid">
                                </a>
                                <p class="text-end mt-2" style="color: #CAB172">* Klik kontak diatas untuk memulai
                                    percakapan</p>
                            </div>
                            <div class="col-md-3 hubungi-kami">
                                <div class="py-3 px-2 rounded-2 text-center text-white"
                                    style="background-color: black">
                                    <p class="fw-semibold">Contact Person</p>
                                    <p>021-7471-7392</p>
                                    <p>021-7471-7393</p>
                                    <p>021-749-9056</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- visi  --}}
                <div class="ad-container">
                    <div class="text-center">
                        <p class="ad-text-header">Mengapa Memilih Kami?</p>
                        <p class="ad-text-content">“Visi kami adalah menjadi penyuplai kaca dan cermin yang memiliki
                            kompetensi tinggi di Jakarta dan sekitarnya.”</p>
                        <div class="mt-5">

                            <a href="{{ url('./#kontak') }}" class="ad-contact-btn p-3">Hubungi Kami <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>

<script>
    const now = new Date();
    const currentDay = now.getDay();
    const currentHour = now.getHours();
    const currentMinute = now.getMinutes();

    const bukaElement = document.getElementById("buka");
    const tutupElement = document.getElementById("tutup");

    if (
        currentDay >= 1 && currentDay <= 6 &&
        (currentHour > 8 || (currentHour === 8 && currentMinute >= 15)) &&
        currentHour < 16
    ) {
        bukaElement.style.color = "#5181C1";
        tutupElement.style.color = "#FFFFFF";
    } else {
        bukaElement.style.color = "#FFFFFF";
        tutupElement.style.color = "#5181C1";
    }
</script>

<style>
    .background-img {
        width: 100%;
        margin-top: 1000px;
        z-index: -1;
    }

    .banner {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .banner-img {
        background-image: url('./storage/assets/LandingImage.png');
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 100px;
        padding-bottom: 250px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .logo-img {

        max-width: 7.5vw;
        min-width: 80px;
        margin-right: 40px;
    }

    .company-name-placeholder {

        font-size: 2rem;
        font-family: 'Space Grotesk', sans-serif;
        white-space: nowrap;
        margin-bottom: 5px;
    }

    .btn-blue {

        background-color: #5181C1;
        border: none;
        border-radius: 2px;
        transition: background-color 0.3s ease;
    }

    .btn-blue:hover {
        background-color: #244C80;
        transition: ease-in-out 0.3s;
    }

    .btn-red {
        background-color: #E94D36;
        border: none;
        border-radius: 2px;
        transition: background-color 0.3s ease;
    }

    .btn-red:hover {
        background-color: #a03322;
        transition: ease-in-out 0.3s;
    }

    .navigator-home {
        color: #1E1E1E;
        transition: ease-in-out 0.3s;
    }

    .navigator-home:hover {
        color: #ABABAB;
    }

    .card {
        border: none;
    }

    .vl {
        border-left: 3px solid #CAB172;
        height: 28px;
    }

    .accordion-button::after {
        display: none;
    }

    .ad-container {
        margin-inline: 7vw;
        margin-top: 15vw;
        margin-bottom: 20vw;
    }

    .ad-text-header {

        font-size: 1.25rem;
        color: #1e1e1e;
        font-weight: 700;
    }

    .ad-text-content {

        font-size: 1rem;
        color: #1e1e1e;
        font-weight: 500;
    }

    .ad-contact-btn {

        font-size: 1rem;
        font-weight: 700;
        color: #FFFFFF;
        background-color: #E94D36;
        border-radius: 5px;
        text-decoration: none;
    }

    @media (max-width: 991.98px) {
        .background-img{
            display: none
        }
        .custom-mt {
            margin-top: 1.5rem !important;
        }

        .alat-produksi {
            width: 100%;
        }

        .hubungi-kami {
            width: 100%;
        }
    }

    @media (max-width: 480px) {

        .alat-penjelasan {
            display: none;
        }

        .background-img{
            display: none;
        }
    }

    @media (max-width: 380px) {
        .background-img{
            display: none;
        }

        .logo-img {

            min-width: 65px;
            margin-right: 20px;
        }

        .company-name-placeholder {

            font-size: 1.375rem;
        }

        .btn-blue {

            font-size: 0.75rem;
        }

        .landing-paragraph {

            font-size: 0.875rem;
        }
    }

    @media (max-width: 280px) {
        .background-img{
            display: none;
        }

        .logo-img {

            min-width: 50px;
        }

        .btn-blue {

            font-size: 0.75rem;
        }
    }
</style>
