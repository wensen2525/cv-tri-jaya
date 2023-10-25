<x-app>
      <div class="container p-5">
            <div class="row">
                  <div class="col-10">
                        <p class="fs-3 fw-bold mb-4 border-bottom border-dark">Tambah Project</p>
                        <form method="POST" action="{{ route('proyek.update', $proyek) }}" enctype="multipart/form-data">
                              @csrf
                              @method('UPDATE')
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="nama" class="col-2">Nama Proyek</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $proyek->nama }}" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="tahun" class="col-2">Tahun</label>
                                    <input type="number" class="form-control" name="first_year" value="{{ $proyek->first_year }}" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              @if($proyek->gedung_image)
                                    <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                          <label for="gedung_image" class="col-2">Gambar Baru<span class="require-input">*</span></label>
                                          <input type="file" class="form-control" name="gedung_image">
                                          @error('gedung_image')
                                                <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                          <label class="col-2">Gambar Lama</label>
                                          <img src="{{ url('./storage/proyek/gedung/'. $proyek->gedung_image) }}" alt="{{ $proyek->gedung_image }}" class="col-3 img-fluid border border-1 border-black">
                                    </div>
                              @else
                                    <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                          <label for="gedung_image" class="col-2">Gambar<span class="require-input">*</span></label>
                                          <input type="file" class="form-control" name="gedung_image" required>
                                          @error('gedung_image')
                                                <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                          @enderror
                                    </div>
                              @endif
                              @method('PUT')
                              <button type="submit" class="button-submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-app>