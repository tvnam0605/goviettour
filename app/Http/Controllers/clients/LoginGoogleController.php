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
            $finduser = $this->user->checkUserExistGoogle($user->id); //Kiểm tra xem thử có id người dùng với email này chưa
            // dd($finduser);
            if ($finduser) {
                session()->put('username', $finduser->username);
                return redirect()->intended('/');
            } else {
                $data_google = [
                    'google_id' => $user->id,
                    'avatar' => $user->avatar,
                    'fullName' => $user->name,
                    'username' => 'user-google',
                    'password' => md5('12345678'),
                    'email' => $user->email,
                    'isActive' => 'y'
                ];
                $newUser = $this->user->registerAccount($data_google);
                dd($newUser);

                // Kiểm tra xem $newUser có hợp lệ không
                if ($newUser && isset($newUser->username)) {
                    // Lưu thông tin người dùng mới vào session
                    session()->put('username', $newUser->username);
                    return redirect()->intended('/');
                } else {
                    // Nếu có lỗi khi đăng ký người dùng mới, xử lý lỗi
                    return redirect()->back()->with('error', 'Có lỗi xảy ra trong quá trình đăng ký người dùng mới');
                }
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
