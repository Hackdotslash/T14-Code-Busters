<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table</hl>
    <h2>The provided rating is according to our customer's reviews about covid safety</h2>
    <table>
        <tr>
            <th>State</th>
            <th>Rating</th>
            <th>Last Updated Date And Time</th>
            <th>Total Confirmed Cases</th>
            <th>Total Recovered</th>
            <th>Total Deaths</th>
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
    <!-- echo $coronalive['statewise'][$i]['state'] . "<br>";
    echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
    echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
    echo $coronalive['statewise'][$i]['recovered'] . "<br>";
    echo $coronalive['statewise'][$i]['deaths'] . "<br>"; -->
    <?php
$i++;
}

?>

    </table>
</body>
</html>