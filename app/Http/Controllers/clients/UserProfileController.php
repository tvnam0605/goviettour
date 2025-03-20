<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    public function index()
    {
        $title = 'Thông tin cá nhân';
        $userId = $this->getUserId();
        $user = $this->user->getUser($userId);
        //dd($userId);
        return view('clients.user-profile', compact('title', 'user'));
    }

    public function update(Request $req)
    {
        $fullName = $req->fullName;
        $address = $req->address;
        $email = $req->email;
        $phone = $req->phone;

        

        $dataUpdate = [
            'username' => $fullName,
            'address' => $address,
            'email' => $email,
            'phoneNumber' => $phone,
            
        ];

        $userId = $this->getUserId();

        $update = $this->user->updateUser($userId, $dataUpdate);
        if (!$update) {
            return response()->json(['faild' => true,'message' => 'Bạn chưa thay đổi thông tin nào , vui lòng thử lại!'
            ]);
        }
        return response()->json(['success' => true,'message' => 'Cập nhật thông tin thành công!'
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
    public function changeAvatar(Request $req)
    {
        $userId = $this->getUserId();
        $req->validate([
            'avatar' => 'required|image|mimes:jpg,png,gif|max:5120',
        ]);
        $avatar = $req->file('avatar');

        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        
        $user =$this->user->getUser($userId);
        if($user->avatar){
            $oldAvatarPath = public_path('clients/assets/images/user-profile/' .$user->avatar);
            //Kiểm tra tệp cũ có tồn tại và xóa nếu có
            if(file_exists($oldAvatarPath)){
                unlink($oldAvatarPath);
            }
        }

        //Di chuyển anh vào thư mục
        $avatar->move(public_path('clients/assets/images/user-profile'), $filename);
        
        $update = $this->user->updateUser($userId, ['avatar' => $filename]);

        if (!$update) {
            return response()->json(['fail' => true, 'message' => 'Có lỗi khi cập nhật ảnh!']);
        }
        return response()->json(['success' => true, 'message' => 'Cập nhật ảnh thành công!']);
    }
}
