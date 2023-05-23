<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Online Booking System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            min-height: 100vh;
            background-image: url("https://www.moviehdwallpapers.com/wp-content/uploads/2014/10/Vector-HD-wallpaper-1920x1080-14.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .fade-in {
                animation: fade-in 1.5s ease-in-out;
                
        }

        @keyframes fade-in {
        from {opacity: 0;} 
        to {opacity: 1;}
        }


        div {
            color: #727272;
            text-align: center;
        }
        h2
        {
            color:#eeeeee;

        }
        p {
            margin: 16px;
            font-size: 96px;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            transition: all 1s ease-in-out;
            position: relative;
        }

        p::before {
            content: attr(data-item);
            transition: all 1s ease-in-out;
            color: #bef8fc;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 0;
            overflow: hidden;
        }

        p:hover::before {
            width: 100%;
        }

        nav {
            margin: 0;
            padding: 16px;
            background: #f9f9f9;
            position: fixed;
            top: -238px;
            left: 0;
            right: 0;
            z-index: 100;
        }

        .menuItems {
            list-style: none;
            display: flex;
        }

        .menuItems li {
            margin: 50px;
        }

        .menuItems li a {
            text-decoration: none;
            color: #8f8f8f;
            font-size: 24px;
            font-weight: 400;
            transition: all 0.5s ease-in-out;
            position: relative;
            text-transform: uppercase;
        }

        .menuItems li a::before {
            content: attr(data-item);
            transition: 0.5s;
            color: #8254ff;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 0;
            overflow: hidden;
        }

        .menuItems li a:hover::before {
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        footer {
            position: absolute;
            font-size: 12px;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            font-size: 14px;
            background-color: #f1f1f1;
            color: #000000;
            text-align: center;
        }

        footer a {
            text-decoration: none;
            color: inherit;
            border-bottom: 1px solid;
        }

        footer a:hover {
            border-bottom: 1px transparent;
        }
    </style>
</head>
<body class="fade-in">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Online Booking System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./signin.php">Sign In</a>
            </li>
           
        </ul>
    </div>
</nav>

<div class="container">
    <h2>Online Booking System</h2>
    <p data-item="welcome">Welcome</p>
</div>


<footer>
    <div class="footer-copyright text-center">
        &copy; Developed with <i class="fa fa-heart">❤️</i> by
        <a href="https://ashraf-111.github.io/" class="white-text" target="_blank">Ashraf Imad</a> and Eman Dlshad
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
