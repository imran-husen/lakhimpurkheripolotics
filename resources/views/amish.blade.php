<!DOCTYPE html>
<html lang="hi">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - Dr KM Amish</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="icon" type="image/jpeg" href="{{ asset('Static_image/mainslogo.jpg') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* HERO SECTION */

        .hero-about {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 120px 0;
            text-align: center;
        }

        .hero-about h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .hero-about p {
            font-size: 18px;
            max-width: 750px;
            margin: auto;
        }

        /* SECTION TITLE */

        .section-title {
            font-weight: 700;
            margin-bottom: 20px;
            color: #0d6efd;
        }

        /* TIMELINE */

        .timeline {
            position: relative;
            padding: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 4px;
            height: 100%;
            background: #0d6efd;
        }

        .timeline-item {
            width: 50%;
            padding: 20px 40px;
            position: relative;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-dot {
            position: absolute;
            top: 25px;
            width: 18px;
            height: 18px;
            background: #0d6efd;
            border-radius: 50%;
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: -10px;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: -10px;
        }

        /* ACHIEVEMENT CARDS */

        .achievement-card {
            border: none;
            border-radius: 12px;
            transition: 0.4s;
        }

        .achievement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        /* QUOTE SECTION */

        .quote-section {
            background: #0d6efd;
            color: #fff;
            padding: 70px 0;
            text-align: center;
        }

        .quote-section h4 {
            font-style: italic;
        }

        /* CTA SECTION */

        .cta-section {
            background: #f8f9fa;
            padding: 70px 0;
            text-align: center;
        }

        /* MOBILE RESPONSIVE */

        @media (max-width:768px) {

            .timeline::before {
                left: 20px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 60px;
                text-align: left !important;
            }

            .timeline-item:nth-child(even) {
                left: 0;
            }

            .timeline-dot {
                left: 10px !important;
            }
        }

    </style>

</head>

<body>


<!-- HERO SECTION -->

<section class="hero-about">

    <div class="container">

        <h1>डॉ. के. एम. आमिश</h1>

        <p>
            एक वैज्ञानिक विचारक, सामाजिक चिंतक और शिक्षा के प्रति समर्पित व्यक्तित्व,
            जिनका जीवन समाज, शिक्षा और राष्ट्र निर्माण के लिए समर्पित है।
        </p>

    </div>

</section>


<!-- ABOUT INTRO -->

<section class="py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h2 class="section-title">हमारे बारे में</h2>

                <p>
                    डॉ. के. एम. आमिश एक बहुआयामी व्यक्तित्व हैं जिन्होंने शिक्षा,
                    विज्ञान और समाज सेवा के क्षेत्र में महत्वपूर्ण योगदान दिया है।
                </p>

                <p>
                    एक साधारण किसान परिवार से निकलकर उन्होंने विज्ञान और शोध के क्षेत्र में
                    अपनी पहचान बनाई और युवाओं को प्रेरित करने का कार्य किया।
                </p>

            </div>

            <div class="col-lg-6 text-center">

                <img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e"
                     class="img-fluid rounded shadow"
                     alt="about image">

            </div>

        </div>

    </div>

</section>


<!-- JOURNEY SECTION -->

<section class="py-5 bg-light">

    <div class="container">

        <h2 class="text-center section-title">जीवन यात्रा</h2>

        <div class="timeline">

            <div class="timeline-item">
                <span class="timeline-dot"></span>
                <h5>1991</h5>
                <p>उत्तर प्रदेश के लखीमपुर खीरी जिले में एक किसान परिवार में जन्म।</p>
            </div>

            <div class="timeline-item">
                <span class="timeline-dot"></span>
                <h5>शिक्षा</h5>
                <p>विज्ञान विषयों में उच्च शिक्षा प्राप्त की और नैनो केमिस्ट्री में शोध कार्य किया।</p>
            </div>

            <div class="timeline-item">
                <span class="timeline-dot"></span>
                <h5>शोध कार्य</h5>
                <p>राष्ट्रीय और अंतरराष्ट्रीय सम्मेलनों में भाग लेकर वैज्ञानिक शोध में योगदान दिया।</p>
            </div>

            <div class="timeline-item">
                <span class="timeline-dot"></span>
                <h5>सामाजिक सेवा</h5>
                <p>शिक्षा और समाज सेवा के क्षेत्र में विभिन्न अभियानों का नेतृत्व।</p>
            </div>

        </div>

    </div>

</section>


<!-- ACHIEVEMENTS -->

<section class="py-5">

    <div class="container">

        <h2 class="text-center section-title">प्रमुख उपलब्धियाँ</h2>

        <div class="row g-4 mt-4">

            <div class="col-md-4">

                <div class="card achievement-card p-4 text-center">

                    <h5>वैज्ञानिक शोध</h5>
                    <p>नैनो केमिस्ट्री के क्षेत्र में महत्वपूर्ण शोध कार्य।</p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card achievement-card p-4 text-center">

                    <h5>राष्ट्रीय सम्मेलन</h5>
                    <p>विभिन्न वैज्ञानिक सम्मेलनों में भागीदारी।</p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card achievement-card p-4 text-center">

                    <h5>सामाजिक नेतृत्व</h5>
                    <p>समाज और युवाओं के लिए जागरूकता अभियान।</p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- QUOTE -->

<section class="quote-section">

    <div class="container">

        <h4>
            “शिक्षा, विज्ञान और समाज सेवा ही राष्ट्र निर्माण की सबसे बड़ी शक्ति हैं।”
        </h4>

        <p class="mt-3">— डॉ. के. एम. आमिश</p>

    </div>

</section>


<!-- CTA -->

<section class="cta-section">

    <div class="container">

        <h2>हमारे साथ जुड़ें</h2>

        <p class="mt-3">
            यदि आप भी शिक्षा और समाज सेवा के इस अभियान का हिस्सा बनना चाहते हैं
            तो हमारे साथ जुड़ें।
        </p>

        <a href="https://kmamish.info/Contact-Us" class="btn btn-primary me-2">Join Us</a>

    </div>

</section>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>