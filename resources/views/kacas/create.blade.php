<x-app>
      <div class="container p-5">
            <div class="row">
                  <div class="col-10">
                        <p class="fs-3 fw-bold mb-4 border-bottom border-dark">Tambah Kaca</p>
                        <form method="POST" action="{{ route('kaca.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="jenis_id" class="col-2">Jenis<span class="require-input">*</span></label>
                                    <select class="form-select" name="jenis_id" required>
                                          <option disabled selected>Pilih Jenis</option>
                                          @foreach($jenises as $j)
                                                <option @if(old('jenis_id') != null && old('jenis_id') == $j->id) selected @endif value="{{ $j->id }}">{{ $j->nama }}</option>
                                          @endforeach
                                    </select>
                                    
                                    @error('jenis_id')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="nama" class="col-2">Nama kaca<span class="require-input">*</span></label>
                                    <input class="form-control" type="text" name="nama" required value="{{old('nama', null)}}">
                                    
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="stok" class="col-2">Stok<span class="require-input">*</span></label>
                                    <input class="form-control" type="number" name="stok" required value="{{old('stok', null)}}">
                                    
                                    @error('stok')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="harga" class="col-2">Harga<span class="require-input">*</span></label>
                                    <input class="form-control" type="number" name="harga" required value="{{old('harga', null)}}">
                                    
                                    @error('harga')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="ketebalan" class="col-2">Ketebalan</label>
                                    <div class="input-group">
                                          <input class="form-control" type="number" name="ketebalan" aria-describedby="ketebalan_input" value="{{old('ketebalan', null)}}">
                                          <span class="input-group-text" id="ketebalan_input">mm</span>
                                    </div>
                                    
                                    @error('ketebalan')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="image" class="col-2">Gambar<span class="require-input">*</span></label>
                                    <input type="file" class="form-control" name="image" required value="{{old('image', null)}}">
                                    
                                    @error('image')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              {{-- <hr> --}}
                              {{-- <small class="text-muted">(optional)</small>
                              <p class="fw-bold">Ukuran</span></p>

                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="panjang" class="col-2">Panjang</label>
                                    @for ($j = 0; $j < 3; $j++)
                                          <input type="number" name="panjang[{{ $j }}]" required class="form-control">
                                    @endfor

                                    @error('panjang')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="lebar" class="col-2">Lebar</label>
                                    @for ($j = 0; $j < 3; $j++)
                                          <input type="number" name="lebar[{{ $j }}]" required class="form-control">
                                    @endfor
                                    @error('lebar')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div> --}}

                              <button type="submit" class="button-submit">Submit</button>
                        </form>
                  </div>
            </div>
      </div>
</x-home>
{{-- CREATE --}}
{{-- <form method="POST" action="{{ route('routing-to') }}" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" value="">
      </div>

      <button type="submit">Submit</button>
</form> --}}