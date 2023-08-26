@if(session('testing'))
      <script>alert('{{ session()->get('testing') }}')</script>
@endif


@if(session('error'))
      <script>alert('{{ session()->get('error') }}')</script>
@endif
@if(session('not success'))
      <script>alert('{{ session()->get('not success') }}')</script>
@endif
@if(session('success'))
      <script>alert('{{ session()->get('success') }}')</script>
@endif