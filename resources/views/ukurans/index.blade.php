<x-app>
      <div class="container">
            <div class="row">
                  <div class="col">
                        <h1 class="text-center">UKURAN</h1>
                        <hr>
                        {{-- code here --}}
                        <a href="{{ route('ukuran.create') }}" class="btn btn-primary">Tambah Ukuran Kaca</a>
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Panjang</th>
                                  <th scope="col">Lebar</th>
                                  <th scope="col">::</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($ukurans as $index => $ukuran)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td scope="row">{{ $ukuran->kaca->nama }}</td>
                                    <td scope="row">{{ $ukuran->panjang }}</td>
                                    <td scope="row">{{ $ukuran->lebar }}</td>
                                    <td scope="row" class="d-flex gap-2">
                                          <form id="delete-form" action="{{ route('ukuran.destroy', $ukuran) }}" method="post" enctype="multipart/form-data">
                                                @method('DELETE')
                                                      <button id="delete-btn" class="btn btn-danger">Delete</button>
                                                @csrf
                                          </form>
                                          <a href="{{ route('ukuran.edit', $ukuran) }}" class="btn btn-warning">Update</a>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                        
                  </div>
            </div>
      </div>
</x-app>

<script>
      document.getElementById('delete-btn').addEventListener('click', function(e) {
          e.preventDefault();
          if (confirm('Are you sure you want to delete this item?')) {
              document.getElementById('delete-form').submit();
          }
      });
</script>