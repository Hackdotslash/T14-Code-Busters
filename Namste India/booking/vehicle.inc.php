<?php
session_start();
?>
<?php
    session_start();

    if(isset($_POST["submit"])){
        echo 1;
        $veh = $_POST["vehicle"];
        $hotel = $_POST["hotel"];
        $tcount = $_POST["tCount"];
        $pay = $_GET["day"];
        $state = $_GET["state"];
        

        header("Location: detail.php?day=$pay&vehicle=$veh&hotel=$hotel&state=$state&tour=$tcount&count=0");
        exit();
        
    }else{
        echo 2;
    }
?>