<!---------------------------------------------------------------------------------->

<?php

$conn=mysqli_connect("localhost","root","","bms");
session_start();
$email=$_SESSION['email'];
$sql="SELECT * FROM `users-books` where `useremail`='$email' and `grant`='1' ";
$result=mysqli_query($conn,$sql);

$num =mysqli_num_rows($result);
/*
for($i=0;$i<$num;$i++){
    $row=mysqli_fetch_assoc($result);
    $serialno=$row['received'];
    $sql1="Select * from `register` where `serial no.`='$serialno'";
    $result1=mysqli_query($conn,$sql1);
    $r=mysqli_fetch_assoc($result1);
    echo $r['full name'];
    echo "</br>";
}
  */  
  $flag=false;
?>

<?php
/*
if(isset($_POST['accept']))
{
    
    echo ' 
    <script>alert("Accepted Alerted");</script>
    ';
$sql="select * from  ";

}*/
?>


















<!----------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisdom Books 📚 -- Books Requset</title>
    
    <link rel="stylesheet" href="\bookwebsite\pages\view-request\book-request.css">
    
</head>
<body>
    <style>
        .mainbody{
            background-color:rgb(255, 202, 103);
        }
        table{
            background-color:rgb(255 217 117);
            border-collapse: collapse;
            text-align:center;
            border :1px solid white;
        
        }
        th{
            padding:1rem 4rem;
         

        }
       
        .middle{
    
            justify-content: center;
            padding: 4rem;
        }
        .book-img{
            height:100px;
            padding:6px;
        }
        .bottom{
            color:white;
            font-size: 26px;
            text-align: center;
            margin-bottom: 0px;
            padding:  12px;
            background-color: rgb(255, 166, 0);
        }


    </style>

      

   <div class="top">
            <div class="navbar">

                <div class="nav-left">
                <a href="\bookwebsite\pages\home\home.php"><img style="margin-left:40px;"
                        src="\bookwebsite\logos\weblogo.png" alt="website Logo" height="80px"></a>
                </div>

                <div class="nav-middle">
                    <form action="">
                        <input class="nav-search" type="text" placeholder="Search..">
                    </form>
                </div>

                <div class="nav-right">
                    <div class="nav-utils-books">Books
                        <div class="dropdown-content">
                        <a href="\bookwebsite\pages\view-request\book-request.php"> View Request</a>
                            <a href="#">Renowned Books</a>
                            <a href="\bookwebsite\pages\users-books\userbook.php">Other's Books</a>

                        </div>
                    </div>
                    <div class="nav-utils"><a href="\bookwebsite\pages\carts\carts.php" class="nav-utils-books" >Carts</a>   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg> </div>


                </div>
                <div class="nav-right-but">
                    <div class="one">
                        <form action="\bookwebsite\pages\home\logout.php">
                            <input type="submit" class="butt" value="Logout">
                        </form>
                    </div>
                </div>

            </div>



        </div>
   

<div class="mainbody">
    
        <?php
        if($num<1)
        {
          
           echo '<div class="head"  >
           <h1 >Still Nobody Requested Your Books.</h1>
           </div>
           
           
           <div class="img-field">
           <div class="img"><img height="300" class="anime" src="\bookwebsite\logos\empty-cart.svg" alt=""></div>
        </div>
           <div class="bottom">
           <span>Developed By <strong> RohitKumar B. Pandey</strong></span>
       </div>
       
       ';
           exit;
        }
        ?>


    <div class="middle">
        <div class="table">
            <table border="2px " class="table"  >
                <tr>
                    <th>Book Image</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Requestor Name</th>
                    <th>Accept</th>
                    <th>Reject</th>
                    </tr>

                    <?php

                        for($i=0;$i<$num;$i++){
                            $row=mysqli_fetch_assoc($result);
                        
                          /*  $serialno=$row['received'];
                            $sql1="Select * from `register` where `serial no.`='$serialno'";
                            $result1=mysqli_query($conn,$sql1);
                            $r=mysqli_fetch_assoc($result1);
                            echo $r['full name'];
                            echo "</br>";
                        */
                              


                echo '<tr>
                    <td>  <img class="book-img"
                    src="/bookwebsite/pages/donation/'.$row['book_image']. '"
                    alt=" Book Image">
              
                    </td>

                <td>'.$row['book_name'] .' </td>

                <td>'.$row['author_name'] .'</td>';
                
                $serialno=$row['received'];
                $sql1="Select * from `register` where `serial no.`='$serialno'";
                $result1=mysqli_query($conn,$sql1);
                $row1=mysqli_fetch_assoc($result1);
                

                echo '<td> '.$row1['full name'].'</td>
                <td>
                <form method="post" >
                <input type="submit" value="Accept" name="accept'.$i.'">
                </form> 
          
                </td>';
              
                if(isset($_POST['accept'.$i.'']))
                    {
                        
                      
                       //yeh jo $row likha hu na ,isme data for loop ke karan aate hai
                        $username=$row1['full name'];
                        $useremail=$row1['email'];
                        $bookname=$row['book_name'];
                        $authorname=$row['author_name'];
                        $desc=$row['book_description'];
                        $bookimage=$row['book_image'];
                        $sql2="INSERT INTO `cart` (`book_image`,`username`, `useremail`, `book_name`, `author_name`, `book_description`, `date`) VALUES ('$bookimage','$username', '$useremail', '$bookname', '$authorname', '$desc', current_timestamp())";
                        $result2=mysqli_query($conn,$sql2);
                        if($result2)
                        {   $bookserial=$row['serial no.'];
                            $sql3="delete from `users-books` where `serial no.`='$bookserial'";
                            $result3=mysqli_query($conn,$sql3);
                        }
                        
                        if($result3)
                        {
                         echo ' 
                        <script>
                        Alert("Hurray! Book is donated ");
                       
                        </script>
                        ';
                        sleep(0.5);
                        }
                        
                    }

               echo' <td>
                    <form method="post">
                    <input type="submit" value="Reject" name="reject'.$i.'">
                    </form>
                </td>                
                </tr>';

                if(isset($_POST['reject'.$i.'']))
                {
                    $bookserial=$row['serial no.'];
                    $sql4="update `users-books` set `grant`=0,`received`=0 where `serial no.`='$bookserial' ";
                    $result4=mysqli_query($conn,$sql4);
                    if($result4)
                    {
                       
                        echo ' 
                        <script>
                        alert("Book '.$row['book_name'].' request is denied "))
                        
                        
                        </script>
                        
                        ';
                        sleep(0.5);
                        
                  }
                   
                  
                }
                

                        }
                       // echo "<meta http-equiv='refresh' content='0'>"; // form refresh code
                       // echo'<script>location.reload();</script>';
                       
                    ?>
            </table>
        </div>
    </div>
</div>
<div class="bottom">
     <span>Developed By <strong> RohitKumar B. Pandey</strong></span>
</div>



</body>





</html>