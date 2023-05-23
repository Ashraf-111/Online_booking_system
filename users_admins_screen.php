<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>User and Admin List</title>
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
        .fade-in {
                animation: fade-in 1.5s ease-in-out;
                
        }

        @keyframes fade-in {
        from {opacity: 0;} 
        to {opacity: 1;}
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">User and Admin List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="admins_screen.php">Home</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h2>User and Admin List</h2>
    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Users</h4>
            <ul class="list-group">
                <?php
                require './db_connection.php';

               
                $userQuery = "SELECT * FROM users";
                $userResult = $conn->query($userQuery);

                if ($userResult->num_rows > 0) {
                    while ($user = $userResult->fetch_assoc()) {
                        echo '<li class="list-group-item">' . $user["name"] . ' - ' . $user["email"] . '</li>';
                    }
                } else {
                    echo '<li class="list-group-item">No users found.</li>';
                }

             
                $userResult->close();
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Admins</h4>
            <ul class="list-group">
                <?php
                
                $adminQuery = "SELECT * FROM admin";
                $adminResult = $conn->query($adminQuery);

                if ($adminResult->num_rows > 0) {
                    while ($admin = $adminResult->fetch_assoc()) {
                        echo '<li class="list-group-item">' . $admin["name"] . ' - ' . $admin["email"] . '</li>';
                    }
                } else {
                    echo '<li class="list-group-item">No admins found.</li>';
                }

               
                $adminResult->close();

                
                $conn->close();
                ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
