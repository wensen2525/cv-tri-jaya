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
                              
                              <div class="mb-3">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis" required>
                                          <option value="{{ $kaca->jenis_id }}" selected>{{ $kaca->jenis->nama }}</option>
                                          @foreach($jenises as $j)
                                                <option value="{{ $j->id }}">{{ $j->nama }}</option>
                                          @endforeach
                                    </select>
                                    @error('jenis')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <label for="nama">Nama kaca</label>
                                    <input type="text" name="nama" value="{{ $kaca->nama }}" required>
                                    @error('nama')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" value="{{ $kaca->stok }}" required>
                                    @error('stok')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>
                              <div class="mb-3">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" value="{{ $kaca->harga }}" required>
                                    @error('harga')
                                          <div class="text-danger" style="font-style: italic">{{ $message }}</div>
                                    @enderror
                              </div>

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