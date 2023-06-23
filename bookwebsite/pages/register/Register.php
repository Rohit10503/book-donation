<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisdom Books 📚 --Register</title>
    <link rel="stylesheet" href="./register.css">
   
</head>

<body>
    
    <div class="container">

        <div class="left">
            <h1>Get Your Best Books Here.</h1>
            <img src="\bookwebsite\logos\StackOfBooks2.svg" alt="Books Logo"  width="500" height="400" >
            <h3>Allready have an Account?  <a href="\bookwebsite\pages\login\login.php"><span style="color:rgb(255, 1, 179);display: inline-flex;text-decoration: none;">Login</span></a></h3>
         
        </div>

        <div class="right">
             
            <div class="form">
                <h1 id="head">Welcome To Wisdom Book's</br>Register</h1>

         
            <form action="\bookwebsite\pages\register\Register.php" method="POST">
                <div>
                <label id="lab" for="name">Full Name  </label>
                <input id="name" name="name" class="input" type="text">
            </div>

            <div>
                <label id="lab" for="mobile">Mobile Number</label>
                <input class="input" name="mobile" id="mobile" type="number">
            </div>

            <div>
                <label id="lab" for="email">Email Address</label>
                <input class="input" type="email"  name="email" id="email">
            </div>

            <div>
                <label id="lab" for="dob">Date Of Birth</label>
                <input class="input" type="date" id="dob" name="dob">
            </div>

            <div>
                <label id="lab" for ="pass">Password</label>
                <input class="input" type="password"  id="pass" name="psw">
            </div>

            <div>
                <label id="lab" for="pass1">Confirm Password</label>
                <input class="input" type="password" id="pass1">
            </div>
            <div>
              
              <input type="submit" class="button">
            </div>
            <div>
                
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
            
            <?php
if($_SERVER['REQUEST_METHOD']=='POST'){

//For connecting to database
$servername="localhost";
$username="root";
$password="";
$database="bms";

$conn=mysqli_connect($servername,$username,$password,$database);
$Name=$_REQUEST['name'];
$Mobile=$_REQUEST['mobile'];
$Email=$_REQUEST['email'];
$Dob=$_REQUEST['dob'];
$Pass=$_REQUEST['psw'];
$exists=false;


if($exists==false)
{
$sql="INSERT INTO `register` ( `full name`, `mobile no.`, `email`, `dob`, `password`, `date`) VALUES ('$Name','$Mobile', '$Email', '$Dob', '$Pass', current_timestamp())";

$result= mysqli_query($conn,$sql);
if(!$result){
    echo "Data is not Inserted";
}
else{

    header("Location: \bookwebsite\pages\login\login.php");
}
}
}
?>

<!------------------------------------------------------------------------------------------------------------------------------>

            </form>
        </div>
        </div>
    </div>

</body>

</html>

