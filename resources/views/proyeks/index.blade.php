<x-app pageTitle="Proyek">
      <div class="container p-5">
            <div class="row">
                  <div class="col-12 d-flex justify-content-end">
                        <a href="{{ route('proyek.create') }}" class="btn-primary2 text-decoration-none"><i class="bi bi-plus"></i> Tambah proyek</a>
                  </div>
                  <div class="col-12">
                        <table class="table">
                              <thead>
                                    <tr>
                                          <th scope="col">#</th>
                                          <th>Image</th>
                                          <th scope="col">Nama</th>
                                          <th scope="col">Year Start</th>
                                          <th scope="col">::</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    @foreach($proyeks as $index => $proyek)
                                    <tr>
                                          <td>{{ $index+1 }}</td>
                                          <td><img src="/storage/proyek/gedung/{{ $proyek->gedung_image }}" width="200px" class="img-fluid" alt=""></th>
                                          <td scope="row">{{ $proyek->nama }}</td>
                                          <td scope="row">{{ $proyek->first_year }}</td>
                                          <td scope="row">
                                                <div class="d-flex gap-2">
                                                      <form id="delete-form" action="{{ route('proyek.destroy', $proyek) }}" method="post" enctype="multipart/form-data">
                                                            @method('DELETE')
                                                                  <button id="delete-btn" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                            @csrf
                                                      </form>
                                                      <a href="{{ route('proyek.edit', $proyek) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                </div>
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