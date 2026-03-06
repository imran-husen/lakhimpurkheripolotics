<x-comman>
  <x-slot name="title">लोकसभा धौरहरा, खीरी - महत्वपूर्ण मांगें</x-slot>

  <x-slot name="bodycode">

  <!-- This is the code of the main body --> 
   @if(session('success_donation'))
    <div class="alert alert-success">
    {{ session('success_donation') }}
    </div>
    @endif 

<div class="container py-5">

<div class="card donation-card shadow-lg p-4">

<h3 class="text-center form-title mb-3">
दान सहयोग फॉर्म
</h3>

<p class="text-center text-muted mb-4">
आपका छोटा सा योगदान भी समाज में बड़ा बदलाव ला सकता है।
</p>

<!-- QR CODE -->
<div id="qrSection" class="qr-box">
<h6 class="mb-3">UPI QR Code Scan करके भुगतान करें</h6>
<img src="Static_image/paymentqr.jpeg" alt="UPI QR Code">
</div>
<form action="{{ route('donation.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="row g-3">

<div class="col-md-6">
<label class="form-label">पूरा नाम</label>
<input type="text" name="name" class="form-control" placeholder="अपना नाम लिखें" required>
</div>

<div class="col-md-6">
<label class="form-label">जिला</label>
<input type="text" name="district" class="form-control" placeholder="अपना जिला लिखें" required>
</div>

<div class="col-md-6">
<label class="form-label">ब्लॉक</label>
<input type="text" name="block" class="form-control" placeholder="अपना ब्लॉक लिखें" required>
</div>

<div class="col-md-6">
<label class="form-label">मोबाइल नंबर</label>
<input type="tel" name="mobile" class="form-control" placeholder="10 अंकों का मोबाइल नंबर" required>
</div>

<div class="col-12">
<label class="form-label">दान राशि (₹)</label>
<input type="number" name="amount" class="form-control" placeholder="दान की राशि लिखें" required>
</div>

</div>

<hr class="my-4">

<h5 class="text-center mb-3">भुगतान का तरीका चुनें</h5>

<div class="d-flex gap-3 justify-content-center flex-wrap mb-4">

<a href="upi://pay?pa=9918422098@ybl&pn=Donation&cu=INR"
   class="btn btn-success px-4">
   UPI से भुगतान करें
</a>

<button type="button" onclick="showQR()" class="btn btn-primary px-4">
QR Code
</button>

</div>

<div class="mb-4">

<label class="form-label">
भुगतान का स्क्रीनशॉट अपलोड करें
</label>

<input type="file" name="screenshot" class="form-control" required>

</div>

<button type="submit" class="btn btn-primary w-100">
फॉर्म सबमिट करें
</button>

</form>
</div>
</div>
<script>

function showQR(){
document.getElementById("qrSection").style.display="block";
window.scrollTo({top:0,behavior:'smooth'});
}

</script>
  
  </x-slot>
</x-comman>