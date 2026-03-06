<x-comman>
  <x-slot name="title">लखीमपुर खीरी - प्रशासनिक संरचना</x-slot>

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

<!-- This is the main code of the code parts -->



<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="fw-bold">लखीमपुर खीरी की प्रशासनिक व्यवस्था</h1>
        <p class="mt-3">
            जिला प्रशासन कानून व्यवस्था, विकास कार्य, राजस्व प्रबंधन तथा न्यायिक व्यवस्था के संचालन में महत्वपूर्ण भूमिका निभाता है। 
            नीचे जिले की प्रशासनिक संरचना का विस्तृत विवरण दिया गया है।
        </p>
    </div>
</section>

<div class="container my-5">

    <!-- District Administration -->
    <div class="mb-5">
        <h3 class="section-title">1. जिला प्रशासन</h3>
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">जिला मजिस्ट्रेट (DM)</h5>
                <p>
                    जिला का सर्वोच्च प्रशासनिक अधिकारी जिला मजिस्ट्रेट (आईएएस) होता है। 
                    डीएम कानून एवं व्यवस्था, विकास परियोजनाएँ, राजस्व प्रशासन तथा आपदा प्रबंधन की निगरानी करते हैं।
                </p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="fw-bold">पुलिस प्रशासन</h5>
                <p>
                    जिले की सुरक्षा व्यवस्था का नेतृत्व पुलिस अधीक्षक (SP) करते हैं। 
                    लखीमपुर खीरी जिला लखनऊ पुलिस ज़ोन एवं लखनऊ पुलिस रेंज के अंतर्गत आता है। 
                    जिले में कुल 23 पुलिस थाने कार्यरत हैं।
                </p>
            </div>
        </div>
    </div>

    <!-- Administrative Subdivisions -->
    <div class="mb-5">
        <h3 class="section-title">2. प्रशासनिक उपविभाजन</h3>

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">तहसीलें (7)</h5>
                <div class="row row-cols-2 row-cols-md-4 g-2">
                    <div class="col">• लखीमपुर</div>
                    <div class="col">• मोहम्मदी</div>
                    <div class="col">• गोला गोकर्णनाथ</div>
                    <div class="col">• निघासन</div>
                    <div class="col">• धौरहरा</div>
                    <div class="col">• मितौली</div>
                    <div class="col">• पलिया कलां</div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">ब्लॉक (15)</h5>
                <p>
                    जिले में 15 विकास खंड (ब्लॉक) ग्रामीण विकास कार्यों के संचालन हेतु कार्यरत हैं।
                </p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="fw-bold">नगर निकाय</h5>
                <p>
                    जिले में 4 नगर पालिका परिषद (लखीमपुर, गोला, मोहम्मदी, पलिया) 
                    तथा 8 नगर पंचायतें शहरी क्षेत्रों के प्रबंधन हेतु कार्यरत हैं।
                </p>
            </div>
        </div>
    </div>

    <!-- Revenue and Rural Administration -->
    <div class="mb-5">
        <h3 class="section-title">3. राजस्व एवं ग्रामीण प्रशासन</h3>

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">ग्राम पंचायतें</h5>
                <p>
                    जिले में लगभग 1,167 ग्राम पंचायतें ग्रामीण प्रशासन एवं विकास कार्यों के संचालन हेतु कार्य करती हैं।
                </p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="fw-bold">राजस्व ग्राम</h5>
                <p>
                    जिले में कुल 1,795 राजस्व ग्राम हैं, जिनका प्रबंधन तहसील स्तर के अधिकारियों 
                    (तहसीलदार एवं लेखपाल) द्वारा किया जाता है।
                </p>
            </div>
        </div>
    </div>

    <!-- Judicial Administration -->
    <div class="mb-5">
        <h3 class="section-title">4. न्यायिक प्रशासन</h3>

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="fw-bold">न्यायालय</h5>
                <p>
                    जिले का मुख्य न्यायिक केंद्र जिला एवं सत्र न्यायालय, लखीमपुर है। 
                    इसके अतिरिक्त मोहम्मदी में उप-मंडलीय / सिविल न्यायालय स्थित है।
                </p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="fw-bold">जिला न्यायाधीश</h5>
                <p>
                    वर्तमान में श्री शिव कुमार सिंह जिले के जिला न्यायाधीश हैं।
                </p>
            </div>
        </div>
    </div>

</div>

      </x-slot>
</x-comman>