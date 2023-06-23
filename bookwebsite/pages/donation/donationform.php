<!------------------------------------------------------------------------------------------------>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
$servername="localhost";
$username="root";
$password="";
$database="bms";

$conn=mysqli_connect($servername,$username,$password,$database);

$bookname=$_REQUEST['bkname'];
$authorname=$_REQUEST['authorname'];
$book_desc=$_REQUEST['book_desc'];


/* For Image Here start */
$file= $_FILES['book_img'];

$filename=$file['name'];
$filerror=$file['error'];
$filetmp = $file['tmp_name'];

$filetext=explode('.',$filename);
$filecheck=strtolower(end($filetext));

$fileextstore=array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstore))
{
    $destinationfile='upload/'.$filename ;
    move_uploaded_file($filetmp,$destinationfile);
}

/* For image ends here*/



session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$sql = "INSERT INTO `users-books` (`book_name`, `author_name`, `book_description`, `quantity`, `book_image`, `username`, `useremail`, `time`, `grant`, `received`) VALUES ('$bookname', '$authorname', '$book_desc','0', '$destinationfile', '$name','$email', current_timestamp(), '0','0');";



$result=mysqli_query($conn,$sql);
if($result){
    $flag=true;
}

 }
?>

<!--------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisdom Books 📚 -- donate</title>

    <link rel="stylesheet" href="\bookwebsite\pages\donation\donation.css">
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
        <div class="alert">
            <?php
           if(isset($flag))
           {
                
                echo' <script>alert("Hurray!! Your Book is been Donated we Inform you if Someone wanted it.");</script>';
                $flag=false;
           }
           
           ?>
        </div>
        <div class="heading">
            <h1>Please fill out this to donate books</h1>
        </div>
        <div class="form">
            <form action="\bookwebsite\pages\donation\donationform.php" method="post" enctype="multipart/form-data">
                <div class="input">
                    <label for="bookname">Book Name </label>
                    <input  class="inp-field" type="text" name="bkname" id="bookname" required>
                </div>
                <div class="input">
                    <label for="authorname">Author Name </label>
                    <input class="inp-field" type="text" name="authorname" id="authorname" required>
                </div>
                <div class="input">
                    <label for="book_desc">Book Description </label>
                    <textarea class="inp-field" type="text" name="book_desc" id="book_desc"></textarea>
                </div>
                <div class="input">
                    <label for="book_img">Book Image </label>
                    <input class="inp-field" type="file" name="book_img" id="book_img" required>
                </div>
                <div class="input">

                    <input class="button" type="submit" name="bookname" id="bookname">
                </div>

            </form>
        </div>
    </div>


</body>

</html>