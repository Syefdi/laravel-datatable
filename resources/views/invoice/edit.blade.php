<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Edit Invoice</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('invoices.update', $invoice->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nomor Invoice</label>
                    <input type="text" name="nomor_invoice" class="form-control" value="{{ $invoice->nomor_invoice }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" value="{{ $invoice->nama_pelanggan }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Total</label>
                    <input type="number" name="total" class="form-control" value="{{ $invoice->total }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $invoice->tanggal }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Lunas" {{ $invoice->status == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                        <option value="Belum Lunas" {{ $invoice->status == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
