<x-comman>
  <x-slot name="title"> लखीमपुर खीरी की राजनीतिक झलक</x-slot>

  <x-slot name="bodycode">

  <!-- This is the code of the main news uploded code -->
   <!-- Hero Section : Lakhimpur Kheri Politics Gallery -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Text Content -->
      <div class="col-lg-6">
        <h1 class="fw-bold text-danger mb-3">
          लखीमपुर खीरी की राजनीतिक झलक
        </h1>

        <p class="text-muted fs-5">
          इस गैलरी में लखीमपुर खीरी जिले की प्रमुख राजनीतिक गतिविधियों, 
          जनसभाओं, नेताओं के कार्यक्रमों और जनसेवा से जुड़ी महत्वपूर्ण 
          तस्वीरों को प्रस्तुत किया गया है। यहाँ आप जिले की राजनीति से 
          जुड़े ऐतिहासिक और वर्तमान क्षणों की झलक देख सकते हैं।
        </p>

        <a href="#gallery" class="btn btn-danger mt-3 px-4 py-2">
          तस्वीरें देखें
        </a>
      </div>

      <!-- Image Section -->
    </div>
  </div>
</section>

<!-- News Gallery Section -->
<section class="news-section py-5">

    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="news-heading fw-bold text-danger">
                लखीमपुर खीरी राजनीतिक गैलरी
            </h2>

            <p class="news-description text-muted">
                यहाँ जिले की प्रमुख राजनीतिक गतिविधियों और कार्यक्रमों की तस्वीरें देख सकते हैं।
            </p>
        </div>

        <div class="row g-4">

@foreach($news as $news)

<div class="col-12 col-sm-6 col-md-4 news-col">
    <div class="card news-card h-100 border-0">

        <img src="{{ asset('news_cuttings/' . $news->image) }}"
             class="card-img-top news-image"
             alt="{{ $news->title }}">

        <div class="card-body news-card-body">

            <h6 class="news-title">
                {{ $news->title }}
            </h6>

            <p class="news-text">
                {{ $news->description }}
            </p>

            <div class="news-date">
                Posted : {{ \Carbon\Carbon::parse($news->created_at)->format('d F Y') }}
            </div>

        </div>
    </div>
</div>

@endforeach

</div>

    </div>

</section>
   </x-slot>
</x-comman>