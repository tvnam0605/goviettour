<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    protected $table = 'tlb_users';

    public function getUserId($username){
        return DB::table($this->table)
        ->select('userId')
        ->where('username',$username)->value('userId');
    }
    public function getUser($id){
        $user = DB::table($this->table)
        ->where('userId',$id)->first();
        return $user;
    }

    public function updateUser($id, $dataUpdate){
        $update = DB::table($this->table)
        ->where('userId',$id)
        ->update($dataUpdate);

        return $dataUpdate;
    }
}
