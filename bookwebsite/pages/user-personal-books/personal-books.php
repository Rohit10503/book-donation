<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisdom Books 📚 -- Personal books</title>
  <link rel="stylesheet" href="\bookwebsite\pages\user-personal-books\personal-books.css">
</head>

<body>


  <!-----------------------------------------------------------------------------
  <?php
 
   $servername="localhost";
   $username="root";
   $password="";
   $database="bms";
   
   $conn=mysqli_connect($servername,$username,$password,$database);
   session_start();
   $name=$_SESSION['name'];
   $email=$_SESSION['email'];


    $sql="SELECT * FROM `users-books` where username='$name' and useremail= '$email'";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "gadbad hai";
    }else{

      $num=mysqli_num_rows($result); 
    
      //for($i=0;$i<$num;$i++)
      //{
     //   $row=mysqli_fetch_assoc($result);
     // echo $row['book_name'] ;
      //echo " </br>"; 
      //}
    }
    
     ?>
------------------------------------------------------------------------------------------->


  
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
  <div class="middle">
    <div class="mid-head">
      <h1>Your Best Books Are Here</h1>
    </div>

    <div class="books-field">
      <div class="row">              
      <?php                       //breaking php like this instead of spliting '. text .'
          for($i=0;$i<$num;$i++)
          {
            $row=mysqli_fetch_assoc($result);
          
            
            echo '<div class="columns">
              <div class="card">
                <img class="book-img"
                    src="/bookwebsite/pages/donation/'.$row['book_image']. '"
                    alt=" Shreemad Bhagvat Geeta">
                <div class="texts">
                    <span><span class="bold">Title : </span>'.$row['book_name'].' </span>
                    <div>
                      <span><span class="bold">Author : </span>' . $row['author_name'] .'</span>
                    </div>
                    <div>
                        <span><span class="bold" >Description : </span> '. $row['book_description'] . ' </span>
                    </div>
                </div>
            </div>
          </div> ' ;    //E:\xampp\htdocs\bookwebsite\pages\donation\upload\2023-02-01.png
                      //is same as E:/xampp/htdocs/bookwebsite/pages/donation/upload/2023-02-01.png
      
          }
      ?>

      


      </div>
    </div>

  </div>
  </div>
  
  <div class="bottom">
  <span>Developed By <strong> RohitKumar B. Pandey</strong></span>
  </div>
  
  
</body>

</html>
