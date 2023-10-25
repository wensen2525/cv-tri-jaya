<x-app pageTitle="Dashboard Admin">
      <div class="container p-5">
            <div class="row">
                  <div class="col-12">
                        <div class="row">
                              <div class="col-12">
                                    <b class="fs-4" style="color: #4C48FF">Hello Admin,</b>
                                    <p><small class="text-muted">Have a nice day to work</small></p>
                              </div>
                              <div class="col-12 pt-3">
                                    <p class="fw-semibold" style="font-size: 20px;color: #4C48FF">Total</p>
                              </div>
                              <div class="col-12 pb-3">
                                    <div class="gap-3" style="display:grid;grid-gap: 10px;grid-template-columns: auto auto auto;">
                                          <div class="p-3 bg-warning rounded-3">
                                                <p>Kaca</p>
                                                <p class="m-0 d-flex justify-content-end fs-3 fw-bold">{{ $kaca->count() }}</p>
                                          </div>
                                          <div class="p-3 bg-warning rounded-3">
                                                <p>Jenis</p>
                                                <p class="m-0 d-flex justify-content-end fs-3 fw-bold">{{ $jenis->count() }}</p>
                                          </div>
                                          <div class="p-3 bg-warning rounded-3">
                                                <p>Proyek</p>
                                                <p class="m-0 d-flex justify-content-end fs-3 fw-bold">{{ $proyek->count() }}</p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-12 pt-3">
                                    <p class="fw-semibold" style="font-size: 20px;color: #4C48FF">Recently Update</p>
                              </div>
                              <div class="col-12 pb-3">
                                    <table class="table">
                                          <thead>
                                                <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Type</th>
                                                      <th scope="col">Nama</th>
                                                      <th scope="col">Status</th>
                                                      <th scope="col">Created / Updated At</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @foreach($histories as $index => $history)
                                                <tr>
                                                      <td>{{ $index+1 }}</td>
                                                      <td scope="row">{{ $history->type }}</td>
                                                      <td scope="row">{{ $history->nama }}</td>
                                                      @if($history->status == "Created")
                                                      <td scope="row" class="fw-bold text-success">{{ $history->status }}</td>
                                                      @elseif($history->status == "Updated")
                                                      <td scope="row" class="fw-bold text-warning">{{ $history->status }}</td>
                                                      @else
                                                      <td scope="row" class="fw-bold text-muted">Unknown</td>
                                                      @endif
                                                      <td scope="row">{{ $history->updated_at }}</td>
                                                </tr>
                                                @endforeach
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</x-app>