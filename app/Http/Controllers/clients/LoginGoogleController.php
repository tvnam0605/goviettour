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

    private $user;
    public function __construct(User $user)
    {
        $this->user = new Login();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
                    'fullName' => $user->name,
                    'username' => 'user-google',
                    'password' => md5('12345678'),
                    'email' => $user->email,
                    'isActive' => 'y'
                ];
                $newUser = $this->user->registerAccount($data_google);
               // Kiểm tra xem $newUser có hợp lệ không
                if ($newUser instanceof User && isset($newUser->username)) {
                    // Lưu thông tin người dùng mới vào session
                    session()->put('username', $newUser->username);
                    return redirect()->intended('/');
                } else {
                    // Nếu có lỗi khi đăng ký người dùng mới, xử lý lỗi
                    return redirect()->back()->with('error', 'Có lỗi xảy ra trong quá trình đăng ký người dùng mới');
                }
                return redirect()->intended('/login');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
