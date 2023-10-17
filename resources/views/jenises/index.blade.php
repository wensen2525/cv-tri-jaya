<x-app>
      <div class="container p-5">
            <div class="row">
                  <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('jenis.create') }}" class="btn-primary2 text-decoration-none"><i class="bi bi-plus"></i> Tambah Jenis</a>
                  </div>
                  <div class="col-12">
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">::</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($jenises as $index => $jenis)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td scope="row">{{ $jenis->nama }}</td>
                                    <td scope="row" class="d-flex gap-2">
                                          <form id="delete-form" action="{{ route('jenis.destroy', $jenis) }}" method="post" enctype="multipart/form-data">
                                                @method('DELETE')
                                                      <button id="delete-btn" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                @csrf
                                          </form>
                                          <a href="{{ route('jenis.edit', $jenis) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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