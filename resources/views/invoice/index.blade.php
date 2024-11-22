
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Data Invoice</h3>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
