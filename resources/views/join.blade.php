<x-comman>
  <x-slot name="title">लखीमपुर खीरी लोकसभा सीटें एवं प्रमुख मांगें</x-slot>

  <x-slot name="bodycode">
    <!-- This is the bosy code --> 
     <!-- Join Campaign Section -->
<!-- Join Campaign Section -->
<section class="join-campaign py-5 bg-light">

    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-danger">
                लखीमपुर खीरी के राजनीतिक अभियान से जुड़ें
            </h2>

            <p class="text-muted mx-auto" style="max-width:700px;">
                यदि आप लखीमपुर खीरी के विकास, जनसेवा और सकारात्मक बदलाव के लिए 
                हमारे साथ जुड़ना चाहते हैं, तो नीचे दिया गया फॉर्म भरें। 
                आपकी भागीदारी हमारे अभियान को और मजबूत बनाएगी।
            </p>
        </div>

        <!-- Success Message -->
       @if(session('join_success'))

        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">

            <strong>धन्यवाद!</strong> {{ session('join_success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        </div>

        @endif

        <!-- Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form action="{{ route('join.campaign.store') }}" method="POST" class="bg-white p-4 p-md-5 shadow rounded-4">

                    @csrf

                    <div class="row g-3">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                पूरा नाम
                            </label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="अपना नाम दर्ज करें"
                                   required>
                        </div>

                        <!-- Mobile -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                मोबाइल नंबर
                            </label>
                            <input type="tel"
                                   name="mobile"
                                   class="form-control"
                                   placeholder="मोबाइल नंबर दर्ज करें"
                                   required>
                        </div>

                        <!-- District -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                जिला
                            </label>
                            <input type="text"
                                   name="district"
                                   class="form-control"
                                   placeholder="जिला दर्ज करें">
                        </div>

                        <!-- Block -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                ब्लॉक
                            </label>
                            <input type="text"
                                   name="block"
                                   class="form-control"
                                   placeholder="ब्लॉक दर्ज करें">
                        </div>

                        <!-- Village -->
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">
                                गाँव
                            </label>
                            <input type="text"
                                   name="village"
                                   class="form-control"
                                   placeholder="गाँव का नाम दर्ज करें">
                        </div>

                        <!-- Reason -->
                        <div class="col-md-12">
                            <label class="form-label fw-semibold">
                                जुड़ने का कारण
                            </label>
                            <textarea name="reason"
                                      class="form-control"
                                      rows="3"
                                      placeholder="आप इस अभियान से क्यों जुड़ना चाहते हैं?"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 text-center mt-3">
                            <button type="submit"
                                    class="btn btn-danger px-5 py-2 fw-semibold">
                                अभियान से जुड़ें
                            </button>
                        </div>

                    </div>

                </form>

            </div>
        </div>

    </div>

</section>



     </x-slot>
</x-comman>