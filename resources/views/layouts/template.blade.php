
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="IoP2uqkSPLfdskAKDBFPQqPGU9Pg99lZXvAPfFdO">
<title>  VMIS</title>

<script src="https://hrms.depedbohol.org/js/app.js" defer></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
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

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link href="https://hrms.depedbohol.org/css/app.css" rel="stylesheet">
<style>
    #container {
        width: 100%;
        height: 100%;
    }

    #container img {
        width: 100%;
    }
</style>
</head>
<body class="hold-transition sidebar-collapse layout-fixed layout-footer-fixed layout-navbar-fixed">
<div class="wrapper" id="app">
<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top ">
<a class="navbar-brand" href="#">
<img src="img/Logo.png" alt="Logo" style="width:30px;">
Vehicle Management Information System
</a>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="http://127.0.0.1:8000/admin">Login</a>
</li>
</ul>
</nav>
  @yield('content')
<footer class="main-footer">
<div class="float-right d-none d-sm-inline">
Developed by VMIS Researcher.
</div>
<strong>Copyright &copy; 2024 <a href="#">VMIS</a>.</strong> All rights reserved.
</footer> </div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"866942c63c818d08","r":1,"version":"2024.3.0","token":"43dfbf3da32d4c0f9e53290463e5cf9c"}' crossorigin="anonymous"></script>
</body>
</html>
