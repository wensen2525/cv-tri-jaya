<x-app>
    <head>
        <link rel="stylesheet" type="text/scss" href="style.scss">
    </head>
    <section>
        <div class="content-container container col halo">
            @foreach($proyeks as $proyek)
            <div class="container">
                  <div class="row">
                        <div class="col-12">
                              <div id="product-slider" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                          <div class="carousel-item active">       
                                                <div class="d-flex gap-2" style="overflow:auto">
                                                      <div class="col-4">
                                                            <div class="card col">
                                                                  <div class="row g-0">
                                                                        <div class="col-4">
                                                                              <img src="{{ url('/storage/gambar/' . $proyek->gambar) }}" class="rounded float m-3" alt="Image" style="width: 8vw; height: auto; object-fit:cover;">
                                                                        </div>
                                                                        <div class="col-8">
                                                                              <div class="card-body">
                                                                                    <h5 class="fw-semibold">{{ $proyek->name }}</h5>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>

                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
</x-app>