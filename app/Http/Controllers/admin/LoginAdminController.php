<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\LoginModel;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    //
    private $login;
    
    public function __construct()
    {
        $this->login = new LoginModel();
    }

    public function index()  
    {
        $title = 'Đăng nhập';
        return view('admin.login', compact('title'));
    }
    public function loginAdmin(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);

        $login = $this->login->login($username, $password);

        if ($login !== null) {
            $request->session()->put('admin', $username);
            return redirect()->route('admin.dashboard')->with('success', 'Đăng nhập thành công!');
        } else {
            return redirect()->route('admin.login')->with('error', 'Sai thông tin đăng nhập!');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect()->route('admin.login') ->with('success',"Đăng xuất thành công!");
    }

}
