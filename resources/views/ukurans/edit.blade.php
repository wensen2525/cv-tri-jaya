<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-10">
                        <form method="POST" action="{{ route('ukuran.update', $ukuran) }}" enctype="multipart/form-data">
                              @csrf
                              @method('UPDATE')
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="kaca" class="col-2">Kaca</label>
                                    <select name="kaca_id" required readonly class="form-select">
                                          <option value="{{ $ukuran->kaca_id }}" selected>{{ $ukuran->kaca->nama }}</option>
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
                                    <input type="text" class="form-control" name="panjang" value="{{ $ukuran->panjang }}" required>
                                    @error('panjang')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="lebar" class="col-2">Lebar</label>
                                    <input type="text" class="form-control" name="lebar" value="{{ $ukuran->lebar }}" required>
                                    @error('lebar')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              @method('PUT')
                              <button type="submit" class="button-submit">Submit</button>
                        </form>             
                  </div>
            </div>
      </div>
</x-app>