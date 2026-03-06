<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Donation;
use Illuminate\Support\Facades\File;

class IndividualController extends Controller
{
    //Routing of the Amish Page
    public function amish()
    {
        return view('amish');
    }

    //Routing of the contact us page
    public function contact()
    {
        return view('contact');
    }

    //Routing of donation page
    public function donate()
    {
        return view('donation');
    }

    //Store contact data
    public function store_contact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success_contact','आपका संदेश सफलतापूर्वक भेज दिया गया है');
    }

    //Store donation data
    public function store_Donation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'district' => 'required',
            'block' => 'required',
            'mobile' => 'required',
            'amount' => 'required',
            'screenshot' => 'required|image'
        ]);

        $imageName = time().'.'.$request->screenshot->extension();

        $request->screenshot->move(public_path('donation_screenshot'), $imageName);

        Donation::create([
            'name' => $request->name,
            'district' => $request->district,
            'block' => $request->block,
            'mobile' => $request->mobile,
            'amount' => $request->amount,
            'screenshot' => $imageName
        ]);

        return back()->with('success_donation','Donation Successfully Submitted');
    }

    //Donation Dashboard
    public function dashboard()
    {
        $donate = Donation::latest()->get();

        return view('admin.donation_dashboard', compact('donate'));
    }

    //Delete Donation
    public function delete_donation($id)
    {
        $donation = Donation::findOrFail($id);

        $imagePath = public_path('donation_screenshot/'.$donation->screenshot);

        if(File::exists($imagePath)){
            File::delete($imagePath);
        }

        $donation->delete();

        return back()->with('success_donation_delete','Donation Deleted Successfully');
    }
}