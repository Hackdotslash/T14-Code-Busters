<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        
        header("Location: ../loginsystem/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   .check{
       color:white;
   }
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
        <input class="buton"  type="text" placeholder="First Name" name="fname"><br>
        <input class="buton" type="text" placeholder="Last Name" name="lname"><br>
        <input class="buton" type="email" placeholder="Email" name="email"><br>
        <input class="buton" type="number" placeholder="Contact" name="contact"><br>
        <select class="buton" id="gender"name="gender">
            <option class="buton" value=disabled>--Select Gender--</option>
            <option class="buton" value="MALE">MALE</option>
            <option class="buton" value="FEMALE">FEMALE</option>
        </select><br>
        <input class="buton" type="text" placeholder="DOB (yyyy-mm-dd)" name="dob" ><br>
        <input class="buton" type="text" placeholder="Date of Travelling  (yyyy-mm-dd)" name="dDate"><br>
        
        <input class="buton" type="text" placeholder="ID (adhar/passport)" name="ID"><br>
        <label class="buton" for="file2">Upload COVID report latest by 1 week</label>
        <input class="buton" id = "file2" type="file" name="file"><br>
        <input class="check buton" type="checkbox" value ="1" id="rules" >I have read and agree <a target="_blank" href ="../Covid_guide/ilovepdf_merged (4).pdf" >COVID-19 GUIDELINES</a><br>
        <?php
            if($j == $tCount){
                ?>
                <button class="btn" onclick="read()" type="submit" name="submit">PAY NOW</button>
                <?php
            }else{
                ?>
                 <button class="btn"  type="submit" onclick="read()" name="submit">NEXT</button>
                <?php
            }
        }
        ?>

</form>
<script>
    function read(){
        var rules = document.getElementById('rules');
        if((typeof rules !== "undefined" && rules.value == '')){
            alert('You need to abide by the given rules.');
        }
    }
</script>
    
</body>
</html>