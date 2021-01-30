<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Go</title>
</head>
<body>
    <form action="yourplan.inc.php" method="POST">
        <?php
        require_once './dbh.inc.php';
        $query = mysqli_query($conn, "SELECT * FROM states");
        $rowCount = mysqli_num_rows($query);
        $state = $_GET["state"];
        $j=0;
        for($i=0;$i<$rowCount;$i++){
            $row = mysqli_fetch_assoc($query);
            if($state === $row["state"]){
                $j++;
        ?>
        <input type="checkbox" name="tour" id="<?php echo $i;?> " value="<?php echo $row["location"]?>"><p style="color:<?php echo $row["cases"]?>"><?php echo $row["location"]?><p>
        <?php
            }
        }
        echo '<script>myFunction()</scipt>';
        echo '<button class="btn" type="button" onclick ="myFunction()">Check Price</button>';?>
        <div id ="ans"></div>
    </form>

    <script>
    var textAnswer;

    function myFunction(){
        alert("gvdf");
        var sum=0;
        var count=0;
        var cars = [];
        for(int i=0; i<6; i++) {
            var cs = i.toString();
            var c = document.getElementById(cs).value;
            if(!(typeof c !== "undefined" && c.value == '')){
                count++;
            }
        }

        var cgpa = count*1000;
        alert(cgpa);
        var h1 = document.createElement('p');
        textAnswer = document.createTextNode('Your CGPA is '+ cgpa+ ' .');
        h1.setAttribute('id', 'cgpa');
        h1.appendChild(textAnswer);
        document.getElementById('ans').appendChild(h1);

    }


</script>
</body>


</html>