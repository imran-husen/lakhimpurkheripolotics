<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demand; // This is controller of the demand
class ManagementController extends Controller
{
    //This is the controller to controller the all managemnts pages

    //routing for the organisation page
    public function org()
    {
        return view('mangement.org');
    }

    //routing for the organisation page
    public function amish()
    {
        return view('mangement.amish');
    }

    //routing for the organisation page
    public function demand()
    {
        return view('mangement.demand');
    }

    //routing for the organisation page
    public function issue()
    {
        return view('mangement.issue');
    }

    //routing for the organisation page
    public function party()
    {
        return view('mangement.party');
    }

    //This is the routing of the agenda page
    public function agenda()
    {
       return view('mangement.agenda');
    }

    //This is the routing to saved the demand in the database
     public function demand_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'title' => 'required|string|max:255',
            'description' => 'required'
        ]);

        Demand::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('demand_success', 'मांग सफलतापूर्वक दर्ज हो गई।');
    }

}
