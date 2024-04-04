
<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://hrms.depedbohol.org/css/app.css" rel="stylesheet">
<script src="https://hrms.depedbohol.org/js/app.js" defer></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="IoP2uqkSPLfdskAKDBFPQqPGU9Pg99lZXvAPfFdO">
<title>  About Us</title>
<script type="text/javascript">
    tinymce.init({
        selector: '#mytextarea-post',
        branding: false,
        menubar: false,
        plugins: 'link image table',
        contextmenu: 'link image table',
        block_unsupported_drop: false,
    });
</script>
<script type="text/javascript">
    tinymce.init({
        selector: '#mytextarea-vacancy',
        branding: false,
        menubar: false,
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
    });
</script>
<style>
    #container {
        width: 100%;
        height: 100%;
    }

    #container img {
        width: 100%;
    }
    h1 {
        text-align: Center;
        display: flex;
        justify-content: center;
    }
</style>
</head>
<body class="hold-transition sidebar-collapse layout-fixed layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper" id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('layouts.home') }}">VMIS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('layouts.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('layouts.about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('layouts.contactus') }}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
  @yield('content')
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3">Our Story</h1>
                                <p class="lead fw-normal text-muted mb-4">Dedication, Excellence, And Success</p>
                                <a class="btn btn-primary btn-lg" href="#scroll-target">Read Our Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="assets/p2.png" alt="..." /></div>
                        <div class="col-lg-6">
                            <h1 class="fw-bolder">Who are we?</h1>
                            <p class="lead fw-normal text-muted mb-0">We are a group of Grade 12 senior high school students from San Agustin National High School, 
                                situated in San Agustin, Sagbayan, Bohol. Our focus mainly lies within the dynamic field of Information 
                                Communication & Technology (ICT), with the aim of implementing  our system for our research endeavors while supporting SANHS vehicle management operations
                                 during the academic year of 2023-2024.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="assets/p5.png" alt="..." /></div>
                        <div class="col-lg-6">
                            <h1 class="fw-bolder">What is our objective?</h1>
                            <p class="lead fw-normal text-muted mb-0">San Agustin National High School used the traditional manual system to 
                                manage the vehicle information on  the permitted vehicle owners, catering the creation, deletion, viewing, and updating of the information
                                In this case of utilizing the manual system, discrepancies are more likely to be encountered such as data losses, and data errors, 
                                since the process revolves on manual labor
                                The VMIS would transition the current manual data management to a software-based system, enhancing the practicality in terms of accessibility and 
                                management processes, implementing and enhancing the features into a web-based implementation. 
                               </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Research Members</h2>
                        <p class="lead fw-normal text-muted mb-5">Dedication, Excellence, And Success</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="img/i1.png" alt="..." />
                                <h5 class="fw-bolder">Russell Saniel</h5>
                                <div class="fst-italic text-muted">Research Leader</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="img/i2.png" alt="..." />
                                <h5 class="fw-bolder">Monique Cantarona</h5>
                                <div class="fst-italic text-muted">Research Member</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
  <footer class="main-footer">
<div class="float-right d-none d-sm-inline">
Developed by VMIS Researcher.
</div>
<strong>Copyright &copy; 2024 <a href="#">VMIS</a>.</strong> All rights reserved.
</footer> </div>
</body>
</html>
