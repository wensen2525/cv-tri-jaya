<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <h1 class="text-center"><a href="{{ route('jenis.index') }}" class="text-decoration-none text-dark">JENIS</a></h1>
                        <p class="text-center">Tambah Jenis</p>
                        <hr>
                  </div>
                  <div class="col-10">
                        
                        <form method="POST" action="{{ route('jenis.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                    <label for="nama">Nama jenis</label>
                                    <input type="text" name="nama" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              <button type="submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-app>