<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticsController extends Controller
{

    //This is the routing of the assembly page

    public function assembly()
    {
        return view('politics.assembly');
    }


    //this is the routing of the 
    public function parliament()
    {
        return view('politics.parliament');
    }
}
