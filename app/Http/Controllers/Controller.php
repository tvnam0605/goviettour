<?php

namespace App\Http\Controllers;

use App\Models\clients\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function getUserId()
    {
        if(!session()->has('userId')) {
            $username = session()->get('username');
            if($username) {
                $userId = $this->user->getUserId($username);
                session()->put('userId',$userId);
            }
        }
    }
}
