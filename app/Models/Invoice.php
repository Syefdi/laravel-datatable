<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'nomor_invoice',
        'nama_pelanggan',
        'total',
        'tanggal',
        'status'
    ];
}