<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/wow/css/libs/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>AADPL | Home</title>
</head>
<body>
    <!-- Header -->
    <div class="top-bar">
        <div class="container">
            <div class="d-flex justify-content-between py-3">
                <p>Socail Media</p>
                <p>Socail Media</p>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg" style="margin-top:53px">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h1>Logo</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Markets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Engineering Specialties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News & Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Video Section -->
    <section class="video-section">
        <video src="https://www.haskell.com/wp-content//uploads//2021//04//Home_Broll_hosted.mp4" autoplay muted loop></video>
        <div class="video-overlay">
            <h1>Welcome to AADPL</h1>
            <p>Engineering the future, one project at a time.</p>
            <button class="btn-custom">Learn More</button>
        </div>
    </section>
    
    <!-- Rest of your content -->

    <script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/wow/dist/wow.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
