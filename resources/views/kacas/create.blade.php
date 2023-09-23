<x-home>
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <h1 class="text-center"><a href="{{ route('kaca.index') }}" class="text-decoration-none text-dark">KACA</a></h1>
                        <p class="text-center">Tambah Kaca</p>
                        <hr>
                  </div>
                  <div class="col-10">
                        
                        <form method="POST" action="{{ route('kaca.store') }}" enctype="multipart/form-data">
                              @csrf
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="jenis_id">Jenis<span class="require-input">*</span></label>
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
                                    <label for="nama">Nama kaca<span class="require-input">*</span></label>
                                    <input class="form-control" type="text" name="nama" required value="{{old('nama', null)}}">
                                    
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="stok">Stok<span class="require-input">*</span></label>
                                    <input class="form-control" type="number" name="stok" required value="{{old('stok', null)}}">
                                    
                                    @error('stok')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="harga">Harga<span class="require-input">*</span></label>
                                    <input class="form-control" type="number" name="harga" required value="{{old('harga', null)}}">
                                    
                                    @error('harga')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="ketebalan">Ketebalan</label>
                                    <div class="input-group">
                                          <input class="form-control" type="number" name="ketebalan" aria-describedby="ketebalan_input" value="{{old('ketebalan', null)}}">
                                          <span class="input-group-text" id="ketebalan_input">mm</span>
                                    </div>
                                    
                                    @error('ketebalan')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                    <label for="image">Gambar<span class="require-input">*</span></label>
                                    <input type="file" class="border" name="image" required value="{{old('image', null)}}">
                                    
                                    @error('image')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

                              <button type="submit">Submit</button>
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