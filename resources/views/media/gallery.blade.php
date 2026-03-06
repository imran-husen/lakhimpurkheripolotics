<x-comman>
  <x-slot name="title">लोकसभा धौरहरा, खीरी - महत्वपूर्ण मांगें</x-slot>

  <x-slot name="bodycode">

  <!-- This is the code of the main body -->

  <!-- Political Events Gallery Hero Section -->
<section class="bg-light py-5">
    <div class="container">

        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 text-center text-lg-start">
                
                <h1 class="fw-bold text-primary mb-3">
                    लखीमपुर खीरी की राजनीतिक कार्यक्रम गैलरी
                </h1>

                <p class="text-muted fs-5">
                    लखीमपुर खीरी में आयोजित विभिन्न राजनीतिक कार्यक्रमों, जनसभाओं, जनजागरूकता अभियानों 
                    और सामाजिक सहभागिता से जुड़े महत्वपूर्ण पलों को यहाँ देखा जा सकता है। यह गैलरी 
                    क्षेत्र के राजनीतिक विकास, जनभागीदारी और नेतृत्व से जुड़े यादगार क्षणों को 
                    प्रदर्शित करती है।
                </p>

                <a href="#gallery" class="btn btn-primary btn-lg mt-3">
                    कार्यक्रम की तस्वीरें देखें
                </a>
              </div>
</section>

   <!-- Here i will update the all image related to the lakhimpur kheri -->
    <!-- Events Gallery Section -->
<section class="events-gallery py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">हमारे कार्यक्रम</h2>
            <p class="text-muted">
                यहाँ पर हमारे द्वारा आयोजित महत्वपूर्ण कार्यक्रमों की झलकियाँ देख सकते हैं।
            </p>
        </div>
<div class="row g-4 justify-content-center">

    @foreach($latestEvents as $event)

        <div class="col-12 col-sm-6 col-md-4 col-lg-custom">
            <div class="card shadow-sm border-0 h-100">

                <!-- Event Image -->
                <img src="{{ asset('latest_events/' . $event->image) }}" 
                     class="card-img-top" 
                     alt="{{ $event->title }}">

                <!-- Event Title -->
                <div class="card-body text-center">
                    <h6 class="fw-bold">
                        {{ $event->title }}
                    </h6>
                </div>

            </div>
        </div>

    @endforeach

</div>
            

        </div>
    </div>
</section>
   </x-slot>
</x-comman>