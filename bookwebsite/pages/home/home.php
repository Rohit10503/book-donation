<!---
1. In database on `users-books`  column grant means request came and 
    column received is a serial number of the requestor..
---->

<!--------------------------------------------------------------------------




/*<?php
session_start();
if( !isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location:  \bookwebsite\pages\login\login.php");
    exit;         //did not show rest HTML
}


?>


*/
---------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisdom Books 📚 -- Home</title>
    <link rel="stylesheet" href="./home.css">
</head>

<body>
    <div class="mainbody">
        <div class="top">
            <div class="navbar">

                <div class="nav-left">
                    <img style="margin-left:40px;" src="\bookwebsite\logos\weblogo.png" alt="website Logo"
                        height="80px">
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
    <div class="marquefield">
        <marquee  class="marquetag" hspace="20px" behavior="" direction="">India's Best Platform For donating and requesting Books </marquee>
        
    </div>

        <div class="mid-up">
            <div class="middle">
                <div class="mid-left">
                    <div class="mid-left-inner">
                        <div class="user-photo">
                            <img class="profile-img"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrauYz4l0sgJyJbVD8JXhIed45Qy8pPK7ZnT0BhENSaw&usqp=CAU&ec=48600112"
                                alt="User Profile-Photo" width="120" height="120">
                        </div>
                        <div class="username"><span>Name :<h3>
                                    <?php 
                            echo $_SESSION['name'];
                        ?>
                                </h3></span>
                        </div>
                        <hr>
                        <div class="email">
                            <span>Email :<h3>
                                    <?php 
                            echo $_SESSION['email'];
                        ?>
                                </h3>
                            </span>

                        </div>
                        <div class="left-bottom">
                            <div class="addbooks">
                                <a style="text-decoration: none;"
                                    href="\bookwebsite\pages\donation\donationform.php"><input class="button"
                                        type="button" value="Add Books"></a>
                            </div>
                            <div class="viewbooks">
                                <a href="\bookwebsite\pages\user-personal-books\personal-books.php"> <input
                                        class="button" type="button" value="See Books"></a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="mid-right">
                    <div class="mid-right-up">
                        <div class="video">
                            <video src="\bookwebsite\logos\video1.mp4" width="720" height="500" autoplay=""
                                muted=""></video>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="mid-down">
            <div class="renowned">
                <div class="mid-right-down-head">
                    <h2>Most Renowned Books...</h2>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img class="book-img"
                                src="https://5.imimg.com/data5/UP/LE/MY-11183377/bhagavad-gita-28hindi-29.png"
                                alt=" Shreemad Bhagvat Geeta">
                            <div class="texts">
                                <span><span class="bold">Title : </span> Shreemad Bhagvat Geeta</span>
                                <div>
                                    <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Voluptas laboriosam doloremque esse eum facilis commodi.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="book-img"
                                src="https://m.media-amazon.com/images/I/419AjbGvSVL._SS190_.jpg"
                                alt=" Shreemad Bhagvat Geeta">
                            <div class="texts">
                                <span><span class="bold">Title : </span>Shri Ramcharitra Manas</span>
                                <div>
                                    <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Voluptas laboriosam doloremque esse eum facilis commodi.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="book-img"
                                src="https://m.media-amazon.com/images/I/51z8FbxfDjL._SS190_.jpg"
                                alt=" Shreemad Bhagvat Geeta">
                            <div class="texts">
                                <span><span class="bold">Title : </span> Ved Sanskrit</span>
                                <div>
                                    <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Voluptas laboriosam doloremque esse eum facilis commodi.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <img class="book-img"
                                src="https://www.exoticindiaart.com/images/products/original/books/gpa033.webp"
                                alt=" Shreemad Bhagvat Geeta">
                            <div class="texts">
                                <span><span class="bold">Title : </span> Garuda Puran </span>
                                <div>
                                    <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Voluptas laboriosam doloremque esse eum facilis commodi.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="left-bottom">
                    <a style="text-decoration: none;" href="\bookwebsite\pages\renowned-books\renowned.php"><input class="button" type="button" value="see more"></a>
                </div>

            </div>

            <div class="user-books">

                <div class="mid-right-down-head">
                    <h2>For Requests...</h2>
                </div>



                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img class="book-img"
                                src="\bookwebsite\pages\donation\upload\physics.jpeg"
                                alt=" Shreemad Bhagvat Geeta">
                            <div class="texts">
                                <span><span class="bold">Title : </span> Physics 2.</span>
                                <div>
                                    <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Voluptas laboriosam doloremque esse eum
                                        facilis commodi. </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <div class="card">
                                <img class="book-img"
                                    src="\bookwebsite\pages\donation\upload\chemistry.jpg"
                                    alt=" Shreemad Bhagvat Geeta">
                                <div class="texts">
                                    <span><span class="bold">Title : </span> Chemistry.</span>
                                    <div>
                                        <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Voluptas laboriosam doloremque esse eum
                                            facilis commodi. </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column">
                                <div class="card">
                                    <img class="book-img"
                                        src="https://cdn.aglasem.com/aglasem-doc/80b0c546-aaa1-11ed-b9ec-0a5e36bc6706/1.jpg"
                                        alt=" Shreemad Bhagvat Geeta">
                                    <div class="texts">
                                        <span><span class="bold">Title : </span> Mathmatics.</span>
                                        <div>
                                            <span><span class="bold">Description : </span>Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit. Voluptas laboriosam doloremque esse
                                                eum facilis commodi. </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="column">
                                    <div class="card">
                                        <img class="book-img"
                                            src="https://www.shaalaa.com/images/biology-12th-standard-hsc-maharashtra-state-board_6:429f7f9009264240a77c8945f6342a63.JPG"
                                            alt=" Shreemad Bhagvat Geeta">
                                        <div class="texts">
                                            <span><span class="bold">Title : </span> Biology.</span>
                                            <div>
                                                <span><span class="bold">Description : </span>Lorem ipsum dolor sit
                                                    amet consectetur adipisicing elit. Voluptas laboriosam
                                                    doloremque esse eum facilis commodi. </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="left-bottom">
                                <a style="text-decoration: none;" href="\bookwebsite\pages\users-books\userbook.php"><input class="button" type="button"
                                        value="see more"></a>
                            </div>

                        </div>





                    </div>







                    <div class="bottom">
                        <span>Developed By <strong> RohitKumar B. Pandey</strong></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>