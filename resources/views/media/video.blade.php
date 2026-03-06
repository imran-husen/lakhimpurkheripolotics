<x-comman>
  <x-slot name="title">लोकसभा धौरहरा, खीरी - महत्वपूर्ण मांगें</x-slot>

  <x-slot name="bodycode">

  <!-- This is the code of the main body -->

  <!-- Political Videos Hero Section -->
<section class="bg-light py-5">
    <div class="container">

        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 text-center text-lg-start">
                
                <h1 class="fw-bold text-danger mb-3">
                    लखीमपुर खीरी के राजनीतिक वीडियो
                </h1>

                <p class="text-muted fs-5">
                    इस अनुभाग में लखीमपुर खीरी से जुड़े महत्वपूर्ण राजनीतिक वीडियो, जनसभाओं के दृश्य, 
                    जनजागरूकता कार्यक्रमों की झलक और विभिन्न सामाजिक एवं राजनीतिक गतिविधियों के 
                    प्रेरणादायक क्षण उपलब्ध हैं। यहाँ आप क्षेत्र के विकास, जनभागीदारी और नेतृत्व 
                    से जुड़े महत्वपूर्ण संदेशों और घटनाओं को वीडियो के माध्यम से देख सकते हैं।
                </p>

                <a href="#videos" class="btn btn-danger btn-lg mt-3">
                    वीडियो देखें
                </a>

            </div>

        </div>

    </div>
</section>
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

                <!-- YouTube Link -->
                <a href="{{ $video->video_link }}" 
                   target="_blank" 
                   class="text-primary text-decoration-none">

                    <i class="bi bi-youtube text-danger"></i>
                    Video Link on YouTube

                </a>

            </div>

        </div>

    @endforeach

</div>
   </x-slot>
</x-comman>