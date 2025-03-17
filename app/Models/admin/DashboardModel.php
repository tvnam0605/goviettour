<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DashboardModel extends Model
{
    //
    use HasFactory;
    public function getAllUsers()
    {
        return DB::table($this->table)->get();
        
    }
}
