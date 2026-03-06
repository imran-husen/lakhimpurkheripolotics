<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- This is the code of the favicons -->
    <link rel="icon" type="image/jpeg" href="{{ asset('Static_image/mainslogo.jpg') }}">

  <style>
    body {
        background: linear-gradient(135deg,#0d6efd,#6610f2);
        min-height: 100vh;
        display: flex;
        align-items: center;
        font-family: 'Poppins', sans-serif; /* Added font */
    }

.login-card {
    border-radius: 15px;
}

.rotate-img-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    perspective: 1000px; /* 3D perspective */
}

.rotate-img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    animation: rotateY 3s linear infinite;
}

@keyframes rotateY {
    0% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(360deg);
    }
}
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-10">
            <div class="card login-card shadow-lg">
                <div class="card-body p-4">

                    <!-- Circular rotating image -->
                    <div class="rotate-img-container">
                        <img src="{{ asset('Static_image/mainslogo.jpg') }}" alt="Admin" class="rotate-img">
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button class="btn btn-primary w-100">Login</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
