<x-app>
      <div class="container p-5">
            <div class="row">
                  <p class="fs-3 fw-bold mb-4 border-bottom border-dark">Tambah Jenis</p>
                  <div class="col-10">
                        
                        <form method="POST" action="{{ route('jenis.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="nama" class="col-2">Nama jenis</label>
                                    <input type="text" class="form-control" name="nama" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              <button type="submit" class="button-submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-home>