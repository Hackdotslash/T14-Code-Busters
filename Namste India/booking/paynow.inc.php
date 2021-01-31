<?php
    session_start();

    
        $username ="Prince";
        require_once './dbh.inc.php';
        $veh = $_GET["vehicle"];
        $hotel = $_GET["hotel"];
        $day = $_GET["day"];
        $state = $_GET["state"];
        $TouristCount=$_GET["tour"];
        
        $total = (($day*2000)+($veh+$hotel)*1000)*$TouristCount;
        
        $payId = $_GET["bookId"];
        $sql =  "INSERT INTO  booked (username, states, vehChoose, hotelChoose, totalDays , totlaFare, payId) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            
             header("location: plans.php?error=stmtfailed1");
             exit();
        }

        mysqli_stmt_bind_param($stmt, "ssiiiis",$username, $state, $veh, $hotel, $day, $total, $payId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        // $query = mysqli_query($conn, "SELECT * FROM  booked WHERE username='$username' AND state='$state' AND vehChoose='$veh' AND hotelChoose='$hotel AND totalFare='$total' AND date='$date' ;");
        // $row = mysqli_fetch_assoc($query);
        // $id = $row["bookId"];
        header("Location: stripe_php_payment_gateway/index.php?id=$payId");
        exit();
    
?>