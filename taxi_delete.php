<!DOCTYPE html>
<html>
<head>
    <title>Delete Taxi</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
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
<div class="container mt-4">
    <h2>Delete Taxi</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="taxiId">Taxi ID:</label>
            <input type="number" class="form-control" id="taxiId" name="taxiId" required>
        </div>
        <button type="submit" name="delete" class="custom-button" class="btn btn-danger" onclick="window.location.href = 'admins_screen.php'"><span class="text">Delete Taxi</span></button>
    </form>
</div>

<?php
if(isset($_POST['delete'])){
    $taxiId = $_POST['taxiId'];

  
    require './db_connection.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("DELETE FROM taxis WHERE id = ?");
    $stmt->bind_param("i", $taxiId);

   
    if($stmt->execute()){
        echo '<div class="container mt-3">
                <div class="alert alert-success" role="alert">Taxi deleted successfully.</div>
              </div>';
    }
    else{
        echo '<div class="container mt-3">
                <div class="alert alert-danger" role="alert">Error: Unable to delete taxi.</div>
              </div>';
    }

  
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
