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
    <title>Vehicle</title>
</head>
<body>
    <form action="<?php echo "vehicle.inc.php?day=$day&state=$state"?>" method="POST">
        <select name ="vehicle">
            <option value= disabled>CHOOSE MODE OF TRANSPORT</option>
            <option value= "0">BUS</option>
            <option value= "1">Private vehicle</option>
            <option value= "3">FLIGHT</option>
        </select>

        <select name ="hotel">
            <option value= disabled>CHOOSE TYPE OF HOTEL</option>
            <option value= "0">3 star</option>
            <option value= "1">5 star</option>
            <option value= "3">7 star</option>
        </select>
        <input type="number" name="tCount" placeholder="Number of Bookings"><br>
        

        <button type="submit" name="submit">NEXT</button>
    </form>
</body>
</html>