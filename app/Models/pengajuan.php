<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;
    protected $table='pengajuan';
    protected $fillable=['nama','bank', 'faskes', 'rekening', 'nominal'];
}
