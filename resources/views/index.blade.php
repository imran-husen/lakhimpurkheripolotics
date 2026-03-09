<x-comman>
  <x-slot name="title">बहुआयामियों के बहुआयामी विचार जन-जन तक</x-slot>

  <x-slot name="bodycode">

  <!-- Here it will be used for write the body code -->

  <!-- This is the code of the top information and contact section  -->
   
<div class="container my-3">
    <div class="row g-2 align-items-center">

        <!-- Marquee Section -->
        <div class="col-lg-9 col-md-8 col-12">
            <div class="info-bar px-3">
                <div class="marquee-text fw-bold">
                    📢 {{ $latestNotice->message ?? 'No latest information available' }}
                </div>
            </div>
        </div>

        <!-- Toll Free Section -->
              <div class="col-lg-3 col-md-4 col-12">
          <div class="toll-box w-100 d-flex justify-content-between align-items-center px-3">

              <!-- Call Link -->
              <a href="tel:05222731211" class="text-decoration-none text-white fw-bold">
                  ☎ Toll-Free +91-9918422098
              </a>

              <!-- WhatsApp Link -->
              <a href="https://wa.me/919918422098" target="_blank" class="text-white fs-5">
                  <i class="bi bi-whatsapp"></i>
              </a>

          </div>
      </div>


    </div>
</div>

<!-- Here I am going to write the code of the those parts that will be slide on teh home screen -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-inner">
                    @foreach($slider as $item)
                       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                          <img src="{{ asset($item->image) }}" class="d-block w-100">
                       </div>
                    @endforeach
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- This is the code for the autodownload of the conapeign poster -->
    <!-- AUTO POPUP -->
        <div id="autoPopup" class="popup-overlay">

            <div class="popup-box">

                <!-- CLOSE BUTTON -->
                <button type="button" class="btn-close popup-close" aria-label="Close"></button>

                <!-- IMAGE -->
                <div class="popup-image" style="background-image:url('Static_image/Pop Image.jpeg')">
                    <a href="https://www.bahuayamiparty.in/onlinemember.aspx" 
                      class="btn btn-primary btn-sm m-2 shadow-sm fw-semibold
                              d-inline-flex align-items-center gap-2
                              rounded-pill">
                        Enter Website
                    </a>
                </div>

            </div>
        </div>
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const closeBtn = document.querySelector(".popup-close");
            const popup = document.getElementById("autoPopup");

            closeBtn.addEventListener("click", function () {
                popup.style.display = "none";
            });
        });
        </script>

<!-- HERO SECTION -->
<div class="container d-flex justify-content-center align-items-center mt-2">

    <h4 class="text-center bg-primary text-white px-5 py-2
               rounded-pill shadow-lg 
               animate__animated animate__pulse animate__infinite">
        Important Page Link
    </h4>

</div>
<section class="hero text-center mt-2">
  <div class="container">

    <div class="row g-3 justify-content-center">

      <!-- Button 1 -->
      <div class="col-6 col-md-2">
        <a href="{{ route('about.history') }}" class="btn btn-warning btn-sm w-100">
          About <i class="bi bi-info-circle-fill ms-1"></i>
        </a>
      </div>

      <!-- Button 2 -->
      <div class="col-6 col-md-2">
        <a href="{{ route('mangement.org') }}" class="btn btn-warning btn-sm w-100">
          Management <i class="bi bi-diagram-3-fill ms-1"></i>
        </a>
      </div>

      <!-- Button 3 -->
      <div class="col-6 col-md-2">
        <a href="{{ route('politics.assembly') }}" class="btn btn-warning btn-sm w-100">
          Politics <i class="bi bi-megaphone-fill ms-1"></i>
        </a>
      </div>

      <!-- Button 4 -->
      <div class="col-6 col-md-2">
        <a href="{{ route('media.news') }}" class="btn btn-warning btn-sm w-100">
          Gallery <i class="bi bi-image-fill ms-1"></i>
        </a>
      </div>

      <!-- Button 5 -->
      <div class="col-6 col-md-2">
        <a href="{{ route('contact') }}" class="btn btn-warning btn-sm w-100">
          Contact <i class="bi bi-envelope-fill ms-1"></i>
        </a>
      </div>

      <!-- Button 6 -->
      <div class="col-6 col-md-2">
        <a href="{{ route('amish') }}" class="btn btn-warning btn-sm w-100">
          K.M. Amish <i class="bi bi-person-badge-fill ms-1"></i>
        </a>
      </div>

    </div>

  </div>
</section>

<!-- This is the code of the atraction view of the lakhimpur kheri -->
<section class="py-5 bg-light m-2">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-success">Kheri Attraction View</h2>
            <p class="text-muted">
                Explore the natural beauty, historical heritage, and cultural richness of Lakhimpur Kheri.
            </p>
        </div>

        <!-- Scrollable Cards -->
        <div class="kheri_scroll d-flex gap-4 overflow-auto pb-3">

            <div class="container mt-4">
              <div class="row">

                  @foreach($attractions as $attraction)
                  <div class="col-md-4 mb-4">
                      <div class="card kheri_card shadow-sm h-100">

                          <!-- Image From Database -->
                          <img src="{{ asset('attraction_image/'.$attraction->image) }}" 
                              class="card-img-top kheri_img" 
                              alt="{{ $attraction->title }}">

                          <div class="card-body text-center">
                             <h6 class="fw-bold">
                              {{ \Illuminate\Support\Str::limit($attraction->title, 20, '...') }}
                             </h6>

                             <!-- Description (30 words limit) -->
                              <p class="small text-muted kheri_text">
                               {{ \Illuminate\Support\Str::limit($attraction->description, 50, '...') }}
                              </p>
                          </div>

                      </div>
                  </div>
                  @endforeach

              </div>
          </div>

        </div>

    </div>
</section>



<!-- TESTIMONIALS -->
<section class="py-2">
  <div class="container">
    <h6 class="fw-bold text-center text-danger mb-1 split-text" data-split>लखीमपुर की राजनीति पर लोगों के मत</h6>

    <div id="testiCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        @foreach($feedback as $index => $item)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="p-1 testi text-center">
                <p class="mb-2">
                  "{{ $item->message }}"
                </p>
                <strong>- {{ $item->name }}</strong>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button"
              data-bs-target="#testiCarousel" data-bs-slide="prev">
        <i class="bi bi-arrow-left-circle-fill carousel-icon"></i>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button"
              data-bs-target="#testiCarousel" data-bs-slide="next">
        <i class="bi bi-arrow-right-circle-fill carousel-icon"></i>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
  </div>
</section>


<!-- This is the circular list of the image  where i will upload the latest image on here-->
 <section class="py-1">
  <div class="container">
    <div class="text-center mb-1">
      <p class="fw-bold text-success">हमारे कुछ पुराने सफल आयोजन</p>
      <small class="text-muted mt-1">
        हमारे द्वारा आयोजित पूर्व सफल कार्यक्रमों में शैक्षणिक संगोष्ठी, प्रतियोगी परीक्षाओं की कार्यशालाएँ, 
        युवा मार्गदर्शन सत्र और सामाजिक जागरूकता अभियान शामिल रहे। इन आयोजनों ने छात्रों और समाज को 
        सकारात्मक दिशा, प्रेरणा तथा व्यवहारिक ज्ञान प्रदान किया।
      </small>
    </div>
  </div>
</section>

<!-- This is the dynamics updatre of the all image -->
      <div class="container my-2">
        <div class="slider-wrapper">
          <div class="slider-track">

            @foreach($latestEvents as $event)
              <div class="circle-card">
                <img 
                  src="{{ url('latest_events/'.$event->image) }}" 
                  alt="Event Image"
                  style="width:100%; height:100%; object-fit:cover;"
                >
              </div>
            @endforeach

          </div>
        </div>
      </div>

<!-- Here i am going to create a form that helps to take the feedback from the user -->

<!-- It will be helps to shown the message -->
      @if(session('success'))
      <script>
          alert("{{ session('success') }}");
      </script>
      @endif<!-- ================= Heading Section ================= -->
<div class="container text-center my-4">
    <h4 class="fw-bold text-primary">
        ✍️ अपने विचार हमारे साथ साझा करें
    </h4>
    <p class="text-muted fs-5 mt-2">
        आपका एक सुझाव समाज को बेहतर दिशा दे सकता है। 
        कृपया अपने बहुमूल्य विचार हमारे साथ साझा करें।
    </p>
</div>

<!-- ================= Feedback Form ================= -->
<form action="{{ route('feedback.store') }}" method="POST"
      class="bg-white p-4 rounded-4 shadow-lg mx-auto my-3"
      style="max-width:1200px; border-top:4px solid #0d6efd;">

    @csrf

    <div class="row align-items-center g-3 p-3"
         style="border: 1px solid #0d6efd; border-radius:10px; background: #f8f9ff;">

        <!-- Name -->
        <div class="col-12 col-md-3 form-floating">
            <input type="text" name="name" class="form-control shadow-sm" placeholder="नाम" required>
            <label>आपका नाम</label>
        </div>

        <!-- Mobile -->
        <div class="col-12 col-md-3 form-floating">
            <input type="tel" name="mobile" class="form-control shadow-sm" placeholder="मोबाइल" required>
            <label>मोबाइल नंबर</label>
        </div>

        <!-- Message -->
        <div class="col-12 col-md-4 form-floating">
            <textarea name="message" class="form-control shadow-sm"
                      style="height:58px; resize:none;"
                      placeholder="विचार" required></textarea>
            <label>आपका विचार</label>
        </div>

        <!-- Button -->
        <div class="col-12 col-md-2 text-center">
            <button type="submit"
                    class="btn btn-primary w-100 btn-lg rounded-pill shadow">
                📩 भेजें
            </button>
        </div>

    </div>
</form>

<!-- Sticky Donate Button -->
<!-- Donate Floating Button -->
<a class="btn btn-success btn-lg rounded-pill shadow-lg donate-btn"
   data-bs-toggle="modal"
   data-bs-target="#donatePopup">

    <i class="bi bi-cash-coin me-2"></i>
    Donate Now
</a>
  <!-- THis is code of the pop -->
  <!-- Donate Popup Modal -->
<div class="modal fade" id="donatePopup" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content rounded-4 shadow-lg">

            <!-- Header -->
            <div class="modal-header bg-success text-white">

                <h5 class="modal-title">
                    🙏 सहयोग करें
                </h5>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>

            </div>


            <!-- Body -->

            <div class="modal-body text-center p-4">

                <h5 class="fw-bold mb-3">
                    आपका सहयोग हमारे लिए महत्वपूर्ण है
                </h5>

                <p class="text-muted">
                  हमारी संस्था समाज सेवा, शिक्षा और जरूरतमंद लोगों
                  की सहायता के लिए लगातार कार्य कर रही है।
              </p>

              <p class="text-muted">
                  आपका छोटा सा योगदान भी किसी की जिंदगी
                  में बड़ा बदलाव ला सकता है।
              </p>

              <!-- Note -->
              <p class="mt-3 p-3 bg-light border rounded text-start">
                  <strong>नोट:</strong> दान करते समय कृपया <b>UPI</b> का उपयोग करें।
                  भुगतान करने के बाद उसका <b>स्क्रीनशॉट</b> सुरक्षित रखें और
                  फॉर्म भरते समय उसे हमारे पास जमा करें ताकि आपके
                  दान की पुष्टि की जा सके।
              </p>

                <!-- Redirect Button -->

                <a href="{{ route('donate') }}"
                   class="btn btn-success rounded-pill px-4 mt-3">

                    सहयोग करें

                </a>

            </div>

        </div>

    </div>

</div>

<!-- JOIN SECTION -->
<section id="join" class="bg-primary text-white text-center py-5">

  <div class="container">

    <!-- Powerful Heading -->
    <h5 class="fw-bold  mb-3 
               animate__animated animate__fadeInDown">
        लखीमपुर की राजनीति में आपका स्वागत है
    </h5>

    <!-- Strong Message -->
    <p class="lead mb-4 
              animate__animated animate__fadeInUp animate__delay-1s">
        विकास, स्वाभिमान और जनहित के लिए आज ही हमारे अभियान से जुड़ें।
    </p>

    <!-- Highlight Button -->
    <a href="{{ route('join') }}" 
       class="btn btn-light text-primary btn-lg px-5 py-3 
              rounded-pill fw-bold shadow-lg 
              animate__animated animate__heartBeat animate__infinite">

        <i class="bi bi-megaphone-fill me-2"></i>अभियान से जुड़ें</a>

  </div>

</section>

<!-- this is the Youtube section where video will be playonline -->
 <section class="video-section py-5">

<div class="container">

<!-- Heading -->
<div class="text-center mb-5">

<h2 class="fw-bold text-primary">
हमारे महत्वपूर्ण वीडियो देखें
</h2>

<p class="text-muted">
यहाँ पर हमारे द्वारा अपलोड किए गए महत्वपूर्ण वीडियो उपलब्ध हैं। 
आप सीधे यहाँ से वीडियो देख सकते हैं या YouTube पर जाकर भी देख सकते हैं।
</p>

</div>


<div class="video-scroll">

@foreach($video as $video)

@php
$videoId = explode('v=', $video->video_link)[1] ?? '';
@endphp

<div class="video-card">

<!-- Video -->
<div class="ratio ratio-16x9">
<iframe 
src="https://www.youtube.com/embed/{{ $videoId }}" 
allowfullscreen>
</iframe>
</div>

<div class="p-3">

<!-- Title -->
<h6 class="fw-bold">
{{ \Illuminate\Support\Str::limit($video->title, 80) }}
</h6>

<!-- Youtube Link -->
<a href="{{ $video->video_link }}" target="_blank" class="text-primary text-decoration-none">

<i class="bi bi-youtube text-danger"></i>
Video Link on YouTube

</a>

</div>

</div>

@endforeach

</div>

</div>
</section>



  </x-slot>
</x-comman>