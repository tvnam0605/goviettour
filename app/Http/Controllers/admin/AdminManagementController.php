<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    //

    public function index(){
        $title = 'Quản lý Admin';


        return view('admin.profile-admin', compact('title'));
    }
}
