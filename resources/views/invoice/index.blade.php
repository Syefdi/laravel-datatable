<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Data Invoice</h3>
            <a href="{{ route('invoices.create') }}" class="btn btn-primary">Tambah Invoice</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Invoice</th>
                        <th>Nama Pelanggan</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $key => $invoice)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $invoice->nomor_invoice }}</td>
                            <td>{{ $invoice->nama_pelanggan }}</td>
                            <td>Rp {{ number_format($invoice->total, 0, ',', '.') }}</td>
                            <td>{{ date('d/m/Y', strtotime($invoice->tanggal)) }}</td>
                            <td>
                                @if($invoice->status == 'Lunas')
                                    <span class="badge bg-success">{{ $invoice->status }}</span>
                                @else
                                    <span class="badge bg-danger">{{ $invoice->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>