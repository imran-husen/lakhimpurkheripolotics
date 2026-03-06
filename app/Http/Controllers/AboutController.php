<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamousPerson;

class AboutController extends Controller
{
    //This is the routing of the history of the lakhimpur kheri
    public function history()
    {
        return view('about.history');
    }

    //This id the roiutings of the politics of kheri page
    public function admistrative()
    {
        return view('about.admistrative');
    }

    //This is the routing of the admistrative page
    public function famous()
    {
        //thsi is the code to attraction of kheri
        $persons = FamousPerson::latest()->get();
        return view('about.famous', compact('persons'));
    }

    //This is the routing of the admistrative page
    public function place()
    {
        return view('about.place');
    }

    //This is the routing of the admistrative page
    public function politics()
    {
        return view('about.politics');
    }

    //This is the routing saved the data of the famous persanality

            public function famous_personality(Request $request)
            {
                $request->validate([
                    'full_name' => 'required',
                    'village' => 'required',
                    'political_background' => 'required',
                    'designation' => 'required',
                    'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                ]);

                // Image Upload
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('Famou_person'), $imageName);

                // Save Data
                FamousPerson::create([
                    'full_name' => $request->full_name,
                    'village' => $request->village,
                    'political_background' => $request->political_background,
                    'designation' => $request->designation,
                    'image' => $imageName,
                ]);

                return redirect()->back()->with('saved_person_Sucess', 'Your data is saved successfully!');
            }

        // DELETE FUNCTION
        public function delete_person_famous($id)
        {
            $person = FamousPerson::findOrFail($id);

            // Delete image from folder
            $imagePath = public_path('Famou_person/'.$person->image);
            if(file_exists($imagePath)){
                unlink($imagePath);
            }

            // Delete record from database
            $person->delete();

            return redirect()->back()->with('delete_success', 'Record deleted successfully!');
        }
        

}
