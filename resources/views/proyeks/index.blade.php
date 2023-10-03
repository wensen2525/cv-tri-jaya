<x-home>
    <div class="container">
          <div class="row">
                <div class="col">
                      <h1 class="text-center">PROYEK</h1>
                      <hr>
                      {{-- code here --}}
                      <a href="{{ route('proyek.create') }}" class="btn btn-primary">Create Proyek</a>
                      <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">::</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($proyeks as $index => $proyek)
                              <tr>
                                  <td>{{ $index+1 }}</td>
                                  <td scope="row">{{ $proyek->nama }}</td>
                                  <td scope="row">{{ $proyek->first_year }}</td>
                                  <td scope="row" class="d-flex gap-2">
                                        <form id="delete-form" action="{{ route('proyek.destroy', $proyek) }}" method="post" enctype="multipart/form-data">
                                              @method('DELETE')
                                                    <button id="delete-btn" class="btn btn-danger">Delete</button>
                                              @csrf
                                        </form>
                                        <a href="{{ route('proyek.edit', $proyek) }}" class="btn btn-warning">Update</a>
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