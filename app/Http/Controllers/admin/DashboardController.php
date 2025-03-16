<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DashboardModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    private $dashboard;

    public function __construct()
    {
        $this->dashboard = new DashboardModel();
    }
    //
    public function index(){
        $title = 'Dashboard';
        return view('admin.dashboard', compact('title'));
    }
}
