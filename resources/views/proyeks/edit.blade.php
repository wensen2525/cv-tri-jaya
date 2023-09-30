<x-home>
    <div class="container">
          <div class="row">
                <div class="col-12">
                      <h1 class="text-center"><a href="{{ route('proyek.index') }}" class="text-decoration-none text-dark">PROYEK</a></h1>
                      <p class="text-center">Edit Proyek</p>
                      <hr>
                </div>
                <div class="col-10">
                      <form method="POST" action="{{ route('proyek.update', $proyek) }}" enctype="multipart/form-data">
                            @csrf
                            @method('UPDATE')
                            
                            <div class="mb-3">
                                  <label for="nama">Nama Proyek</label>
                                  <input type="text" name="nama" value="{{ $proyek->nama }}" required>
                                  @error('nama')
                                        <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                  <label for="nama">Tahun</label>
                                  <input type="text" name="first_year" value="{{ $proyek->first_year }}" required>
                                  @error('nama')
                                        <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                  @enderror
                            </div>
                            <div class="mb-3 d-block d-lg-flex align-items-lg-center gap-3">
                                <label for="gedung_image">Gambar<span class="require-input">*</span></label>
                                <input type="file" class="border" name="gedung_image" required value="{{old('gedung_image', null)}}">
                                
                                @error('gedung_image')
                                      <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                @enderror
                            </div>

                            @method('PUT')
                            <button type="submit">Submit</button>
                      </form>             
                </div>
          </div>
    </div>
</x-home>