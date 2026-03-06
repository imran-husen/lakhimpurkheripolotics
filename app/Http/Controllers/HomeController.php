<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice_Board; //This is the Notice_Board Models 
use App\Models\Slider; //This is models for the slider image
use App\Models\LatestEvent; //This is models of the latest events 
use App\Models\Feedback; //Uploading the feedback
use App\Models\YoutubeVideo; // This is uploding videos
use App\Models\Attraction; //models of the attraction view
use App\Models\JoinCampaign; //This is teh model to the join campeign

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all type of the data
        $latestNotice = Notice_Board::latest()->first();
        $slider = Slider::latest()->get();
        $latestEvents = LatestEvent::latest()->get();
        $feedback = Feedback::latest()->get();
        $attractions = Attraction::latest()->get();
       //This is the code for get the video 
        $video = YoutubeVideo::latest()->get();

        // Send to home page
        return view('index', compact('latestNotice', 'slider', 'latestEvents', 'feedback', 'attractions','video'));
    }

    // This is the routing the the page of the join
    public function join()
    {
        return view('join');
    }

      // This is the code of the that part where i will saved the all information about notification bar
     public function storeNotice(Request $request)
    {
        // Validation
        $request->validate([
            'message' => 'required|min:5|max:1000',
        ]);

        // Store data
        Notice_Board::create([
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'आपकी सूचना सफलतापूर्वक अपलोड कर दी गई है।');
    }

    //This is the function to destroy of the notice Board
     public function destroy_notice($id)
    {
        // Admin session check (optional but recommended)
        if (!session()->has('admin_logged_in')) {
            return redirect()->route('home');
        }

        $notice = Notice_Board::findOrFail($id);
        $notice->delete();

        return redirect()->back()->with('success', 'आपका संदेश सफलतापूर्वक डिलीट कर दिया गया है।');
    }


    // This the code for upload the image in through dashboard it will be upload the image in the public folder
    public function store_slider(Request $request)
    {
        // 1️⃣ Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // 2️⃣ Image Upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // public/slider folder me store karega
        $image->move(public_path('slider'), $imageName);

        // 3️⃣ Save Data
        Slider::create([
            'title' => $request->title,
            'image' => 'slider/' . $imageName,
        ]);

        // 4️⃣ Redirect
        return back()->with('success_slider', 'होम स्क्रीन पर चलने वाला इमेज सफलतापूर्वक अपलोड कर दिया गया है।');
    }

    public function destroy_slider($id)
        {
            $slider = Slider::findOrFail($id);

            // Delete image (short & safe)
            @unlink(public_path($slider->image));

            // Delete DB record
            $slider->delete();

            return back()->with('success', 'आपका होम पेज स्लाइडर इमेज सफलतापूर्वक जोड़ दिया गया है।');
        }

        //This is the code for the uploaded the latest events
         public function store_latestEvents(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('latest_events'), $imageName);

        LatestEvent::create([
            'title' => $request->title,
            'image' => $imageName,
        ]);

        return back()->with('event_success', 'Event has been uploaded successfully and is now live.');

    }

    // This is function to delted the letest events_image
   public function destroy_latest_image($id)
    {
        $event = LatestEvent::findOrFail($id);

        // Correct image path for public folder
        $imagePath = public_path('latest_events/' . $event->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $event->delete();

        return back()->with('event_deleted', 'Latest Event Data deleted successfully!');
    }
  // This is the function to stored the feedback 
     public function store_feedback(Request $request)
    {
         $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'mobile'  => 'required|string|max:15',
            'message' => 'required|string'
        ]);

        Feedback::create($validated);

        return back()->with('success', 'आपका फीडबैक सफलतापूर्वक सबमिट हो गया 🙏');
    }

    //This is teh operation to delete the feedback
    public function destroy_feedback($id)
        {
            $feedback = Feedback::find($id);

            if($feedback){
                $feedback->delete();
            }

            return back()->with('success_feedback','Feedback deleted successfully');
        }

    // This is code for uploding the youtube videos link for showing on the home page
    public function upload_youtube_video(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video_link' => 'required|url'
        ]);

        YoutubeVideo::create([
            'title' => $request->title,
            'video_link' => $request->video_link
        ]);

        return redirect()->back()->with('success', 'Video uploaded successfully!');
    }

    // This is teh code for the delete of the video link
    public function destroy_video($id)
        {
            // Find the video by ID
            $video = YoutubeVideo::findOrFail($id);

            // Delete the video
            $video->delete();

            // Redirect back with success message
              return redirect()->back()->with('video_deleted', 'Video deleted successfully.');
        }

    //this is code to stored the attarction view of the kheri
    public function store_attraction(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string'
        ]);

        // Create folder if not exists
        $destinationPath = public_path('attraction_image');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // Image Upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($destinationPath, $imageName);

        // Save Data
        Attraction::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return back()->with('attraction_success', 'Attraction Uploaded Successfully!');
    } 
    // Delete Data
    public function destroy_attraction($id)
    {
        $attraction = Attraction::findOrFail($id);

        // Delete Image
        $imagePath = public_path('attraction_image/'.$attraction->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $attraction->delete();

        return back()->with('attraction_delete', 'Attraction Deleted Successfully!');
    }

      // Save Form Data
    public function joinCampiegn(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
        ]);

        JoinCampaign::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'district' => $request->district,
            'block' => $request->block,
            'village' => $request->village,
            'reason' => $request->reason,
        ]);

       return back()->with('join_success','आप सफलतापूर्वक हमारे अभियान से जुड़ गए हैं। धन्यवाद!');
    }

}
