@if(session()->has('error'))
      <script>alert('{{ session()->get('error') }}')</script>
@endif
@if(session()->has('not success'))
      <script>alert('{{ session()->get('not success') }}')</script>
@endif
@if(session()->has('success'))
      <script>alert('{{ session()->get('success') }}')</script>
@endif