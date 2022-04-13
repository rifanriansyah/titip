<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Rekening extends Model
{
    protected $table = 't_rekening'; //nama table yang kita buat lewat migration adalah todo
    protected $primaryKey = 'id_rek';
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
