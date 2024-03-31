
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
<title> Home</title>
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
    }
</style>
</head>
<body class="hold-transition sidebar-collapse layout-fixed layout-footer-fixed layout-navbar-fixed">
    <div class="wrapper" id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="/">Vehicle Management Information System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('layouts.about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('layouts.contactus') }}">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
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
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h2 class="display-5 fw-bolder text-white mb-2">Vehicle Management Information System</h2>
                                <p class="lead fw-normal text-white-50 mb-4">San Agustin National High School</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="http://127.0.0.1:8000/login">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="{{ route('layouts.about') }}">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/sanhs logo png.png" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"We strive for excellence"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="fw-bold">
                                       -Reserchers
                                        <span class="fw-bold text-primary mx-1"></span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <footer class="main-footer">
<div class="float-right d-none d-sm-inline">
Developed by VMIS Researcher.
</div>
<strong>Copyright &copy; 2024 <a href="#">VMIS</a>.</strong> All rights reserved.
</footer> </div>
</body>
</html>
