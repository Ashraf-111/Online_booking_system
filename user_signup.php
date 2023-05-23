<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>User Registration</title>
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">User Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <h2>User Registration Form</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="custom-button" name="submit" class="btn btn-primary"><span class"text"> Register</span></button>
        </form>
        <?php
        if(isset($_POST['submit'])){
            require './db_connection.php';

            $name = $_POST['name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];

          
            $stmt = $conn->prepare("INSERT INTO users (name, age, phone, email, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sisss", $name, $age, $phone, $email, $password);

            
            if($stmt->execute()){
                echo '<div class="alert alert-success" role="alert">User registered successfully.</div>';
            }
            else{
                echo '<div class="alert alert-danger" role="alert">Error: Unable to register user.</div>';
            }

           
            $conn->close();
        }
        ?>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
