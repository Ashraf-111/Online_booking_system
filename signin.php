<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            background-image: url("https://www.moviehdwallpapers.com/wp-content/uploads/2014/10/Vector-HD-wallpaper-1920x1080-14.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
         
    .custom-button {
        align-items: center;
        background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
        border: 0;
        border-radius: 8px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-family: Phantomsans, sans-serif;
        font-size: 16px; 
        justify-content: center;
        line-height: 1em;
        padding: 2px; 
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
    }

    .custom-button:active,
    .custom-button:hover {
        outline: 0;
    }

    .custom-button span {
        background-color: rgb(5, 6, 45);
        padding: 8px 12px; 
        border-radius: 6px;
        width: 100%;
        height: 100%;
        transition: 300ms;
    }

    .custom-button:hover span {
        background: none;
    }
    .fade-in {
                animation: fade-in 1.5s ease-in-out;
                
        }

        @keyframes fade-in {
        from {opacity: 0;} 
        to {opacity: 1;}
        }

    </style>
</head>
<body class="fade-in">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">User Login</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h2>User Login</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="custom-button" name="login" class="btn btn-primary"><span class="text">Login</span></button>
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['login'])){
    require './db_connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $userQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $userResult = $conn->query($userQuery);

    if ($userResult->num_rows > 0) {
       
        header("Location: user_home.php"); 
        exit();
    } else {
       
        $adminQuery = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $adminResult = $conn->query($adminQuery);

        if ($adminResult->num_rows > 0) {
          
            header("Location: admins_screen.php");
            exit();
        } else {
            echo '<div class="container mt-3">
                    <div class="alert alert-danger" role="alert">Invalid email or password.</div>
                  </div>';
        }
    }

    $conn->close();
}
?>

