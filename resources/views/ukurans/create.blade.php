<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <h1 class="text-center"><a href="{{ route('ukuran.index') }}" class="text-decoration-none text-dark">UKURAN</a></h1>
                        <p class="text-center">Tambah Ukuran</p>
                        <hr>
                  </div>
                  <div class="col-10">
                        
                        <form method="POST" action="{{ route('ukuran.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                    <label for="kaca_id">Kaca</label>
                                    <select name="kaca_id" required>
                                          <option selected>Pilih Kaca</option>
                                          @foreach($kacas as $kaca)
                                                <option value="{{ $kaca->id }}">{{ $kaca->nama }}</option>
                                          @endforeach
                                    </select>
                                    @error('kaca_id')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <label for="panjang">Panjang</label>
                                    <input type="number" name="panjang" required>
                                    @error('panjang')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <label for="lebar">Lebar</label>
                                    <input type="number" name="lebar" required>
                                    @error('lebar')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              <button type="submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-app>