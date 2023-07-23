<x-app>
      <div class="container">
            <div class="row">
                  <div class="col">
                        <h1 class="text-center">KACA</h1>
                        <hr>
                        {{-- code here --}}
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