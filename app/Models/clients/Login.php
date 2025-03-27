<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    use HasFactory;

    protected $table = 'tbl_users';



    //Đăng ký người dùng mới
    public function registerAccount($data)
    {
        $userId = DB::table($this->table)->insertGetId($data);

        if ($userId) {
            return DB::table($this->table)->where('userId', $userId)->first(); // Lấy user mới tạo
        }

        return null;
    }

    //Kiểm tra username or email người dùng đã tồn tại hay chưa return true false
    public function checkUserExist($username, $email)
    {
        $check = DB::table($this->table)
            ->where('username', $username)
            ->orWhere('email', $email)
            ->exists();

        return $check;
    }

    // Kiểm tra người dùng tồn tại theo token kích hoạt
    public function getUserByToken($token)
    {
        return DB::table($this->table)->where('activation_token', $token)->first();
    }

    // Cập nhật thông tin kích hoạt tài khoản
    public function activateUserAccount($token)
    {
        return DB::table($this->table)
            ->where('activation_token', $token)
            ->update(['activation_token' => null, 'isActive' => 'y']);
    }

    public function login($account)
    {
        $getUser = DB::table($this->table)
            ->where('username', $account['username'])
            ->where('password', $account['password'])
            ->first();

        return $getUser;
    }
    // Kiểm tra người dùng tồn tại theo email
    public function checkUserExistGoogle($google_id)
    {
        $check = DB::table($this->table)
            ->where('google_id', $google_id)->first();
        return $check;
    }
    public function getUserById($id)
    {
        return DB::table($this->table)->where('userId', $id)->first();
    }
    public function getUserByGoogleId($googleId)
{
    return DB::table('tbl_users')->where('google_id', $googleId)->first();
}

}
