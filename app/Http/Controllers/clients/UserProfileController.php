<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    private $user;

    public function __construct(){
        $this->user = new User();
        
    }
    protected function getUserId(){
        if(!session()->has('userId')){
            $username = session()->get('username');
            if($username){
                $userId = $this->user->getUserId($username);
                session()->put('userId', $userId);//lưu userId vào sesion để dừng lại
            }
        }
        return session()->get('userId');
    }
    public function index()
    {
        $title = 'Thông tin cá nhân';
        $userId = $this->getUserId();
        $user = $this->user->getUser($userId); 
        //dd($userId);
        return view('clients.user-profile', compact('title', 'user'));
    }

    public function update(Request $req){
        $fullName = $req->fullName; 
        $address = $req->address;
        $email = $req->email;
        $phone = $req->phone;
        
        $dataUpdate = [
            'username' => $fullName,
            'address' => $address,
            'email' => $email,
            'phoneNumber' => $phone
        ];

        $userId = $this->getUserId();

        $update = $this->user->updateUser($userId, $dataUpdate); 
        if(!$update){
            return response()->json([
                'faild'=>false
            ]);
        
        }
        return response()->json([
            'success' => true,
        ]);
    }
    public function changePassword(Request $req)
    {
        $userId = $this->getUserId();
        $user = $this->user->getUser($userId);

        if (md5($req->oldPass) === $user->password) {
            $update = $this->user->updateUser($userId, ['password' => md5($req->newPass)]);
            if (!$update) {
                return response()->json(['error' => true, 'message' => 'Mật khẩu mới trùng với mật khẩu cũ!']);
            } else {
                return response()->json(['success' => true, 'message' => 'Đổi mật khẩu thành công!']);

            }
        } else {
            return response()->json(['error' => true, 'message' => 'Mật khẩu cũ không chính xác.'], 500);
        }
    }
}
