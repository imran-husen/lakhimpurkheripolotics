<x-comman>
  <x-slot name="title">लखीमपुर खीरी की गौरवशाली पहचान</x-slot>

  <x-slot name="bodycode">
    <!-- Here i will write the body code -->
      <div class="container my-3">
    <div class="d-flex flex-column flex-md-row gap-2 justify-content-center">

        <a href="{{ route('about.history') }}" class="btn btn-primary w-100 text-md-start text-center">
            <i class="bi bi-clock-history me-2"></i> About Kheri History
        </a>

        <a href="{{route('about.politics')}}" class="btn btn-success w-100 text-md-start text-center">
            <i class="bi bi-person-badge me-2"></i> About Kheri Politics
        </a>

        <a href="{{route('about.admistrative')}}" class="btn btn-warning w-100 text-md-start text-center">
            <i class="bi bi-building me-2"></i> About Kheri Administrative
        </a>

        <a href="{{route('about.place')}}" class="btn btn-info w-100 text-md-start text-center">
            <i class="bi bi-geo-alt me-2"></i> About Kheri Places
        </a>

        <a href="{{route('about.famous')}}" class="btn btn-danger w-100 text-md-start text-center">
            <i class="bi bi-star-fill me-2"></i> About Famous Personality
        </a>

    </div>
</div>

<section class="container-fluid d-flex align-items-center justify-content-center text-center"
        style="min-height: 55vh; 
               background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
               url('https://source.unsplash.com/1600x900/?uttar-pradesh,nature') center/cover no-repeat;">

    <div class="container text-white">
        
        <!-- Main Heading -->
        <h1 class="display-4 fw-bold mb-4">
            लखीमपुर खीरी की गौरवशाली पहचान
        </h1>

        <!-- Description -->
        <p class="lead mx-auto" style="max-width: 750px;">
            यह भूमि समृद्ध संस्कृति, ऐतिहासिक विरासत और प्रेरणादायक व्यक्तित्वों की धरोहर है। 
            यहाँ की परंपराएँ, सामाजिक समर्पण और विकास की सोच इसे विशेष बनाती हैं। 
            यह क्षेत्र शिक्षा, सेवा और प्रगति की दिशा में निरंतर अग्रसर है।
        </p>

        <!-- Button -->
        <div class="mt-4">
            <a href="#" class="btn btn-warning btn-lg px-4 shadow">
                और जानें
            </a>
        </div>

    </div>
     
</section>

<!-- This is the code of the final amd dynamic data of the code -->

 <div class="container my-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Famous Personalities</h2>
        <p class="text-muted">Meet Our Notable Leaders & Contributors</p>
    </div>

    <div class="row">

        @foreach($persons as $person)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

            <div class="card famous_card shadow-sm border-0 h-100">

                <!-- Image -->
                <div class="text-center pt-4">
                    <img src="{{ asset('Famou_person/' . $person->image) }}" 
                         class="famous_img"
                         alt="{{ $person->full_name }}">
                </div>

                <!-- Card Body -->
                <div class="card-body text-center">

                    <h5 class="fw-bold mb-1">
                        {{ $person->full_name }}
                    </h5>

                    <p class="text-muted small mb-1">
                        <i class="bi bi-geo-alt-fill text-danger"></i>
                        {{ $person->village }}
                    </p>

                    <span class="badge bg-primary mb-2">
                        {{ $person->designation }}
                    </span>

                    <p class="small text-muted">
                        {{ Str::limit($person->political_background, 80) }}
                    </p>

                </div>

            </div>

        </div>
        @endforeach

    </div>
</div>

<!-- This is the dynamics code for the fronted -->

      </x-slot>
</x-comman>