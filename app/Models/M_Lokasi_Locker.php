<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Lokasi_Locker extends Model
{
    protected $table = 't_lokasi_loker'; //nama table yang kita buat lewat migration adalah todo
    protected $primaryKey = 'id_lokasi_loker';
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
