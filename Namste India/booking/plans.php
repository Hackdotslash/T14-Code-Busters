<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="plans.css">
    <link rel="stylesheet" type="text/css" href="../src/css/menuToggle.css">

<style>
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
}.buy {
  background-color:  rgb(228, 149, 149);
  padding-top:40%;
  height:50px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-right:23.5%;
  float:right;
  border-radius:5px;
}
.xyz{
    border:5px ridge rosybrown;
    width: 100%;
    height: 50px;
    background-color: rgb(228, 149, 149);
    font-size: xx-large;
    text-align: center;
}

</style>
</head>
<body>
  <?php 
    $numberOfDays= array("1 Day", "2 Days", "4 Days", "5 Days", "7 Days");
  ?>
      
      <h1>Select Your Plan</h1>
      
      <div class="container">
      <h2>Recommended Plans</h2>
      <h4>Orange -> orange zone<br>Green -> green zone<br> Red zones are not recommended. </h4>
        <div class="tab-wrap">
          
          <?php 
           require_once 'dbh.inc.php';
           
              for($i=0; $i<count($numberOfDays);$i++) {
            ?>
                <input type="radio" id="tab<?php echo $i;?>" name="tabGroup2" class="tab" checked>
                <label for="tab<?php echo $i;?>"><?php echo $numberOfDays[$i];?></label>
                <div class="tab__content">
              <ul>
           <?php
              $state = $_GET["state"];
              $query = mysqli_query($conn, "SELECT * FROM states WHERE state='$state'");

              for($j=0;$j<($i +1)*2;$j++){
                $row = mysqli_fetch_assoc($query);
                if($row["cases"] !== "red"){
                  ?>
                  <li style="color:<?php echo $row["cases"]?>"><?php echo $row["location"]."--".$row["district"]?></li>
                  <?php
                }
              }
            ?>
            </ul>
            
            <br><a href="vehicle.php?day=<?php echo ($i+1); ?>&state=<?php echo $state?>" class="btn"><?php echo "Package Price:".($i+1)*2000 ;?> INR</a>
           
            
            </div>
            <?php
            }            
            ?>
        </div>
      
        <a href="yourPlan.php?state=Kerela" class="buy">MAKE YOUR OWN CUSTOMISED PLANS </a>
        
      
</body>
</html>