<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::orderBy('created_at', 'desc')->get();        
        return view('invoice.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_invoice' => 'required|unique:invoices',
            'nama_pelanggan' => 'required',
            'total' => 'required|numeric',
            'tanggal' => 'required|date',
            'status' => 'required'
        ]);

        Invoice::create([
            'nomor_invoice' => $request->nomor_invoice,
            'nama_pelanggan' => $request->nama_pelanggan,
            'total' => $request->total,
            'tanggal' => $request->tanggal,
            'status' => $request->status
        ]);

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice berhasil dibuat.');
    }

    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoice.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_invoice' => 'required',
            'nama_pelanggan' => 'required',
            'total' => 'required|numeric',
            'tanggal' => 'required|date',
            'status' => 'required'
        ]);

        $invoices = Invoice::findOrFail($id);
        $invoices->update([
            'nomor_invoice' => $request->nomor_invoice,
            'nama_pelanggan' => $request->nama_pelanggan,
            'total' => $request->total,
            'tanggal' => $request->tanggal,
            'status' => $request->status
        ]);

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice berhasil diupdate.');
    }

    public function destroy($id)
    {
        $invoices = Invoice::findOrFail($id);
        $invoices->delete();

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice berhasil dihapus.');
    }
}