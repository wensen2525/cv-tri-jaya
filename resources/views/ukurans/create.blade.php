<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-10">
                        
                        <form method="POST" action="{{ route('ukuran.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="kaca_id" class="col-2">Kaca</label>
                                    <select name="kaca_id" required class="form-select">
                                          <option selected>Pilih Kaca</option>
                                          @foreach($kacas as $kaca)
                                                <option value="{{ $kaca->id }}">{{ $kaca->nama }}</option>
                                          @endforeach
                                    </select>
                                    @error('kaca_id')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="panjang" class="col-2">Panjang</label>
                                    <input type="number" name="panjang" required class="form-control">
                                    @error('panjang')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="lebar" class="col-2">Lebar</label>
                                    <input type="number" name="lebar" required class="form-control">
                                    @error('lebar')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              <button type="submit" class="button-submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-app>