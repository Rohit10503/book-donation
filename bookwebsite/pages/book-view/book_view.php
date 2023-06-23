<!---------------------------------------------------------------------------------------->

<?php
session_start();
if(!isset($_SESSION['serial_no']))
{
    header("location: \bookwebsite\pages\home\home.php");
    exit;
}


  $serial= $_SESSION['serial_no'];

$conn=mysqli_connect("localhost","root","","bms");
$sql="SELECT * FROM `users-books` where `serial no.`='$serial'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


?>

<!------------------------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisdom Books 📚 -- book detail</title>
    <link rel="stylesheet" href="\bookwebsite\pages\book-view\book_view.css">
</head>
<body>
    
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
        <div class="mid-left">
            <div class="book-image">
            <?php
           echo '<img class="img-tag" height="500" src="/bookwebsite/pages/donation/'.$row['book_image'].'" alt="'.$row['book_name'].'">';
            ?>

            </div>
        </div>

        <div class="mid-right">
            <div class="right-head">
                <h1>Detail about this books </h1>
            </div>
            <div class="book-info">
            <div class="info-div"><span> <strong> Book Name :  </strong><span><?php echo " $row[book_name] "; ?></span></span></div>
            <div class="info-div"><span> <strong> Author Name :  </strong><span><?php echo " $row[author_name] "; ?></span></span></div>
            <div class="info-div"><span> <strong> About Book :  </strong><span><?php echo " $row[book_description] "; ?></span></span></div>
            <div class="info-div"><span> <strong> Donor Name :  </strong><span><?php echo " $row[username] "; ?></span></span></div>
            <div class="info-div"><span> <strong> Donor Email :  </strong><span><?php echo " $row[useremail] "; ?></span></span></div>
            <div class="info-div"><span> <strong> Time of Upload:  </strong><span><?php echo " $row[time] "; ?></span></span></div>
            </div>
            <div class="request">
                <form  class="requst-form" action="\bookwebsite\pages\book-view\request_place.php" >
                <div><input class="inp" type="text"  name="" id="" placeholder="Paste the donor's email here" required></div>
                    
                <div><input  class="button" type="submit" value="Request"></div>

                </form>
            </div>
        </div>



    </div>
</div>




<div class="bottom">
        <span>Developed By <strong> RohitKumar B. Pandey</strong></span>
    </div>


    
</body>
</html>


