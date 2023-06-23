<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisdom Books 📚 -- Login</title>
    <link rel="stylesheet" href=".\login.css">
</head>

<body>
    <div class="container">

        <div class="left">
            <h1>Get Your Best Books Here.</h1>
            <img src="\bookwebsite\logos\study svg.svg" alt="Books Logo" width="500" height="400">

        </div>

        <div class="right">

            <div class="form">
                <h1 id="head">Welcome To Wisdom Book's</br>Login</h1>


                <form action="\bookwebsite\pages\login\login.php" method="POST">

                    <div>
                        <label id="lab" for="email">Email Address</label>
                        <input class="input" type="email" name="email" id="email">
                    </div>


                    <div>
                        <label id="lab" for="pass">Password</label>
                        <input class="input" type="password" name="psw" id="pass">
                    </div>


                    <div>
                        <input class="button" type="submit" Value="Submit">
                    </div>

                    <div>
                        <h3>Don't have an Account?  <a href="\bookwebsite\pages\register\Register.php"><span style="color:rgb(1, 247, 255);display: inline-flex;text-decoration: none;">Create New</span></a></h3>
                        
                    </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------->
                    <?php
                 
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                    
                    //For connecting to database
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $database="bms";
                    
                    $conn=mysqli_connect($servername,$username,$password,$database);
                 
                    $Email=$_REQUEST['email'];
           
                    $Pass=$_REQUEST['psw'];
                    
                    $sql="select * from register where email='$Email' AND password='$Pass'";
                    
                    $result= mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($result);
                    if(!$num==1){
                        echo "Please Sign up";
                    }
                    else{
                   
                        $row=mysqli_fetch_assoc($result);   //it gives one row
                        $Name=$row['full name'];                 //it takes name in that row


                        session_start();
                        $_SESSION['loggedin']=true;
                        $_SESSION['email']=$Email;
                        $_SESSION['name']=$Name;
                        header("location: \bookwebsite\pages\home\home.php ");
                    }
                    }
                    ?>
<!----------------------------------------------------------------------------------------------------------------------->

                </form>
            </div>
        </div>
    </div>

</body>

</html>