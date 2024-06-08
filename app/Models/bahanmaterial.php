<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahanmaterial extends Model
{
    use HasFactory;
    protected $table = 'bahan_material';
    protected $fillable = [
        'kategori',
        'jumlah',
        'harga',
    ];
    public $timestamps = false;
}
