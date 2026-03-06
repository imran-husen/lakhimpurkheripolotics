<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; //for AdminController
use App\Http\Controllers\AdminAuthController; // for Admin Auth Controller
use App\Http\Controllers\HomeController; // This is home controller
use App\Http\Controllers\AboutController; //About Controller
use App\Http\Controllers\ManagementController; // Managements controller
use App\Http\Controllers\PoliticsController; //This is Politics Controller
use App\Http\Controllers\MediaController; //This is thr media Controller
use App\Http\Controllers\IndividualController; //Thisnis the individela controler

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/submit-feedback', [HomeController::class, 'store_feedback'])->name('feedback.store');
Route::get('/join-lakimpur-kheri-politocs', [HomeController::class, 'join'])->name('join');
//this is the routing to saved the data
Route::post('/join-campaign', [HomeController::class, 'joinCampiegn'])->name('join.campaign.store');



//Routing using Controller
Route::get('/admin-login', [AdminController::class, 'adminLogin'])->name('admin.login'); //for admin login


Route::get('/admin-login', [AdminAuthController::class, 'loginPage'])->name('admin.login');
Route::post('/admin-login', [AdminAuthController::class, 'login']);  

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin-dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin-logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});


// This is the routes to store Notice_Board
Route::post('/admin/notice/store', [HomeController::class, 'storeNotice'])->name('notice.store');
Route::delete('/admin/notice/delete/{id}', [HomeController::class, 'destroy_notice'])->name('notice.delete');

// This is the routing the upload slider image
Route::post('/store-slider', [HomeController::class, 'store_slider']);
Route::delete('/delete-slider/{id}', [HomeController::class, 'destroy_slider']);

//this is the routes to uploded the latest events
Route::post('/latest-event/store', [HomeController::class, 'store_latestEvents'])->name('latest.event.store');
Route::delete('/latest-event/delete/{id}',  [HomeController::class, 'destroy_latest_image'])->name('latest.event.delete');

//This is routing of the upload the you tube videos
Route::post('/admin/youtube-videos/store', [HomeController::class, 'upload_youtube_video'])->name('youtube.store');
Route::delete('/videos/{video}', [HomeController::class, 'destroy_video'])->name('videos.destroy');

//Controllere to delete the feedback
Route::delete('/feedback/{id}', [HomeController::class, 'destroy_feedback'])->name('feedback.delete');


//This is the routing to stored the attarction view kheri
Route::post('/attraction/store', [HomeController::class, 'store_attraction'])->name('attraction.store');
Route::delete('/attraction/delete/{id}', [HomeController::class, 'destroy_attraction'])->name('attraction.delete');

//-----------------------This is the all routing of about Controler------------------//
Route::get('/about/history-of-lakhipur-Kheri', [AboutController::class, 'history'])->name('about.history');
Route::get('/about/politics-of-lakhipur-Kheri', [AboutController::class, 'politics'])->name('about.politics');
Route::get('/about/admistrative-of-lakhipur-Kheri', [AboutController::class, 'admistrative'])->name('about.admistrative');
Route::get('/about/famous-of-lakhipur-Kheri', [AboutController::class, 'famous'])->name('about.famous');
Route::get('/about/place-of-lakhipur-Kheri', [AboutController::class, 'place'])->name('about.place');

Route::post('/famous-personality', [AboutController::class, 'famous_personality'])->name('famous.personality');
Route::delete('/delete-person/{id}', [AboutController::class, 'delete_person_famous'])->name('delete.person');



//-----------------------This is the all routing of Managements Controler------------------//
Route::get('/about/Organisation-of-lakhipur-Kheri', [ManagementController::class, 'org'])->name('mangement.org');
Route::get('/about/K.M.-Amish-of-lakhipur-Kheri', [ManagementController::class, 'amish'])->name('mangement.amish');
Route::get('/about/political-party-of-lakhipur-Kheri', [ManagementController::class, 'party'])->name('mangement.party');
Route::get('/about/Issue-of-lakhipur-Kheri', [ManagementController::class, 'issue'])->name('mangement.issue');
Route::get('/about/Demand-of-lakhipur-Kheri', [ManagementController::class, 'demand'])->name('mangement.demand');
Route::get('/about/Agenda-of-lakhipur-Kheri', [ManagementController::class, 'agenda'])->name('mangement.agenda');
//This is way to saved the demand of the individiuals
Route::post('/demand-store', [ManagementController::class, 'demand_store'])->name('demand.store');


//-------------------This is the routing of the politics Page----------------------------//
Route::get('/assembly', [PoliticsController::class, 'assembly'])->name('politics.assembly');
Route::get('/parliament', [PoliticsController::class, 'parliament'])->name('politics.parliament');

//-------------------This is the routing of the politics Page----------------------------//
Route::get('/media/news', [MediaController::class, 'news'])->name('media.news');
Route::get('/media/videos', [MediaController::class, 'video'])->name('media.video');
Route::get('/media/gallery', [MediaController::class, 'gallery'])->name('media.gallery');
Route::get('/media/link', [MediaController::class, 'link'])->name('media.link');

//To uploding the paper news
Route::post('/upload-news-cutting',[MediaController::class,'upload_news'])->name('news.cutting.store');
Route::delete('/delete-news/{id}', [MediaController::class, 'delete_news'])->name('news.delete');

//This is ways to upload the news
Route::post('/important-link-store',[MediaController::class,'upload_link'])->name('important.link.store');
Route::delete('/important-link-delete/{id}',[MediaController::class,'delete_link'])->name('important.link.delete');


//------------------This is the individual page controler router------------------------------//
Route::get('/about/K.M./Amish', [IndividualController::class, 'amish'])->name('amish');
Route::get('/contact', [IndividualController::class, 'contact'])->name('contact');
Route::get('/donate', [IndividualController::class, 'donate'])->name('donate');
Route::post('/contact-save',[IndividualController::class,'store_contact'])->name('contact.save');
Route::post('/donation-store',[IndividualController::class,'store_Donation'])->name('donation.store');
Route::get('/donation-delete/{id}',[IndividualController::class,'delete_donation'])->name('donation.delete');
