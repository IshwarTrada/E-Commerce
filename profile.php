<?php
include 'connect.php';

session_start(); // Start the session

if (isset($_COOKIE['remember_user'])) {
    $_SESSION['logged_in'] = true;
    $username = $_COOKIE['remember_user'];
} else {
    // User is not logged in, redirect to login page
    // header("location:login.php");
    // exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedam Socks</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header id="header_offer" style="position: fixed;">
        <div class="offer">
            <p><strong>Free Delivery</strong> When you spend ₹3999.</p>
            <p>12-Month Sock <strong>Sock Sure</strong> Guarantee</p>
            <p>Rated Excellent on TrustPilot</p>
        </div>
        <nav class="navbar">
            <div>
                <ul class="nav_ul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="listing.php">Socks</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <a href="index.php"><img src="img/logo.png" alt="Logo" class="nav_logo"></a>
            </div>
            <div class="nav_right">
                <div class="search-bar">
                    <input id="" class="nav_search" type="search" name="Search_Products" placeholder="Search Products">
                    <button class="search_btn"><img class="search-icon" src="icons/search.svg" alt="search"></button>
                </div>
                <div class="country">
                    <img class="country_flag" src="icons/india-flag.png" alt="India Flag">
                    India
                </div>
                <div class="profile-dropdown">
                    <a href="login.php"><img class="nav_right_logo" src="icons/user.png" alt="user"></a>
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        echo '<div class="dropdown-content">';
                        echo '    <a href="logout.php">Logout</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <!-- <a href="login.php"><img class="nav_right_logo" src="icons/user.png" alt="user"></a> -->
                <a href="#"><img class="nav_right_logo" src="icons/cart.png" alt="Cart"></a>
            </div>
        </nav>
    </header>



    <footer>
        Copyright &copy; by Ishwar Trada. All rights reserved.
    </footer>

    <!-- Javascript -->
    <script src="script.js"></script>
</body>

</html>