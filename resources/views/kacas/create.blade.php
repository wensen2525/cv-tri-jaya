<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-10">

                        <form method="POST" action="{{ route('kaca.store') }}" enctype="multipart/form-data">
                              @csrf
                        
                              <div class="mb-3">
                                    <label for="jenis">Jenis</label>
                                    <select name="jenis_id" id="jenis">

                                          <option value="" selected>Pilih Jenis</option>
                                          @foreach ($jenises as $jenis)
                                                <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                                          @endforeach
                                    </select>
                              </div>

                              <div class="mb-3">
                                    <label for="nama">Nama Kaca</label>
                                    <input type="text" name="nama" required>
                              </div>

                              <div class="mb-3">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" required>
                              </div>

                              <div class="mb-3">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" required>
                              </div>
                        
                              <button type="submit">Submit</button>
                        </form>     
                  </div>
            </div>
      </div>
</x-app>

{{-- $table->id();
$table->unsignedBigInteger('jenis_id');
$table->string('nama');
$table->unsignedBigInteger('ketebalan_id')->default(5.5);
$table->unsignedBigInteger('bahan_id')->nullable();
$table->unsignedBigInteger('impor_ekspor_id')->nullable();
$table->integer('stok');
$table->integer('harga');
$table->timestamps(); --}}

{{-- CREATE --}}
{{-- <form method="POST" action="{{ route('routing-to') }}" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $student->name }}">
      </div>

      <button type="submit">Submit</button>
</form> --}}