<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Button Example</title>
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
        font-size: 20px;
        justify-content: center;
        line-height: 1em;
        max-width: 100%;
        min-width: 140px;
        padding: 3px;
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
        padding: 16px 24px;
        border-radius: 6px;
        width: 100%;
        height: 100%;
        transition: background-color 300ms;
    }

    .custom-button:hover span {
        background-color: transparent;
    }

    @media (min-width: 768px) {
        .custom-button {
            font-size: 24px;
            min-width: 196px;
        }
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
    <a class="navbar-brand" href="#">User's menu</a>
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

<div class="container mt-4">
    <h2>Select an Option</h2>
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
           <center> <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block custom-button" onclick="window.location.href='hotels_show.php'"><span class="text">Hotels</span></button><br>
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block custom-button" onclick="window.location.href='resturants_show.php'"><span class="text">Restaurants</span></button><br>
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block custom-button" onclick="window.location.href='taxis_show.php'"><span class="text">Taxis</span></button></center>
        </div>
    </div>
</div>

</body>
</html>
