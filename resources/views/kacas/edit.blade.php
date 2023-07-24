<x-app>
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <h1 class="text-center"><a href="{{ route('kaca.index') }}" class="text-decoration-none text-dark">KACA</a></h1>
                        <p class="text-center">edit kaca</p>
                        <hr>
                  </div>
                  <div class="col-10">                 
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