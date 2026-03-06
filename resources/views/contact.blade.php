<x-comman>
  <x-slot name="title">लोकसभा धौरहरा, खीरी - महत्वपूर्ण मांगें</x-slot>

  <x-slot name="bodycode">

  <!-- This is the code of the main body -->
   <!-- Contact Section -->
<section class="contact-section py-5 bg-light">

    <div class="container">

        <!-- Top Heading -->
        <div class="text-center mb-5">

            <h2 class="fw-bold" style="font-family:'Poppins',sans-serif;">
                हमसे संपर्क करें
            </h2>

            <p class="text-muted mx-auto" style="max-width:700px;">
                यदि आपको किसी भी प्रकार की जानकारी चाहिए, कोई सुझाव देना चाहते हैं
                या किसी समस्या का समाधान चाहते हैं तो नीचे दिया गया फॉर्म भरकर
                हमसे सीधे संपर्क कर सकते हैं।
            </p>

        </div>

        @if(session('success_contact'))
<div class="alert alert-success">
    {{ session('success_contact') }}
</div>
@endif


        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card shadow border-0 p-4 rounded-4">
<form action="{{ route('contact.save') }}" method="POST">

    @csrf

    <div class="row g-3">

        <!-- Name -->
        <div class="col-md-6">

            <label class="form-label fw-semibold">
                आपका नाम
            </label>

            <input 
                type="text"
                name="name"
                class="form-control"
                placeholder="अपना पूरा नाम दर्ज करें"
                required>

        </div>


        <!-- Mobile -->
        <div class="col-md-6">

            <label class="form-label fw-semibold">
                मोबाइल नंबर
            </label>

            <input 
                type="tel"
                name="mobile"
                class="form-control"
                placeholder="10 अंकों का मोबाइल नंबर"
                required>

        </div>


        <!-- Subject -->
        <div class="col-12">

            <label class="form-label fw-semibold">
                विषय
            </label>

            <input
                type="text"
                name="subject"
                class="form-control"
                placeholder="आप किस विषय में संपर्क करना चाहते हैं"
                required>

        </div>


        <!-- Message -->
        <div class="col-12">

            <label class="form-label fw-semibold">
                संदेश
            </label>

            <textarea
                name="message"
                class="form-control"
                rows="4"
                placeholder="अपना संदेश यहाँ लिखें..."
                required></textarea>

        </div>


        <!-- Button -->
        <div class="col-12 text-center mt-3">

            <button type="submit" class="btn btn-primary px-4 py-2">
                संदेश भेजें
            </button>

        </div>

    </div>

</form>

                </div>

            </div>

        </div>


        <!-- Social Media Section -->
        <div class="text-center mt-5">

            <h5 class="fw-semibold mb-3">
                सोशल मीडिया पर हमसे जुड़ें
            </h5>

            <div class="d-flex justify-content-center gap-4">

                <a href="#" class="text-dark fs-4">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="#" class="text-dark fs-4">
                    <i class="fab fa-youtube"></i>
                </a>

                <a href="#" class="text-dark fs-4">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="#" class="text-dark fs-4">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#" class="text-dark fs-4">
                    <i class="fab fa-whatsapp"></i>
                </a>

            </div>

        </div>

    </div>

</section>

  </x-slot>
</x-comman>