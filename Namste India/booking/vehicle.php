<?php
    session_start();
    $day = $_GET["day"];
    $state = $_GET["state"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Vehicle</title>
    
</head>
<style>
   
    body{
        text-align:center;
        background:url(bg.jpg);
    }
    .form{
        margin-top:10%;
    }
    .cls{
        margin-top:10%;
        margin-left: 33%;
    }
    .buton{
        width: 50%;
        background-color:  antiquewhite;
        border: 2px solid rgb(228, 149, 149);
        color: black;
        padding: 15px 32px;
        
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius:5px;
    }
    .btn {
    background-color:  rgb(228, 149, 149);
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:5px;
}
</style>
<body class="container">
    <h1>Namaste INDIA</h1>
    <h4>Fill the details and you are ready to go!!</h4>
    <form class="form" action="<?php echo "vehicle.inc.php?day=$day&state=$state"?>" method="POST">
        <select class="buton" name ="vehicle">
            <option class="buton" value= disabled>CHOOSE MODE OF TRANSPORT</option>
            <option class="buton" value= "0">BUS</option>
            <option class="buton" value= "1">Private vehicle</option>
            <option class="buton" value= "3">FLIGHT</option>
        </select>
        <br>
        <select class="buton" name ="hotel">
            <option class="buton" value= disabled>CHOOSE TYPE OF HOTEL</option>
            <option class="buton" value= "0">3 star</option>
            <option class="buton" value= "1">5 star</option>
            <option class="buton" value= "3">7 star</option>
        </select>
        <br>
        <input type="number" class="buton" name="tCount" placeholder="Number of Bookings"><br>
        

        <button type="submit" class="btn" name="submit">NEXT</button>
    </form>
</body>
</html>