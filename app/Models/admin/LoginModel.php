<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as FacadesDB;

class LoginModel extends Model
{
    //
    use HasFactory;
    protected $table = 'tbl_admin';

    public function login($username, $pass)
    {
        return FacadesDB::table($this->table)
        ->where('username', $username)
        ->where('password', $pass)
        ->first();
    }
}
