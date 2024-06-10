<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahanmaterial extends Model
{
    use HasFactory;
    protected $table = 'bahanmaterial';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Material', 'Kategori', 'Harga','Jumlah'];
}
