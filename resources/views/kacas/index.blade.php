<x-app>
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
                        <a href="{{ route('kaca.create') }}" class="btn btn-primary">Create Kaca</a>
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Jenis</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">ketebalan</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($kacas as $index => $kaca)
                                <tr>

                                  <td>{{ $index+1 }}</td>
                                  <td>{{ $kaca->nama }}</td>
                                  <td>{{ $kaca->jenis->nama }}</td>
                                  <td>{{ $kaca->stok }}</td>
                                  <td>{{ $kaca->harga }}</td>
                                  <td>{{ $kaca->ketebalan_id }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                  </div>
            </div>
      </div>
</x-app>

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