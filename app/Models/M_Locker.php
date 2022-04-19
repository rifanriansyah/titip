<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Locker extends Model
{
    protected $table = 't_locker'; //nama table yang kita buat lewat migration adalah todo
    protected $primaryKey = 'id_locker';
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
