<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Pemesanan extends Model
{
    protected $table = 't_pemesanan'; //nama table yang kita buat lewat migration adalah todo
    protected $primaryKey = 'id_pemesanan';
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
