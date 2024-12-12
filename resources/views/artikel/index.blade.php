@extends('layouts.main')
@section('content')
<div class="card">
  <div class="card-body">
      <div class="data-tables">
          {{-- @include('layouts.includes.messages') --}}
          <div class="data-tables">
              {{-- @include('layouts.includes.messages') --}}
              <div class="table-responsive">
                  <h4>Artikel</h4>
                  <p class="float-end mb-2">
                    <button type="submit" id="createModal" class="btn btn-primary text-light" onclick="showModal()"><i
                            class="fa fa-plus"></i> New Artikel</button>
                  </p>
                  <table id="table-artikel" class="text-center table w-100">
                      <thead class="bg-light text-capitalize">
                          <tr class="text-light">
                              <th class="bg-secondary text-light text-center v-align-middle">#</th>
                              <th class="bg-success text-light text-center v-align-middle">Image</th>
                              <th class="bg-success text-light text-start v-align-middle">Title</th>
                              {{-- <th colspan="4" class="bg-info text-light text-center v-align-middle">Entertain</th> --}}
                              <th class="bg-success text-light text-start v-align-middle">Description</th>
                              <th class="bg-primary text-light text-start v-align-middle">Author</th>
                              <th class="bg-warning text-light text-center v-align-middle">Release Date</th>
                              <th class="bg-danger text-light text-center v-align-middle">Action</th>
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
{{-- <div class="modal fade" id="artikelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div> --}}
<div class="modal" id="artikelModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Create Artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" id="formArtikel" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id">
          <div class="mb-3 row">
              <label for="img" class="col-sm-3 col-form-label required">Image<span
                      class="text-danger"></span></label>
              <div class="col-sm-9">
                  <input type="file" class="form-control" name="img" id="img">
                  <div id="file-name-display"></div>
              </div>
          </div>
          <div class="mb-3 row">
            <label for="title" class="col-sm-3 col-form-label required">Title<span
                    class="text-danger">*</span></label>
            <div class="col-sm-9">
              <input type="text" name="title" id="title" class="form-control">
                <span class="text-danger" id="titleError"></span>
            </div>
        </div>
          <div class="mb-3 row">
              <label for="content" class="col-sm-3 col-form-label required">Description<span
                      class="text-danger">*</span></label>
              <div class="col-sm-9">
                  <textarea name="content" id="content" class="form-control content"
                  style="height:200px;"></textarea>
                  <span class="text-danger" id="contentError"></span>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="author" class="col-sm-3 col-form-label">Author<span
                class="text-danger"></span></label>
              <div class="col-sm-9">
                  <input type="text" name="author" id="author" class="form-control">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary text-light btnCreate"><i class="fa fa-save"></i>
                  Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  let save_method
  $(document).ready(function() {
    if ($('#sparkline-chart').length) {
        createSparklineChart();
    }
    $('#table-artikel').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url: "{{ route('artikel.index') }}",
          data: function(data) {
                      console.log(data);
                }
      },
      columns: [
        {
          data: 'DT_RowIndex',
          name: 'DT_RowIndex',
        },
        {
          data: 'image',
          name: 'image',
        },
        {
          data: 'title',
          name: 'title',
        },
        {
          data: 'content',
          name: 'content',
        },
        {
          data: 'author',
          name: 'author',
        },
        {
          data: 'release_date',
          name: 'release_date',
        },
        {
          data: 'action',
          name: 'action',
        },
      ]
    });
    $('#createModal').on('click', function() {
          save_method = 'create';

          $('#modalTitle').text('Create Artikel');

          $('#formArtikel')[0].reset();
          $('#file-name-display').html('');
          $('#artikelModal').modal('show')
      });

      $('#formArtikel').on('submit', function(e) {
          e.preventDefault();

          // Tampilkan konfirmasi Swal sebelum submit
          Swal.fire({
              title: 'Are you sure?',
              text: "Do you want to save this Artikel?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes!'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Jika dikonfirmasi, jalankan logika submit
                  console.log(['form']);

                  const formData = new FormData(this);

                  let url, method;
                  url = "{{ route('artikel.store') }}";
                  method = 'POST';

                  if (save_method == 'update') {
                      url = 'artikel/' + $('#id').val();
                      formData.append('_method', 'PUT');
                  }

                  $.ajax({
                      headers: {
                          'X-CSRF-TOKEN': $('input[name="_token"]').val()
                      },
                      type: method,
                      url: url,
                      data: formData,
                      processData: false,
                      contentType: false,
                      success: function(response) {
                          let message = response.message;

                          // Menampilkan pesan berdasarkan status aksi (edit atau create)
                          let title = '';

                          if (response.status === 'created') {
                              title = 'Success!';
                          } else if (response.status === 'updated') {
                              title = 'Update successfully';
                          } else {
                              title = 'Informasi';
                          }
                          $('#artikelModal').modal('hide');
                          Swal.fire({
                              title: title,
                              text: message,
                              icon: "success",
                              showConfirmButton: false,
                              timer: 1000,
                          });
                          $('#table-artikel').DataTable().ajax.reload();
                      },
                      error: function(jqXHR, textStatus, errorthrown) {
                          console.log(jqXHR.responseText);
                      }
                  });
                }
            });
       });
      window.editModal = editModal
      function editModal(e) {
          let id = e.getAttribute('data-id');
          save_method = 'update';

          $('#modalTitle').text('Edit Artikel');
          // alert(id);

          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: "GET",
              url: `{{ route('artikel.edit', ['id' => ':id']) }}`.replace(':id', id),
              success: function(response) {
                  let result = response.data;
                  console.log(result);
                  
                  $('#id').val(result.id);
                  $('#title').val(result.title);
                  $('#content').val(result.content);
                  $('#author').val(result.author);
                  if (result.img) {
                      // Ekstrak nama file dari path
                      const fileName = result.img.split('/').pop();
                      
                      // Menampilkan gambar langsung menggunakan tag <img> dan mengatur lebar gambar
                      $('#file-name-display').html(`
                          <br><img src="${window.location.origin}/storage/${result.img}" class="img-thumbnail" width="100" height="auto" alt="${fileName}">
                      `);
                  } else {
                      $('#file-name-display').html('No file uploaded.');
                  }

                  console.log(result.name);
              },
              error: function(xhr) {
                  console.log(xhr.responseText);
                  alert(xhr.responseText)
              }
          })
          $('#artikelModal').modal('show');
      }
      $(document).on('click', '.delete', function() {
          const id = $(this).data('id');  // Ambil ID data yang akan dihapus

          // Tampilkan SweetAlert untuk konfirmasi
          Swal.fire({
              title: 'Are you sure?',
              text: 'This artikel delete!',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Jika user mengonfirmasi, kirim permintaan AJAX untuk menghapus data
                  $.ajax({
                      url: '/artikel-delete/' + id,  // Ganti dengan URL endpoint untuk delete
                      type: 'DELETE',
                      data: {
                          _token: '{{ csrf_token() }}'  // Token CSRF Laravel untuk melindungi dari CSRF
                      },
                      success: function(result) {
                          // Tampilkan SweetAlert sukses setelah penghapusan
                          Swal.fire('Deleted!', 'The item has been deleted.', 'success');
                          
                          // Reload DataTable untuk memperbarui tampilan setelah penghapusan
                          $('#table-artikel').DataTable().ajax.reload();
                      },
                      error: function(xhr, status, error) {
                          // Tampilkan SweetAlert error jika terjadi masalah
                          Swal.fire('Error!', 'There was an issue deleting the item.', 'error');
                      }
                  });
              }
          });
      });
  });
</script>
@endsection