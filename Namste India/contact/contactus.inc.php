<?php
    require_once '../booking/dbh.inc.php';

    if(isset($_POST["submit"])){
        $name= $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["Ask"];

        $sql =  "INSERT INTO  contactus (name, email, comment) VALUES (?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            $curr--;
            header("location: contact.php?error=stmtfailed1");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "sss", $name,$email,$comment);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location : contact.php?error=none");
        exit();
    }
?>