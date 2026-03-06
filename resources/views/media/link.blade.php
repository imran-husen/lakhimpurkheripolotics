<x-comman>
  <x-slot name="title">लोकसभा धौरहरा, खीरी - महत्वपूर्ण मांगें</x-slot>

  <x-slot name="bodycode">

  <!-- This is the code of the main body -->
   <div class="container my-5">

    <!-- Section Heading -->
   <div class="text-center mb-5">
    
    <h3 class="fw-bold text-danger">
        महत्वपूर्ण लिंक
    </h3>

    <p class="text-muted">
        यहाँ से आप विभिन्न महत्वपूर्ण और उपयोगी वेबसाइटों तक सीधे पहुँच सकते हैं।
        किसी भी कार्ड के नीचे दिए गए बटन पर क्लिक करके संबंधित वेबसाइट को देख सकते हैं।
    </p>

</div>

    <div class="row g-4">

        @foreach($links as $link)

        <div class="col-12 col-sm-6 col-md-4 col-lg link-col">

            <div class="card link-card h-100 border-0">

                <div class="card-body text-center d-flex flex-column justify-content-between">

                    <div>
                      <h6 class="fw-bold mb-2">
                       {{ \Illuminate\Support\Str::limit($link->title, 25) }}
                      </h6>

                      <p class="text-muted small">
                          {{ \Illuminate\Support\Str::limit($link->description, 150) }}
                      </p>
                    </div>

                    <div>
                        <a href="{{ $link->link }}" 
                           target="_blank"
                           class="btn btn-danger btn-sm px-3">
                           Visit Link
                        </a>
                    </div>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>
   </x-slot>
</x-comman>