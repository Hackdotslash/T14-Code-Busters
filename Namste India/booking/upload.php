<?php

require_once './dbh.inc.php';

if(isset($_POST['submit'])) {
    //$userName = $_SESSION["username"];
    
    $count=$_GET["tour"];
    $curr = $_GET["count"];
    $curr++;
    

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $dDate = $_POST["dDate"];
    $ID = $_POST["ID"];
    

    $file = $_FILES["file"];
  
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpeg', 'jpg', 'png', 'pdf');

    if( in_array($fileActualExt, $allowed)) {
        if($fileError===0){
            if($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $sql =  "INSERT INTO  tourinfo (fName, lName, emailId, contact, gender, dob, dDate,fileCovid, aadharId) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("location: semester.html?error=stmtfailed1");
                    exit();
                }

                mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $email, $contact, $gender, $dob, $dDate, $fileNameNew, $ID );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                if($curr==$count){
                    header("Location: paynow.php");
                    exit();
                }
                header("Location: detail.php?count=$curr&tour=$count");
            }else{
                echo "File Size too big!";
            }

        }else{
          echo "There was an error uploading your file." ;
        }
    }else{
        echo " You Can not upload files of thhis type";

    }
}


?>