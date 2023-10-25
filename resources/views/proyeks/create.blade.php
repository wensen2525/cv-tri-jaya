<x-app>
      <div class="container p-5">
            <div class="row">
                  <div class="col-10">
                        <p class="fs-3 fw-bold mb-4 border-bottom border-dark">Tambah Project</p>
                        <form method="POST" action="{{ route('proyek.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="nama" class="col-2">Nama Proyek</label>
                                    <input type="text" class="form-control" name="nama" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="tahun" class="col-2">Tahun</label>
                                    <input type="number" class="form-control" name="first_year" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="gedung_image" class="col-2">Gambar<span class="require-input">*</span></label>
                                    <input type="file" class="form-control" name="gedung_image" required value="{{old('gedung_image', null)}}">
                                    
                                    @error('gedung_image')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              <button type="submit" class="button-submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-app>