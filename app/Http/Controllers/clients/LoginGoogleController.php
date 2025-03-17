<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Login;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginGoogleController extends Controller
{

    protected $user;
    public function __construct()
    {
        $this->user = new Login();
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = $this->user->checkUserExistGoogle($user->id); // Kiểm tra user đã tồn tại chưa

            if ($finduser) {
                $dbUser = $this->user->getUserByGoogleId($finduser->google_id);

                // Lưu session với avatar từ database
                session()->put('username', $dbUser->username);
                session()->put('avatar', $dbUser->avatar);

                return redirect()->intended('/');
            } else {
                $data_google = [
                    'google_id' => $user->id,
                    'fullName' => $user->name,
                    'username' => 'user-google',
                    'password' => md5('12345678'),
                    'email' => $user->email,
                    'isActive' => 'y'
                ];
                $newUser = $this->user->registerAccount($data_google);

                if ($newUser) {
                    session()->put('username', $newUser->username);
                    session()->put('avatar', $newUser->avatar);
                    return redirect()->intended('/');
                } else {
                    return redirect()->back()->with('error', 'Có lỗi xảy ra khi đăng ký người dùng mới');
                }
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
