<x-home>
      <div class="container">
            <div class="row">
                  <div class="col">
                        <h1 class="text-center">KACA</h1>
                        <hr>
                        @if(session()->has('success'))
                                    <div class="alert alert-success">
                                          {{ session()->get('success') }}
                                    </div>
                        @endif
                        {{-- code here --}}
                        <a href="{{ route('kaca.create') }}" class="btn btn-primary">Tambah Kaca</a>
                        <a href="{{ route('ukuran.create') }}" class="btn btn-primary">Tambah Ukuran</a>
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Jenis</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">Ukuran</th>
                                  <th scope="col">Ketebalan</th>
                                  <th scope="col">::</th>
                                </tr>
                              </thead>
                              <tbody>
                                    @foreach($kacas as $index => $kaca)
                                    <tr>
                                          <td>{{ $index+1 }}</td>
                                          <td scope="row">{{ $kaca->nama }}</td>
                                          <td scope="row">{{ $kaca->jenis->nama }}</td>
                                          <td scope="row">{{ $kaca->stok }}</td>
                                          <td scope="row">Rp{{ number_format($kaca->harga) }}</td>
                                          
                                          <td scope="row">
                                                <div>
                                                @foreach($kaca->ukurans as $ukuran)
                                                      <p>{{ $ukuran->panjang }} x {{ $ukuran->lebar }} mm</p>
                                                @endforeach
                                                </div>
                                          </td>
                                          <td scope="row"> 
                                                @if($kaca->ketebalan == null)
                                                      -
                                                @else
                                                      {{ $kaca->ketebalan }} mm
                                                @endif
                                          </td>
                                          <td scope="row">
                                                <div class="d-flex gap-2">
                                                      <form id="delete-form" action="{{ route('kaca.destroy', $kaca) }}" method="post" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                                  <button id="delete-btn" class="btn btn-danger">Delete</button>
                                                            @csrf
                                                      </form>
                                                      <a href="{{ route('kaca.edit', $kaca) }}" class="btn btn-warning">Update</a>
                                                </div>
                                                
                                          </td>
                                    </tr>
                                    @endforeach
                              </tbody>
                        </table>
                        
                  </div>
            </div>
      </div>
</x-home>

<script>
      document.getElementById('delete-btn').addEventListener('click', function(e) {
          e.preventDefault();
          if (confirm('Are you sure you want to delete this item?')) {
              document.getElementById('delete-form').submit();
          }
      });
</script>
{{-- one value --}}
{{-- {{ $variable }} --}}

{{-- more than one value --}}
{{-- @foreach ($variables as $variable)
      {{ $variable }}
@endforeach --}}

{{-- DELETE --}}
{{-- <form action="{{ route('student.destroy', $student) }}" method="post" enctype="multipart/form-data">
      @method('DELETE')

      <button type="submit">Delete</button>

      @csrf
</form> --}}