<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(){
        $title = 'Tìm Kiếm';

        return view('clients.search',compact('title'));
    }
}
