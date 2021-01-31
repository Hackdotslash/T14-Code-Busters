<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../menuToggle.css">


    <title>Document</title>
</head>
<body>
<nav role="navigation">
        <div id="menuToggle">
          <!--
          A fake / hidden checkbox is used as click reciever,
          so you can use the :checked selector on it.
          -->
          <input type="checkbox" />
          
          <!--
          Some spans to act as a hamburger.
          
          They are acting like a real hamburger,
          not that McDonalds stuff.
          -->
          <span></span>
          <span></span>
          <span></span>
          
          <!--
          Too bad the menu has to be inside of the button
          but hey, it's pure CSS magic.
          -->
          <ul id="menu">
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../Covid_guide/ilovepdf_merged (4).pdf" target="_blank">Guidlines_covid</a></li>
            <li><a href="../Attraction/attraction.php">Attractions</a></li>
            <li><a href="../contact/contact.php">About Us</a></li>
          </ul>
        </div>
      </nav>
    <h1>Table</hl>
    <h2>The provided rating is according to our customer's reviews about covid safety</h2>
    <table class="table">
        <tr>
            <th  class="first">State</th>
            <th  class="first">Rating</th>
            <th class="first">Last Updated Date And Time</th>
            <th class="first">Total Confirmed Cases</th>
            <th  class="first">Total Recovered</th>
            <th  class="first">Total Deaths</th>
        </tr>
<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);
 
$statescount=count($coronalive['statewise']);
$i=1;
while($i<$statescount) {
    ?>
    <tr>
        <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
        <td><?php echo 5?></td>
        <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
        <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
        <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
        <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>



    </tr>
    
    <?php
$i++;
}

?>

    </table>
</body>
</html>