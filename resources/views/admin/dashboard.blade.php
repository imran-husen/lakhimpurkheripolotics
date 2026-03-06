<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- This is the code of the favicons -->
       <link rel="icon" type="image/jpeg" href="{{ asset('Static_image/mainslogo.jpg') }}">


       
       <!-- This is the add of the bootstrap -->
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    
    
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}" />
</head>
<body>
<body>
<nav class="navbar bg-white border-bottom px-4 py-2  sticky-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- Dashboard Title -->
        <span class="fs-5 fw-semibold text-dark">
            Developed by Imran Husain Team
        </span>

        <!-- Logout Button -->
        <a href="{{ route('admin.logout') }}"
           class="btn btn-outline-danger btn-sm px-3">
            Logout
        </a>

    </div>
</nav>


<!-- Here i am going to write the main code of the dashboard -->
 <div class="d-flex ">
<!-- Sidebar -->
<aside class="sidebar p-3 position-fixed vh-100">
    <h6 class="text-white mb-4 fw-bold text-uppercase">Admin Panel</h6>

    <!-- DASHBOARD -->
    <a href="#dashboard" class="active">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
    </a>

    <!-- HOME DROPDOWN -->
    <a class="sidebar-link" data-bs-toggle="collapse" href="#homeMenu" role="button">
        <i class="bi bi-house-door-fill"></i>
        <span>Home</span>
        <i class="bi bi-chevron-down arrow"></i>
    </a>

    <div class="collapse submenu" id="homeMenu">
        <a href="#Notice_changing">
            <i class="bi bi-megaphone-fill"></i>
            <span>Notice Board</span>
        </a>
        <a href="#slider">
            <i class="bi bi-images"></i>
            <span>Slider Images</span>
        </a>
        <a href="#Attraction-view">
            <i class="bi bi-images"></i>
            <span>Attraction View</span>
        </a>
        <a href="#latest_events">
            <i class="bi bi-calendar-event"></i>
            <span>Latest Events</span>
        </a>
        <a href="#Videos_Link">
            <i class="bi bi-youtube"></i>
            <span>You-Tube Video</span>
        </a>
    </div>

    <!-- ABHIYAN DROPDOWN -->
    <a class="sidebar-link" data-bs-toggle="collapse" href="#abhiyanMenu" role="button">
        <i class="bi bi-flag-fill"></i>
        <span>About us Page</span>
        <i class="bi bi-chevron-down arrow"></i>
    </a>

    <div class="collapse submenu" id="abhiyanMenu">
        <a href="#Famous-Person">
            <i class="bi bi-person-star"></i>
            <span>Famous Personality</span>
        </a>
    </div>

    <!-- MEDIA DROPDOWN -->
    <a class="sidebar-link" data-bs-toggle="collapse" href="#mediaMenu" role="button">
        <i class="bi bi-collection-play-fill"></i>
        <span>Media</span>
        <i class="bi bi-chevron-down arrow"></i>
    </a>

    <div class="collapse submenu" id="mediaMenu">
        <a href="#media-news">
            <i class="bi bi-newspaper"></i>
            <span>News</span>
        </a>
        <a href="#link">
            <i class="bi bi-camera-video-fill"></i>
            <span>Social Media Link</span>
        </a>
    </div>


    <!-- OTHER LINKS -->

<a href="#online-complaint">
    <i class="bi bi-clipboard-check"></i>
    <span>Online Demand</span>
</a>

<a href="#contact">
    <i class="bi bi-telephone-fill"></i>
    <span>Contact Details</span>
</a>

<a href="#feedback">
    <i class="bi bi-chat-dots-fill"></i>
    <span>Feedback</span>
</a>

<a href="#donate">
    <i class="bi bi-heart-fill"></i>
    <span>Donate</span>
</a>
<a href="#member">
    <i class="bi bi-people-fill"></i>
    <span>Participate Member</span>
</a>
</aside>




<!-- Content -->
<main class="content w-100">
<h5 class="mb-4 fw-bold text-center text-danger"><u>Welcome! Bhu Ayami Party Team</u></h5>


<!-- Dashboard -->
<section id="dashboard" class="ms-2">
        <div class="row g-4">
        <div class="col-md-4 "><div class="card p-3 border border-success border-2 "><small class="text-center fw-bold text-danger">Total Feedback</small> <small class="text-center">This is the number of the total individual Feedback</small><span class="badge badge-soft">Active</span></div></div>
        <div class="col-md-4 "><div class="card p-3 border border-success border-2 "><small class="text-center fw-bold text-danger">Inssue of Lakhimpurkheri</small> <small class="text-center">Issue of the lakimpurkheri that given by individuals</small><span class="badge badge-soft">Active</span></div></div>
        <div class="col-md-4 "><div class="card p-3 border border-success border-2 "><small class="text-center fw-bold text-danger">Politics Demand</small> <small class="text-center">THis is the district politics demand submit b y indivuals</small><span class="badge badge-soft">Active</span></div></div>
        <div class="col-md-4 "><div class="card p-3 border border-success border-2 "><small class="text-center fw-bold text-danger">Contact us</small> <small class="text-center">This is the total contact list</small><span class="badge badge-soft">Active</span></div></div>
        <div class="col-md-4 "><div class="card p-3 border border-success border-2 "><small class="text-center fw-bold text-danger">Blogging Post</small> <small class="text-center">This is the total blogging written by admin</small><span class="badge badge-soft">Active</span></div></div>
        <div class="col-md-4 "><div class="card p-3 border border-success border-2 "><small class="text-center fw-bold text-danger">Donantion</small> <small class="text-center">This is total donation giving by individuals</small><span class="badge badge-soft">Active</span></div></div>
        </div>

</section>
  
<!-- Other Pages -->
<h5 class="mb-4 fw-bold text-center text-succes mt-3">Action Dashboard</h5>


<!-- This is the code of the dynamic change of the notice -->


<section id="Notice_changing" class="ms-2 mt-3 border border-dark border-1 " style="border-radius:10px; ">
    <div class="card p-4">
        <div class="fw-bold text-success bi bi-megaphone-fill">
            Notice Board Changing Here
        </div>
        <small class="text-muted">
            This section are used to changed the notice board of the home page and edit the notification box where all the list of the information will be shown in the below with proper date and latest information will be shown in the notification box. 
        </small>

        <!-- Here i will create a text to and publish buttons to uplaod the notification -->

             @if(session('success'))
                 <script>
                      alert("{{ session('success') }}");
                 </script>
             @endif

             <!-- This is the alert for the destroy of the notice board -->
              @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
             @endif

            <form action="{{ route('notice.store') }}" method="POST">
                   @csrf

                <!-- Notification Message -->
                <div class="form-floating mb-4">
                <textarea 
            class="form-control" 
            name="message"
            placeholder="Write your notification here..."
            id="noticeMessage"
            style="height: 140px"
            required></textarea>
           <label for="noticeMessage">Write your Notice on Here</label>
           </div>

            <!-- Submit Button -->
           <div>
            <button type="submit" class="btn btn-success btn-sm px-3">
            🚀 Publish
            </button>
               </div>
            </form>


            <!-- Here i will see the all information data and delete the older notification -->
            <!-- Notification Item -->
                    @forelse($notices as $notice)
                <div class="alert alert-light border-start border-1 border-primary d-flex justify-content-between align-items-start mt-3">

                    <div>
                        <p class="mb-1 text-muted">
                            {{ $notice->message }}
                        </p>
                        <small class="text-secondary">
                            Posted on: {{ $notice->created_at->format('d M Y') }}
                        </small>
                    </div>

                    <!-- Delete Button -->
                    <form action="{{ route('notice.delete', $notice->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger ms-3">
                            🗑 Delete
                        </button>
                    </form>

                </div>
            @empty
                <div class="alert alert-warning mt-3">
                    No notices available.
                </div>
            @endforelse
    </div>
</section>


<!-- This is the section to upload the slider image -->
<section id="slider" class="ms-2 mt-3 border border-dark border-1 " style="border-radius:10px">
 <div class="card p-4">
    <div class="fw-bold text-primary bi bi-images">
        Slider Image Upload Section
    </div>

    <small class="text-muted">
        This section is used to upload and manage slider images for the home page. 
        Uploaded images will be displayed automatically in the homepage slider in a rotating format. 
        Please ensure that the images are clear, high quality, and relevant to the website content.
        The latest uploaded images will appear first in the slider.
    </small>

    <!-- Here i am writing the code for uploading the image and tile of teh image  -->
  <div class="row justify-content-center border border-danger border-1 m-3 py-3" style="border-radius:10px;">
    <div class="col-md-12">
        @if(session('success_slider'))
                 <script>
                      alert("{{ session('success_slider') }}");
                 </script>
             @endif
                <form class="row g-2 align-items-center"
                    action="{{ url('/store-slider') }}"
                    method="POST"
                    enctype="multipart/form-data">

                    @csrf

                    <!-- Image Title -->
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="title" placeholder="Image Title" required>
                            <label><i class="bi bi-card-text me-1"></i> Title</label>
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-md">
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>

                    <!-- Upload Button -->
                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-success w-100">
                            <i class="bi bi-cloud-arrow-up-fill me-1"></i> Upload
                        </button>
                    </div>
                </form>

    </div>
  </div>

  <!-- Here all the code for the uploded image -->
   <div class="card p-1">
       <div class="fw-bold text-primary bi bi-cloud-arrow-up-fill">
        <span>Uploaded Image</span>
    </div>

    <!-- Slider Image Row 1 -->
    <div class="row">
            @foreach($slider as $item)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm p-2 d-flex flex-row align-items-center">

                        <!-- Image Preview -->
                        <img src="{{ asset($item->image) }}"
                            alt="{{ $item->title }}"
                            class="rounded me-3"
                            style="width:60px; height:60px; object-fit:cover;">

                        <!-- Title -->
                        <div class="flex-grow-1">
                            <small class="mb-0 text-muted">{{ $item->title }}</small>
                        </div>

                        <!-- Delete Button -->
                        <form action="{{ url('/delete-slider/'.$item->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm ms-3">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>

                    </div>
                </div>
            @endforeach
     </div>
    </div>
</div>


</section>
<section id="latest_events"  class="ms-2 mt-3 border border-dark border-1 " style="border-radius:10px">
    <div class="card p-4 mt-3 ms-2">
                <div class="container mt-0">
                    <div class="card shadow-sm">
                        <div class="card-body">

                            <!-- Heading -->
                            <h4 class="mb-2">
                                <i class="bi bi-calendar-event text-primary me-2"></i>
                                Upload Latest Events
                            </h4>

                            <!-- Description -->
                            <p class="text-muted mb-4">
                                <i class="bi bi-info-circle me-1"></i>
                                Add upcoming or recently conducted events with title and image.
                            </p>
                            <!-- This is the alert system of the uploded image -->
                            @if(session('event_success'))
                             <script>
                                 alert("{{ session('event_success') }}");
                             </script>
                            <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('event_success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                            @endif
                            <form action="{{ route('latest.event.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row align-items-center g-3">

                                    <!-- Event Title -->
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-card-text me-1"></i> Event Title
                                        </label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter event title">
                                    </div>

                                    <!-- Event Image -->
                                    <div class="col-md-4">
                                        <label class="form-label fw-semibold">
                                            <i class="bi bi-image me-1"></i> Event Image
                                        </label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <!-- Upload Button -->
                                    <div class="col-md-4 d-flex align-items-end">
                                        <button type="submit" class="btn btn-primary w-100">
                                            <i class="bi bi-cloud-arrow-up me-1"></i>
                                            Upload Event
                                        </button>
                                    </div>

                                </div>
                            </form>


                        </div>
                    </div>
                </div>
        <!-- Here this is the code for the uploaded image -->
                <div class="container mt-2">

                    <!-- Heading -->
                    <h4 class="mb-2">
                        <i class="bi bi-images text-success me-2"></i>
                        Uploaded Event Images
                    </h4>

                    <!-- Description -->
                    <p class="text-muted mb-2">
                        <i class="bi bi-info-circle me-1"></i>
                        Below are the recently uploaded event images. You can remove any event if required.
                    </p>
              <!-- Cards Row -->
                    @if(session('event_deleted'))
                        <script>
                        alert("{{ session('event_deleted') }}");
                        </script>
                    <div class="alert alert-danger alert-dismissible fade show mt-3">
                        <i class="bi bi-trash-fill me-2"></i>
                        {{ session('event_deleted') }}
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                <div class="row g-4">

                    @foreach($latest as $event)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 shadow-sm text-center">

                                <!-- Centered Image -->
                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <img src="{{ asset('latest_events/'.$event->image) }}"
                                        alt="Event Image"
                                        style="width:80px; height:80px; object-fit:contain;">
                                </div>

                                <small class="card-title text-muted mt-2">
                                    {{ \Illuminate\Support\Str::limit($event->title, 35) }}
                                </small>

                                <div class="card-body">
                                    <form action="{{ route('latest.event.delete', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm w-100">
                                            <i class="bi bi-trash me-2"></i> Delete
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    </div>

                </div>


    </div>
</section>

<!-- This is section to upload the kheri view Attratction -->
@if(session('attraction_success'))
<script>
    alert("{{ session('attraction_success') }}");
</script>
@endif
 <section id="Attraction-view"><div class="card p-4 mt-3 ms-2">
    <div class="attraction_form_wrapper">
    <div class="container">
        <div class="attraction_form_box">

            <!-- Heading -->
            <div class="attraction_form_header text-center">
                <h3 class="fw-bold text-success">
                    <i class="bi bi-image-fill me-2"></i>
                    Attraction View Details Upload
                </h3>
                <p class="text-muted mt-2">
                    Use this form to upload attraction title, image, and short description 
                    to display on the Kheri Attraction section.
                </p>
            </div>

            <form action="{{ route('attraction.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row align-items-end">

        <!-- Attraction Title -->
        <div class="col-md-4 mb-3">
            <label class="form-label">Attraction Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter attraction title" required>
        </div>

        <!-- Upload Image -->
        <div class="col-md-4 mb-3">
            <label class="form-label">Upload Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>

        <!-- Description -->
        <div class="col-md-4 mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="description" class="form-control" rows="1"
            placeholder="Enter short description" required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-success">
                Upload Attraction
            </button>
        </div>

    </div>
</form>

        </div>
    </div>
</div>


<!-- Attraction View Records Section -->
 @if(session('attraction_delete'))
<script>
    alert("{{ session('attraction_delete') }}");
</script>
@endif

<div class="attraction_table_wrapper my-5">
    <div class="container">
        <div class="attraction_table_box">

            <!-- Heading -->
            <div class="attraction_table_header text-center mb-4">
                <h3 class="fw-bold text-success">
                    <i class="bi bi-table me-2"></i>
                    Attraction View Records
                </h3>
                <p class="text-muted">
                    Below is the list of uploaded attraction views. 
                    You can manage and delete any record if required.
                </p>
            </div>

            <!-- Table -->
            <div class="table-responsive">
             <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Serial No</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($attractions as $key => $attraction)
                    <tr>
                        <!-- Serial Number -->
                        <td>{{ $key + 1 }}</td>

                        <!-- Title From Database -->
                        <td>{{ $attraction->title }}</td>

                        <!-- Delete Button -->
                        <td>
                            <form action="{{ route('attraction.delete', $attraction->id) }}" 
                                method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete?')">
                                    <i class="bi bi-trash-fill"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>

        </div>
    </div>
</div>
 </div></section>

<!-- This is the section to upload the videos  -->
<section id="Videos_Link"><div class="card p-4 mt-3 ms-2">
    <div class="container-fluid py-1">
        
        <!-- Page Heading -->
        <div class="mb-4">
        <h4 class="fw-bold text-dark d-flex align-items-center gap-2">
            <i class="bi bi-youtube text-danger fs-4"></i>
            YouTube Video Upload
        </h4>

        <p class="text-muted mb-0 d-flex align-items-center gap-2">
            <i class="bi bi-cloud-arrow-up text-primary"></i>
            Add and manage YouTube videos easily for your website or dashboard display.
        </p>
    </div>

    <!-- Card -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <!-- Form -->
            @if(session('success'))
                  <script>
                        alert("{{ session('success') }}");
                  </script>
            @endif
            <form method="POST" action="{{ route('youtube.store') }}">
                @csrf

                <div class="row align-items-end g-1">

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Video Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter video title" required>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold">YouTube Video Link</label>
                        <input type="url" name="video_link" class="form-control" placeholder="https://youtube.com/watch?v=..." required>
                    </div>

                    <div class="col-md-4 d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">
                            Upload Video
                        </button>
                        <button type="reset" class="btn btn-outline-secondary px-4">
                            Clear
                        </button>
                    </div>

                </div>
            </form>


        </div>
    </div>

</div>

<!-- This is the all data of the you tube videos link  -->
 <!-- Video List Heading -->
<div class="d-flex justify-content-between align-items-center mb-3 mt-1">
    <h5 class="fw-bold mb-0 d-flex align-items-center gap-2">
        <i class="bi bi-collection-play-fill text-danger"></i>
        Uploaded Videos
    </h5>
</div>

<!-- Table Card -->
 @if(session('video_deleted'))
    <div class="custom-alert">
        {{ session('video_deleted') }}
    </div>
@endif
<div class="card border-0 shadow-sm">
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Video Title</th>
                        <th>YouTube Link</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
             @foreach($video as $video)
                <tr>
                    <!-- Serial Number -->
                    <td class="fw-semibold">
                        {{ $loop->iteration }}
                    </td>

                    <!-- Title -->
                    <td>
                        <i class="bi bi-play-circle-fill text-danger me-1"></i>
                        {{ $video->title }}
                    </td>

                    <!-- Video Link -->
                    <td>
                        <a href="{{ $video->video_link }}" target="_blank" class="text-decoration-none">
                            <i class="bi bi-link-45deg"></i>
                            Watch Video
                        </a>
                    </td>

                    <!-- Delete Button -->
                    <td class="text-center">
                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach


                </tbody>

            </table>
        </div>

    </div>
</div>

</div></section>
<section id="Famous-Person"><div class="card p-4 mt-3 ms-2">

<div class="famous_person_wrapper">
    <div class="container">
        <div class="famous_person_form_section">

            <!-- Header -->
            <div class="famous_person_header text-center">
                <h3>
                    <i class="bi bi-person-badge-fill me-2"></i>
                    Details Upload for the Famous Personality
                </h3>
                <p class="text-muted mt-2">
                    Use this form to upload complete details of a renowned personality including 
                    political background, designation, and profile image for official dashboard records.
                </p>
            </div>

            <!-- Form Start -->

            <!-- This is the alert message -->
             @if(session('saved_person_Sucess'))
            <script>
                alert("{{ session('saved_person_Sucess') }}");
            </script>
            @endif
        <form action="{{ route('famous.personality') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <!-- Full Name -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>

                <!-- Village -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Village</label>
                    <input type="text" name="village" class="form-control" required>
                </div>

                <!-- Political Background -->
                <div class="col-12 mb-3">
                    <label class="form-label">Political Background Details</label>
                    <textarea name="political_background" class="form-control" rows="4" required></textarea>
                </div>

                <!-- Post / Designation -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Post / Designation</label>
                    <select name="designation" class="form-select" required>
                        <option selected disabled>Select Post</option>
                        <option>Founder</option>
                        <option>MLA (Vidhayak)</option>
                        <option>MP (Sansad)</option>
                        <option>Activist</option>
                        <option>Journalist</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Upload Image -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Upload Profile Picture</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                </div>

                <!-- Submit Button -->
                <div class="col-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary famous_person_btn">
                        Upload Details
                    </button>
                </div>

            </div>
        </form>
            <!-- Form End -->

        </div>
    </div>
</div>

<!-- Here i am going to write the code for the delete some people data -->
 <!-- Famous Personality Records Section -->

    <div class="famous_person_records mt-5">

    <div class="famous_person_records_header text-center mb-4">
        <h4 class="fw-bold text-primary">
            <i class="bi bi-people-fill me-2"></i>
            Uploaded Famous Personality Records
        </h4>
        <p class="text-muted">
            Below are the recently uploaded personality details.
        </p>
    </div>

            @if(session('delete_success'))
                <script>
                    alert("{{ session('delete_success') }}");
                </script>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Village</th>
                            <th>Post</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($famous as $key => $person)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $person->full_name }}</td>
                            <td>{{ $person->village }}</td>
                            <td>{{ $person->designation }}</td>
                            <td>
                                <form action="{{ route('delete.person', $person->id) }}" method="POST" onsubmit="return confirmDelete();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        @if($famous->isEmpty())
                        <tr>
                            <td colspan="5" class="text-muted">No records found.</td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>

        </div>

<!-- Bootstrap JS -->
</div>
</section>
<section id="online-complaint">
    <div class="card p-4 mt-1 ms-1">
         <div class="container mt-0">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0 fw-bold">
                📋 Online Demand Records 
            </h5>
            <small class="text-muted">This is the total Demand of those individual that are submitted online to resolved the demand </samll>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>#</th>
                        <th>नाम</th>
                        <th>मोबाइल नंबर</th>
                        <th>मांग का शीर्षक</th>
                        <th>विवरण</th>
                        <th>तारीख</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($issue as $key => $demand)
                        <tr>
                            <td class="text-center">{{ $key+1 }}</td>
                            <td>{{ $demand->name }}</td>
                            <td>{{ $demand->mobile }}</td>
                            <td>{{ $demand->title }}</td>
                            <td>{{ $demand->description }}</td>
                            <td>{{ $demand->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                अभी तक कोई मांग सबमिट नहीं हुई है।
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
</div>
</section>

<!-- This is the feedback section -->
<section id="feedback"><div class="card p-4 mt-3 ms-2">
    <div class="container my-4">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">📋 Feedback Records</h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover align-middle text-center">

                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($feedback as $key => $data)

                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->mobile }}</td>
                        <td>{{ $data->message }}</td>
                        <td>{{ $data->created_at->format('d M Y') }}</td>

                        <td>
                            <!-- Delete Form -->
                            <form action="{{ route('feedback.delete',$data->id) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this feedback?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    🗑 Delete
                                </button>

                            </form>
                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="6" class="text-muted">
                            No Feedback Available
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

<!-- THis is the alert message -->
 @if(session('success_feedback'))
<div class="alert alert-success">
    {{ session('success_feedback') }}
</div>
@endif
</div></section>
<section id="member"><div class="card p-4 mt-3 ms-2">
    <div class="container my-5">

    <!-- Heading -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">
            Campaign Supporters List
        </h2>

        <p class="text-muted mx-auto" style="max-width:700px;">
            This table displays the details of all individuals who have joined the
            Lakhimpur Kheri political campaign through the online registration form.
            You can review their basic information including name, district, block,
            village, mobile number, and their reason for joining the campaign.
        </p>
    </div>

    <!-- Table Card -->
    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark text-center">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>District</th>
                            <th>Block</th>
                            <th>Village</th>
                            <th>Reason for Joining</th>
                            <th>Joined Date</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($members as $member)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $member->name }}</td>

                            <td>{{ $member->mobile }}</td>

                            <td>{{ $member->district }}</td>

                            <td>{{ $member->block }}</td>

                            <td>{{ $member->village }}</td>

                            <td>{{ $member->reason }}</td>

                            <td>{{ $member->created_at->format('d M Y') }}</td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
</div></section>
<section id="media-news">
    <div class="card p-4 mt-3 ms-2">
        <div class="container my-4">

            <!-- Heading -->
            <div class="mb-4">
                <h3 class="fw-bold text-primary">
                    Upload Newspaper Cuttings
                </h3>

                <p class="text-muted">
                    Upload important newspaper cuttings related to political activities,
                    public events, or campaign coverage in Lakhimpur Kheri.
                    This section helps maintain a digital archive of media coverage.
                </p>
            </div>

            <!-- Form Card -->
             @if(session('upload_news_success'))

`            <div class="alert alert-success">
            {{ session('upload_news_success') }}
            </div>

            @endif
            <div class="card shadow border-0">
                <div class="card-body">

                            <form action="{{ route('news.cutting.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row align-items-end g-3">

                            <!-- News Title -->
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">
                                    News Title
                                </label>
                                <input 
                                    type="text" 
                                    name="title"
                                    class="form-control"
                                    placeholder="Enter news title"
                                    required>
                            </div>

                            <!-- Description -->
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">
                                    Description
                                </label>
                                <input 
                                    type="text"
                                    name="description"
                                    class="form-control"
                                    placeholder="Enter description"
                                    required>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-2">
                                <label class="form-label fw-semibold">
                                    Upload Cutting
                                </label>
                                <input 
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    required>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-md-2 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- This is code for shown the data -->
     <!-- News Records Section -->
<div class="container mt-4">

    <!-- Heading -->
    <div class="text-center mb-3">
        <h4 class="fw-bold text-primary">
            <i class="bi bi-newspaper me-2"></i>
            Uploaded News Records
        </h4>
        <p class="text-muted mb-0">
            View and manage uploaded news cuttings.
        </p>
    </div>

    @if(session('delete_news_success'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete_news_success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">

            <thead class="table-dark">
                <tr>
                    <th>News Title</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($news as $item)
                <tr>
                   <td>{{ $item->title }}</td>
                   <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
                   <td>{{ \Carbon\Carbon::parse($item->created_at)->format('h:i A') }}</td>
                    <td>
                        <form action="{{ route('news.delete',$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
</section>
<section id="link"><div class="card p-4 mt-3 ms-2">

    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-danger">
                Add Important Links
            </h2>

            <p class="text-muted">
                Through this form you can add important links that will be displayed on the website.
                Please enter the correct title, website link, and a short description so that users
                can easily access useful and reliable information from your platform.
            </p>
        </div>

       <!-- Success Alert -->
@if(session('success_link'))
<div class="alert alert-success alert-dismissible fade show mx-auto"
     role="alert"
     style="max-width:900px;">

    <strong>Success!</strong> {{ session('success_link') }}

    <button type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close">
    </button>

</div>
@endif


<!-- Form Section -->
<form action="{{ route('important.link.store') }}"
      method="POST"
      class="bg-white p-4 rounded shadow-sm mx-auto"
      style="max-width:900px;">

    @csrf

    <div class="row g-3">

        <!-- Link Title -->
        <div class="col-md-6">
            <label class="form-label fw-semibold">
                Link Title
            </label>

            <input type="text"
                   name="title"
                   class="form-control"
                   placeholder="Example: District Administration Lakhimpur Kheri"
                   required>
        </div>


        <!-- Website Link -->
        <div class="col-md-6">
            <label class="form-label fw-semibold">
                Website Link
            </label>

            <input type="url"
                   name="link"
                   class="form-control"
                   placeholder="https://example.com"
                   required>
        </div>


        <!-- Description -->
        <div class="col-12">
            <label class="form-label fw-semibold">
                Short Description
            </label>

            <textarea name="description"
                      class="form-control"
                      rows="4"
                      placeholder="Write a short description about this link"
                      required>
            </textarea>
        </div>


        <!-- Submit Button -->
        <div class="col-12 text-center mt-3">
            <button type="submit"
                    class="btn btn-danger px-4 py-2">
                Add Link
            </button>
        </div>

    </div>

</form>

    </div>

    <!-- This is the code for the shown the table of the uploaded linkn data -->
     @if(session('success_link_delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">

<strong>Deleted!</strong> {{ session('success_link_delete') }}

<button type="button" class="btn-close" data-bs-dismiss="alert"></button>

</div>
@endif
     <div class="container mt-5">

    <!-- Table Heading -->
    <div class="text-center mb-4">
        <h3 class="fw-bold text-danger">
            Uploaded Important Links
        </h3>
        <p class="text-muted">
            Here you can view all the important links added to the website. 
            You can also remove any link if it is no longer required.
        </p>
    </div>

    <div class="table-responsive">

        <table class="table table-bordered table-hover align-middle text-center shadow-sm">

            <thead class="table-danger">

                <tr>
                    <th style="width:10%">ID</th>
                    <th style="width:35%">Link Title</th>
                    <th style="width:40%">Website Link</th>
                    <th style="width:15%">Action</th>
                </tr>

            </thead>

            <tbody>

                @foreach($links as $link)

                <tr>

                    <td>{{ $link->id }}</td>

                    <td class="fw-semibold">
                        {{ $link->title }}
                    </td>

                    <td>
                        <a href="{{ $link->link }}" target="_blank" class="text-primary">
                            {{ $link->link }}
                        </a>
                    </td>

                    <td>

                        <!-- Delete Button -->
                        <form action="{{ route('important.link.delete',$link->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>


</div></section>

<section id="contact"><div class="card p-4 mt-3 ms-2">
    <div class="container py-4">

    <h3 class="mb-4 fw-bold">Contact Form Messages</h3>

    <div class="table-responsive">

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>नाम</th>
                    <th>मोबाइल</th>
                    <th>विषय</th>
                    <th>संदेश</th>
                    <th>तारीख</th>
                </tr>
            </thead>

            <tbody>

                @foreach($contacts as $contact)

                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->mobile }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d-m-Y') }}</td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>
</div></section>
<section id="donate"><div class="card p-4 mt-3 ms-2">
 <div class="container mt-4">

<h3 class="mb-4 text-primary fw-bold">
Donation Dashboard
</h3>

@if(session('success_donation_delete'))
<div class="alert alert-danger">
{{ session('success_donation_delete') }}
</div>
@endif

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>#</th>
<th>नाम</th>
<th>जिला</th>
<th>ब्लॉक</th>
<th>मोबाइल</th>
<th>दान राशि</th>
<th>Screenshot Link</th>
<th>तारीख</th>
<th>Action</th>
</tr>

</thead>

<tbody>

@foreach($donate as $data)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $data->name }}</td>

<td>{{ $data->district }}</td>

<td>{{ $data->block }}</td>

<td>{{ $data->mobile }}</td>

<td class="fw-bold text-success">
₹ {{ $data->amount }}
</td>

<td>
<a href="{{ asset('donation_screenshot/'.$data->screenshot) }}" target="_blank">
View Screenshot
</a>
</td>

<td>
{{ $data->created_at->format('d M Y') }}
</td>

<td>

<a href="{{ route('donation.delete',$data->id) }}"
class="btn btn-danger btn-sm"
onclick="return confirm('क्या आप इस donation को delete करना चाहते हैं?')">
Delete
</a>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>   
</div></section>
</main>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

