<x-app>
      <div class="container">
            <div class="row">
                  <div class="col">
                        <ul style="list-style: decimal">
                        @foreach ($kacas as $kaca)
                            <li>{{ $kaca->nama }}</li>
                        @endforeach
                        </ul>
                        
                  </div>
            </div>
      </div>
</x-app>