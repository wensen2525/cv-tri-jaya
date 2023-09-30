@php
    $pageTitle = 'Proyek';
@endphp

<x-app :pageTitle="$pageTitle">
      <head>
            <link rel="stylesheet" type="text/scss" href="style.scss">
      </head>
      <section>
            <div class="container-fluid p-0">
                  <img src="{{ url('./storage/gambar/bg-blue.svg') }}" alt="" 
                  class="background-img position-absolute">

                  <div class="carousel-container">
                        <div class="row flex-nowrap overflow-x-auto gap-3">
                              @foreach ($proyeks as $proyek)
                              <div class="col p-0"> <!-- Adjust the column size as needed -->
                                    <div class="project-container position-relative">
                                          {{-- <img src="{{ url('./storage/gambar/Halo.jpeg') }}" alt="" class="project-img object-fit-cover "> --}}
                                          @if(file_exists(public_path('./storage/proyek/gedung/' . $proyek->nama . '_gedung.png')))
                                                <img src="{{ asset('./storage/proyek/gedung/' . $proyek->nama . '_gedung.png') }}" alt="Gambar Proyek" class="project-img">
                                          @elseif(file_exists(public_path('./storage/proyek/gedung/' . $proyek->nama . '_gedung.jpeg')))
                                                <img src="{{ asset('./storage/proyek/gedung/' . $project->nama . '_gedung.jpeg') }}" alt="Gambar Proyek" class="project-img">
                                          @elseif(file_exists(public_path('./storage/proyek/gedung/' . $proyek->nama . '_gedung.jpg')))
                                                <img src="{{ asset('./storage/proyek/gedung/' . $proyek->nama . '_gedung.jpg') }}" alt="Gambar Proyek" class="project-img">
                                          @else
                                                <div class="project-img"></div>
                                          @endif
                                          <div class="project-card-container position-absolute start-50 translate-middle p-4 shadow">
                                                <div class="row">
                                                      <div class="col-10">
                                                            <p class="project-name-placeholder">{{ $proyek->nama }}</p>
                                                      </div>
                                                      <div class="year-container col">
                                                            <div class="position-absolute bottom-0 end-0 pe-4 pb-4">
                                                                  <p class="year-placeholder m-0">{{ $proyek->first_year }}</p>
                                                            </div>
                                                            
                                                      </div>
                                                </div>
                                          </div>
                                    </div>           
                              </div>
                              @endforeach
                        </div>
                  </div>

                  <div class="ad-container">
                        <div class="text-center">
                              <p class="ad-text-header">Mengapa Memilih Kami?</p>
                              <p class="ad-text-content">“Visi kami adalah menjadi penyuplai kaca dan cermin yang memiliki kompetensi tinggi di Jakarta dan sekitarnya.”</p>
                              <div class="mt-5">
                                    
                                    <a href="{{ url('./#jump-section-hubungi-kami') }}" class="ad-contact-btn p-3">Hubungi Kami <i class="bi bi-chevron-right"></i></a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</x-app>

<style>
      .background-img{

            width: 100%;
            margin-top: 180px;
            z-index: -1;
      }
      .carousel-container{
            
            margin-inline: 7vw;
            margin-top: 6vw;  
      }
      .project-container{
            
            height: 535px;
      }
      .project-img{
            
            width: 400px;
            height: 450px;
            border-radius: 5px;
            object-fit: cover;
            background-color: #1e1e1e;
      }
      .project-card-container{
            
            width: 350px;
            height: 125px;
            background-color: #FFFFFF;
            border-radius: 10px;
      }
      .year-container{
            
            height: 100%;
      }
      .project-name-placeholder{

            font-size: 1.25rem;
            font-weight: 700;
      }
      .year-placeholder{

            font-size: 1rem;
            font-weight: 300;
            color: #AAAAAA;
      }
      .ad-container{
            margin-inline: 7vw;
            margin-top: 15vw;
            margin-bottom: 20vw;
      }
      .ad-text-header{

            font-size: 1.25rem;
            color: #1e1e1e;
            font-weight: 700;
      }
      .ad-text-content{

            font-size: 1rem;
            color: #1e1e1e;
            font-weight: 500;
      }
      .ad-contact-btn{

            font-size: 1rem;
            font-weight: 700;
            color: #FFFFFF;
            background-color: #E94D36;
            border-radius: 5px;
            text-decoration: none;
      }
      @media only screen and (max-width: 768px){

            .ad-container{

                  
                  margin-top: 20vw;
                  margin-bottom: 25vw;
            }
      }
      @media only screen and (max-width: 449px){

            .carousel-container{

                  margin-top: 15vw;
            }
            .project-container{

                  height: 430px;
            }
            .project-img{

                  width: 250px;
                  height: 350px;
            }
            .project-card-container{

                  width: 220px;
                  height: 100px;
            }
            .project-name-placeholder{

                  font-size: 1rem;
            }
            .year-placeholder{

                  font-size: 0.75rem;
            }
            .ad-container{

                  margin-top: 30vw;
                  margin-bottom: 35vw;
            }
      }
</style>