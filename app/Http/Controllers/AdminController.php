<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Notice_Board;
use App\Models\Slider;
use App\Models\LatestEvent;


class AdminController extends Controller
{
    //This is the routing of the admin login page
    public function adminLogin()
    {
        return view('admin.adminlogin');
    }

    
}
