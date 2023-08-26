<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <h1 class="text-center"><a href="{{ route('kaca.index') }}" class="text-decoration-none text-dark">KACA</a></h1>
                        <p class="text-center">edit kaca</p>
                        <hr>
                  </div>
                  <div class="col-10">
                        <form method="POST" action="{{ route('kaca.update', $kaca) }}" enctype="multipart/form-data">
                              @csrf
                              @method('UPDATE')
                              
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="jenis_id">Jenis<span class="require-input">*</span></label>
                                    <select class="form-select" name="jenis_id" required>
                                          <option disabled selected>Pilih Jenis</option>
                                          @foreach($jenises as $j)
                                                <option @if($kaca->jenis_id == $j->id) selected value="{{ $kaca->jenis_id }}" @else value="{{ $j->id }} @endif">{{ $j->nama }}</option>
                                          @endforeach
                                    </select>
                                    
                                    @error('jenis_id')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="nama">Nama kaca<span class="require-input">*</span></label>
                                    <input class="form-control" type="text" name="nama" required value="{{$kaca->nama}}">
                                    
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="stok">Stok<span class="require-input">*</span></label>
                                    <input class="form-control" type="number" name="stok" required value="{{$kaca->stok}}">
                                    
                                    @error('stok')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="harga">Harga<span class="require-input">*</span></label>
                                    <input class="form-control" type="number" name="harga" required value="{{ $kaca->harga }}">
                                    
                                    @error('harga')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="ketebalan">Ketebalan</label>
                                    <div class="input-group">
                                          <input class="form-control" type="number" name="ketebalan" aria-describedby="ketebalan_input" value="{{ $kaca->ketebalan }}">
                                          <span class="input-group-text" id="ketebalan_input">mm</span>
                                    </div>
                                    
                                    @error('ketebalan')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              @if($kaca->image)
                                    <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                          <label for="image">Gambar Baru<span class="require-input">*</span></label>
                                          <input type="file" class="border" name="image" required>
                                          @error('image')
                                                <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                          @enderror
                                    </div>
                                    <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                          <label>Gambar Lama</label>
                                          <img src="{{ url('./storage/kaca/'. $kaca->image) }}" alt="{{ $kaca->image }}" class="col-3 img-fluid border border-1 border-black">
                                    </div>
                              @else
                                    <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                          <label for="image">Gambar<span class="require-input">*</span></label>
                                          <input type="file" class="border" name="image" required>
                                          @error('image')
                                                <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                          @enderror
                                    </div>
                              @endif

                              @method('PUT')
                              <button type="submit">Submit</button>
                        </form>             
                  </div>
            </div>
      </div>
</x-app>

{{-- EDIT AND UPDATE --}}
{{-- <form method="POST" action="{{ route('routing-to', $variable) }}" enctype="multipart/form-data">
      @csrf
      @method('UPDATE')

      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $student->name }}">
      </div>

      @method('PUT')
      <button type="submit">Submit</button>
</form> --}}