<?php
session_start();
$serial=$_SESSION['serial_no'];
$conn=mysqli_connect("localhost","root","","bms");

//getting the serial no. of itself from register table
$useremail=$_SESSION['email'];
$sql1="select * from `register` where `email`='$useremail'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
$serialitself=$row1['serial no.'];   



$sql="UPDATE `users-books` SET `grant`='1' , `received`='$serialitself' where `serial no.`='$serial' ;";
$result=mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acknowledgement</title>
</head>
<body>
    <script>
        let res = confirm("We will show you this books inside carts once donor agree .");
        if(Boolean(res)!=true)
        {
           
            <?php 
            header("location: \bookwebsite\pages\book-view\book_view.php");
            ?>
       
        }
    </script>
</body>
</html>