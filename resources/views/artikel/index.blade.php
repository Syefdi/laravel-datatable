<div class="card">
    <div class="card-body">
        <div class="data-tables">
            {{-- @include('layouts.includes.messages') --}}
            <div class="data-tables">
                {{-- @include('layouts.includes.messages') --}}
                <div class="table-responsive">
                    <h4>Artikel</h4>
                    {{-- <a href="{{ route('export.customer.receive', ['month' => request('month'), 'year' => request('year')]) }}" id="export-button-customer" class="btn btn-success text-light">
                        <i class="fa fa-file-excel"></i> Excel
                    </a> --}}
                    {{-- <button id="openFilterCustomer" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa-solid fa-filter"></i> Apply Filter</button> --}}
                    <table id="table-customer-receive" class="text-center table w-100">
                        <thead class="bg-light text-capitalize">
                            <tr class="text-light">
                                <th class="bg-secondary text-light text-center v-align-middle">#</th>
                                <th class="bg-success text-light text-center v-align-middle">Image</th>
                                <th class="bg-success text-light text-center v-align-middle">Title</th>
                                {{-- <th colspan="4" class="bg-info text-light text-center v-align-middle">Entertain</th> --}}
                                <th class="bg-primary text-light text-start v-align-middle">Description</th>
                                <th class="bg-warning text-light text-start v-align-middle">Author</th>
                                <th class="bg-danger text-light text-start v-align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    
  </script>