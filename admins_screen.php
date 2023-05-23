<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Admin's menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="fade-in">
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
        padding: 15px 20px; 
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin's menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h2>Select an Option</h2>
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
           <center> <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='users_admins_screen.php'"><span class="text">Users</span></button>.
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='hotels.php'"><span class="text">Hotels</span></button>.
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='hotel_delete.php'"><span class="text">Hotels Deletion</span></button>.
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='resturants.php'"><span class="text">Restaurants</span></button>.
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='resturant_delete.php'"><span class="text">Restaurants Deletion</span></button>.
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='taxis.php'"><span class="text">Taxis</span></button>.
            <button type="button" class="custom-button" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='taxi_delete.php'"><span class="text">Taxis Deletion</span></button>
</center>
        </div>
    </div>
</div>

</body>
</html>
