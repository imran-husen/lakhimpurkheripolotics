<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Notice_Board; //This is the Notice_Board Models 
use App\Models\Slider; //This is model to upload slider
use App\Models\LatestEvent; //this is the code for compacting of the latest uploded image 
use App\Models\Attraction; //models of the attraction view
use App\Models\YoutubeVideo; // This is uploding videos
use App\Models\FamousPerson; //This is the model of Fomus Person
use App\Models\Demand; // This is controller of the demand
use App\Models\Feedback; //Uploading the feedback
use App\Models\JoinCampaign; //This is teh model to the join campeign
use App\Models\NewsCutting; //This is the models of the upload news
use App\Models\ImportantLink; //This is the nodels of the important link
use App\MOdels\Contact; // Controller models
use App\Models\Donation; //This is the model of the donation


class AdminAuthController extends Controller
{
    // Show login page
    public function loginPage()
    {
        return view('admin.adminlogin');
    }

    // Login logic
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // SELF CREATED ADMIN CREDENTIALS
        $adminEmail = "admin@gmail.com";
        $adminPassword = "123456"; // you can change

        if (
            $request->email === $adminEmail &&
            $request->password === $adminPassword
        ) {
            session([
                'admin_logged_in' => true,
                'admin_email' => $request->email
            ]);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid login credentials');
    }

      // Dashboard
    public function dashboard()
    {
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('home');
        }
                // Fetch all notice board data
                $notices = Notice_Board::latest()->get();
                //Fetched the all Data of slider image
                $slider = Slider::latest()->get();
                // fetched the all Data of Latest events
                $latest = LatestEvent::latest()->get();
                //thsi is the code to attraction of kheri
                $attractions = Attraction::latest()->get();
                //This is the code for get the video 
                $video = YoutubeVideo::latest()->get();
                //This is the way to fetch the data from database
                $famous = FamousPerson::latest()->get();
                //This is the fetching data of the demand issue
                $issue = Demand::latest()->get();
                //this is the fetched data from the backend
                $feedback = Feedback::latest()->get();
                //this is the fetched data from the backend
                $members = JoinCampaign::latest()->get();
                //this is the fetched data from the backend
                $news = NewsCutting::latest()->get();
                //This is the fetched of the link
                $links = ImportantLink::latest()->get();
                //Fetching the contact data
                $contacts = Contact::latest()->get(); 
                //fetching the data of the donation
                $donate = Donation::latest()->get();
                return view('admin.dashboard', compact('notices', 
                                                       'slider',
                                                       'latest',
                                                        'attractions',
                                                        'video',
                                                        'famous',
                                                        'issue',
                                                        'feedback',
                                                        'members',
                                                        'news',
                                                        'links',
                                                        'contacts',
                                                        'donate'));
    }

    // Logout → ALWAYS GO TO HOME PAGE
    public function logout()
    {
        session()->forget('admin_logged_in');
        session()->forget('admin_email');

        return redirect('/'); // 👈 Home page (not admin login)
    }

    
}
