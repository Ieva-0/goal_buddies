<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Anonymous Pro', monospace;
        }
        #navbar {
            overflow: hidden;
            color: white;
//            background-color: #6633CC;
            //background-image: url("images/nav.jpg");
            background-image: url("https://i.pinimg.com/originals/5b/77/d9/5b77d996f40898852c9fa05e76597a8a.gif");
        }
        #navbar a {
            float: left;
            display: block;
            text-align: center;
            padding: 20px 50px 20px 50px;
            text-decoration: none;
            font-size: 20px;
            color: white;
        }
        #navbar a:hover {
            background-color: darkslateblue;

        }
        .content {
            padding: 20px 30px 30px 30px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }
        .sticky + .content {
            padding-top: 60px;
        }

        .logo {
            font-weight: bold;
            font-size: 30px;
            padding: 0px;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/feedback">Feedback</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link logo" href="/">GoalBuddies</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
        </li>

    </ul>
</nav>
<div class="content">
    @yield('content')
</div>
<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>
</html>

