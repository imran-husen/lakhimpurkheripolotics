<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       <script src="{{ asset('javascript/main.js') }}"></script>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    


    

    
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <title>{{$title}}</title>
</head>
<body>

<!-- ================= Heading Section ================= -->
<!-- Top Header Section -->
<div class="top-heading py-2" style="color:blue;">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between flex-wrap">

            <!-- LEFT SIDE (Logo + Title) -->
            <div class="d-flex align-items-center">

                <!-- Title Section -->
                <div>
                    <h4 class="mb-0 text-danger" style="font-family: 'Poppins', sans-serif; font-size:20px; font-weight:bold">
                        बोल कि लब आज़ाद हैं तेरे
                    </h4>
                    <small>
                        <b>बहुआयामियों के बहुआयामी विचार जन-जन तक</b>
                    </small>
                </div>

            </div>

            <!-- RIGHT SIDE (Social Icons) -->
            <div class="d-flex align-items-center gap-3 mt-2 mt-md-0">

                <a href="#" class="text-danger fs-5">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" class="text-danger fs-5">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="#" class="text-danger fs-5">
                    <i class="bi bi-twitter-x"></i>
                </a>

                <a href="#" class="text-danger fs-5">
                    <i class="bi bi-youtube"></i>
                </a>

                <a href="#" class="text-danger fs-5">
                    <i class="bi bi-linkedin"></i>
                </a>

            </div>

        </div>
    </div>
</div>

<!-- ================= Navbar Section ================= -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
    <div class="container-fluid">

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#mobileSidebar"
                aria-controls="mobileSidebar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- ================= Desktop Menu (Same As Before) ================= -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="mainNavbar">

            <!-- LEFT MENU -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <!-- About -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about.history') }}">About Kheri History</a></li>
                        <li><a class="dropdown-item" href="{{route('about.politics')}}">About Kheri Politics</a></li>
                        <li><a class="dropdown-item" href="{{route('about.admistrative')}}">About Kheri Admistrative</a></li>
                        <li><a class="dropdown-item" href="{{route('about.place')}}">About Kheri Places</a></li>
                        <li><a class="dropdown-item" href="{{route('about.famous')}}">About Famous Personality</a></li>
                    </ul>
                </li>

                <!-- Managements -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Managements</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('mangement.org') }}">About Organisation</a></li>
                        <li><a class="dropdown-item" href="{{ route('mangement.party') }}">About Kheri Politics Party</a></li>
                        <li><a class="dropdown-item" href="{{ route('mangement.agenda')}}">Agenda of Political Party</a></li>
                        <li><a class="dropdown-item" href="{{ route('mangement.demand') }}">District Politics Demand</a></li>
                    </ul>
                </li>

                <!-- Political -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Political</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('politics.assembly') }}">Assembly Seat</a></li>
                        <li><a class="dropdown-item" href="{{ route('politics.parliament') }}">Parliaments Seat</a></li>
                    </ul>
                </li>

                <!-- Gallery -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Gallery</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('media.news') }}">News Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.gallery') }}">Events Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.video') }}">Videos Gallery</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.link') }}">Social Media Link</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact-us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Donate</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('amish') }}">K.M. Amish</a></li>
            </ul>

            <!-- RIGHT MENU -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" href="#" data-bs-toggle="dropdown">
                        🔐 Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ url('/admin-login') }}">Admin Login</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin-logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- ================= Mobile Sidebar (Offcanvas) ================= -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold text-primary">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <ul class="navbar-nav">

            <!-- Home -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>

            <!-- About -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    About
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('about.history') }}">About Kheri History</a></li>
                    <li><a class="dropdown-item" href="{{ route('about.politics') }}">About Kheri Politics</a></li>
                    <li><a class="dropdown-item" href="{{ route('about.admistrative') }}">About Kheri Administrative</a></li>
                    <li><a class="dropdown-item" href="{{ route('about.place') }}">About Kheri Places</a></li>
                    <li><a class="dropdown-item" href="{{ route('about.famous') }}">About Famous Personality</a></li>
                </ul>
            </li>

            <!-- Managements -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    Managements
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('mangement.org') }}">About Organisation</a></li>
                    <li><a class="dropdown-item" href="{{ route('mangement.party') }}">About Kheri Politics Party</a></li>
                    <li><a class="dropdown-item" href="{{ route('mangement.agenda') }}">Agenda of Political Party</a></li>
                    <li><a class="dropdown-item" href="{{ route('mangement.demand') }}">District Politics Demand</a></li>
                </ul>
            </li>

            <!-- Political -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    Political
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('politics.assembly') }}">Assembly Seat</a></li>
                    <li><a class="dropdown-item" href="{{ route('politics.parliament') }}">Parliament Seat</a></li>
                </ul>
            </li>

            <!-- Gallery -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    Gallery
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('media.news') }}">News Gallery</a></li>
                    <li><a class="dropdown-item" href="{{ route('media.gallery') }}">Events Gallery</a></li>
                    <li><a class="dropdown-item" href="{{ route('media.video') }}">Videos Gallery</a></li>
                    <li><a class="dropdown-item" href="{{ route('media.link') }}">Social Media Link</a></li>
                </ul>
            </li>

            <!-- Other Pages -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact-us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Donate</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('amish') }}">
                    K.M. Amish
                </a>
            </li>

        </ul>

    </div>

</div>

<!-- This is the section of the bodycode -->
 {{$bodycode}}

<!-- ================= Footer ================= -->
<footer class="org-footer mt-2 bg-white border-top">
    <div class="container py-4">
        <div class="row align-items-start">

            <!-- संगठन जानकारी -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold">लखीमपुर खीरी की राजनीति (अवध क्षेत्र)</h6>
                <p class="small mb-0 text-muted">
                    बहुआयामियों के बहुआयामी विचार जन-जन तक
                </p>
            </div>

            <!-- कार्यालय का पता -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold text-danger">पार्टी कार्यालय</h6>
                <p class="small text-muted mb-0">
                    <strong>बहुआयामी पार्टी (BAP)</strong><br>
                    कस्ता कॉलोनी, मैगलगंज मार्ग<br>
                    एच. पी. मौर्य पेट्रोल पंप के पास<br>
                    विधानसभा क्षेत्र – कस्ता, सीट संख्या 143<br>
                    ब्लॉक – मितौली, पिन कोड – 261501<br>
                    जनपद – लखीमपुर खीरी, उत्तर प्रदेश (262701)
                </p>
            </div>

            <!-- सोशल मीडिया -->
            <div class="col-md-4 text-md-end text-center">
                <h6 class="fw-bold">हमसे जुड़ें</h6>
                <a href="#" class="social-icon me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>

        </div>

        <hr>

        <!-- नीचे की लाइन -->
        <div class="text-center small text-muted">
            © 2025 बहुआयामी पार्टी | सभी अधिकार सुरक्षित
        </div>
    </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
