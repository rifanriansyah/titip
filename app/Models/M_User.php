<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_User extends Model
{
    protected $table = 'user'; //nama table yang kita buat lewat migration adalah todo
    protected $primaryKey = 'Id';
    const CREATED_AT = null;
    const UPDATED_AT = null;
}
