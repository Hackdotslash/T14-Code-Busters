<?php
    session_start();
    // if (!isset($_SESSION['username'])) {
    //     header("Location: ../loginsystem/index..php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $tCount = $_GET["tour"];
        $curr = $_GET["count"]; 
        $veh = $_GET["vehicle"];
        $hotel = $_GET["hotel"];
        $pay = $_GET["day"];
        $state = $_GET["state"];
        $bookId =uniqid();
        
        
        ?>

    <h2>If found covid positive, YOUR BOOKING WILL BE CANCELLED</h2>
    <form action="<?php echo "upload.php?tour=$tCount&count=$curr&day=$pay&vehicle=$veh&hotel=$hotel&state=$state&bookId=$bookId";?>" method="POST" enctype="multipart/form-data">
        <?php
        
        for($i=$curr;$i<($curr+1) and $i<$tCount;$i++){
            $j=$i+1;
            echo "DETAIL OF PERSON ".$j;
        ?>
        <br>
        <input type="text" placeholder="First Name" name="fname"><br>
        <input type="text" placeholder="Last Name" name="lname"><br>
        <input type="email" placeholder="Email" name="email"><br>
        <input type="number" placeholder="Contact" name="contact"><br>
        <label for="gender"> Gender</label>
        <select id="gender"name="gender">
            <option value=disabled>--Select--</option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
        </select><br>
        <input type="text" placeholder="DOB (yyyy-mm-dd)" name="dob" ><br>
        <input type="text" placeholder="Date of Travelling  (yyyy-mm-dd)" name="dDate"><br>
        
        <input type="text" placeholder="ID (adhar/passport)" name="ID"><br>
        <label for="file2">Upload COVID report latest by 1 week</label>
        <input id = "file2" type="file" name="file"><br>
        <?php
            if($j == $tCount){
                ?>
                <button type="submit" name="submit">PAY NOW</button>
                <?php
            }else{
                ?>
                 <button type="submit" name="submit">NEXT</button>
                <?php
            }
        }
        ?>

</form>
    
</body>
</html>