<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatestEvent; //This is models of the latest events 
use App\Models\YoutubeVideo; // This is uploding videos
use App\Models\NewsCutting; //This is the models of the upload news
use App\Models\ImportantLink; //This is the nodels of the important link

class MediaController extends Controller
{
    //This is the all page of the media

    //This is teh routing of the news
    public function news()
    {
        $news = NewsCutting::latest()->get();
        return view('media.news', compact('news'));
    }

    //This is teh routing of the gallery
    public function gallery()
    {
        //I will fetched the latest events database
         $latestEvents = LatestEvent::latest()->get();
        return view('media.gallery', compact('latestEvents'));
    }

    //This is teh routing of the video gallery
    public function video()
    {
        //This is the code for get the video 
        $video = YoutubeVideo::latest()->get();
        return view('media.video', compact('video'));
    }

    //This is teh routing of the link
    public function link()
    {
        //this is fetching of the links data
        $links = ImportantLink::latest()->get();
        return view('media.link', compact('links'));
    }

    //This is the ways to upload news here
     public function upload_news(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('news_cuttings'), $imageName);
        }

        NewsCutting::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName
        ]);

        return back()->with('upload_news_success','News Cutting Uploaded Successfully');
    }

    // This is code to delete the uploded image
      public function delete_news($id)
            {
                $news = NewsCutting::findOrFail($id);

                // Image full path
                $imagePath = public_path('news_cuttings/' . $news->image);

                // Check image exist
                if ($news->image && file_exists($imagePath)) {
                    unlink($imagePath);
                }

                // Delete database record
                $news->delete();

                return back()->with('delete_news_success', 'News deleted successfully.');
            }

    //This is the code to upload teh routing
     public function upload_link(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required|url',
            'description' => 'required'
        ]);

        ImportantLink::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description
        ]);

        return back()->with('success_link','Link Added Successfully');
    }

    //This is the code to delete the the link
    public function delete_link($id)
        {
            $link = ImportantLink::findOrFail($id);

            $link->delete();

            return back()->with('success_link_delete','Link Deleted Successfully');
        }
}