<x-comman>
  <x-slot name="title">लखीमपुर खीरी का गौरवशाली इतिहास</x-slot>

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

<!-- ================= HERO SECTION ================= -->
<div class="hero-section">
    <h3 class="fw-bold display-6">लखीमपुर खीरी का गौरवशाली इतिहास</h3>
    <p class="lead mt-3">
        उत्तर प्रदेश का सबसे बड़ा जिला, जिसकी ऐतिहासिक, सांस्कृतिक और प्राकृतिक धरोहर अत्यंत समृद्ध है।
    </p>
</div>

<!-- ================= MAIN CONTENT ================= -->
<div class="container my-5">

    <!-- 1. प्राचीन इतिहास -->
    <h3 class="section-title">📜 1. प्राचीन एवं पौराणिक इतिहास</h3>
    <div class="card shadow-sm mb-4 p-4">
        <p>
            लखीमपुर खीरी का प्रारंभिक इतिहास पूर्णतः स्पष्ट नहीं है, परंतु कई स्थानों का संबंध महाभारत काल से जोड़ा जाता है।
        </p>
        <ul>
            <li><strong>महाभारत काल:</strong> मोहम्मदी के निकट बलमियार-बरखर को प्राचीन ‘विराट नगर’ की राजधानी माना जाता है।</li>
            <li><strong>समुद्रगुप्त शिलालेख:</strong> चौथी शताब्दी के सम्राट समुद्रगुप्त द्वारा किए गए अश्वमेध यज्ञ का प्रमाण खैराबाद के निकट पत्थर के घोड़े पर मिले शिलालेख से मिलता है।</li>
        </ul>
    </div>

    <!-- 2. मध्यकालीन इतिहास -->
    <h3 class="section-title">🏰 2. मध्यकालीन इतिहास</h3>
    <div class="card shadow-sm mb-4 p-4">
        <ul>
            <li><strong>राजपूत एवं मुस्लिम शासन:</strong> 10वीं शताब्दी में उत्तरी भाग पर राजपूतों का शासन था। 14वीं शताब्दी में नेपाल से आक्रमण रोकने हेतु किले बनाए गए।</li>
            <li><strong>मुगल काल:</strong> सम्राट अकबर के शासनकाल में यह क्षेत्र अवध प्रांत के खैराबाद सरकार का भाग था।</li>
            <li>खीरी नगर का नाम 1563 में निधन हुए सैयद खुर्द की कब्र से जुड़ा माना जाता है।</li>
        </ul>
    </div>

    <!-- 3. आधुनिक इतिहास -->
    <h3 class="section-title">🇮🇳 3. आधुनिक इतिहास एवं स्वतंत्रता संग्राम</h3>
    <div class="card shadow-sm mb-4 p-4">
        <ul>
            <li><strong>1857 का विद्रोह:</strong> मोहम्मदी उत्तरी अवध में स्वतंत्रता संग्राम का प्रमुख केंद्र बना। क्रांतिकारियों ने खजाने लूटे और ब्रिटिश शासन को चुनौती दी।</li>
            <li><strong>ब्रिटिश नियंत्रण:</strong> 1858 के अंत तक अंग्रेजों ने पुनः नियंत्रण स्थापित किया और जिला मुख्यालय लखीमपुर स्थानांतरित किया गया।</li>
        </ul>
    </div>

    <!-- 4. ऐतिहासिक स्थल -->
    <h3 class="section-title">🌿 4. प्रमुख ऐतिहासिक एवं पर्यटन स्थल</h3>
    <div class="row g-4">

        <div class="col-md-6">
            <div class="card shadow-sm h-100 p-4">
                <h5 class="fw-bold">🐸 मेंढक मंदिर (ओयल)</h5>
                <p>
                    यह भारत का एकमात्र मंदिर है जो "मंडूक तंत्र" पर आधारित है। इसका निर्माण 1860-1870 के बीच ओयल राज्य के राजा द्वारा कराया गया।
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100 p-4">
                <h5 class="fw-bold">🌳 दुधवा राष्ट्रीय उद्यान</h5>
                <p>
                    1958 में वन्यजीव अभयारण्य के रूप में स्थापित और 1977 में राष्ट्रीय उद्यान घोषित। यह उत्तर प्रदेश का एकमात्र राष्ट्रीय उद्यान है।
                </p>
            </div>
        </div>

    </div>

    <!-- 5. हाल की घटनाएँ -->
    <h3 class="section-title mt-5">⚖️ 5. हाल की प्रमुख घटनाएँ</h3>
    <div class="highlight-box mt-3">
        <strong>2021 की हिंसा:</strong> 3 अक्टूबर 2021 को टिकुनिया (बनबीरपुर) में कृषि कानूनों के विरोध के दौरान हुई हिंसा में आठ लोगों की मृत्यु हुई, जिसने राष्ट्रीय स्तर पर व्यापक चर्चा को जन्म दिया।
    </div>

</div>


   </x-slot>
</x-comman>