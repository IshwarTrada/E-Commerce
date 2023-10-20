<?php
include 'connect.php';

session_start(); // Start the session

// Kepp Login on all pages
if (isset($_COOKIE['remember_user'])) {
    $_SESSION['logged_in'] = true;
    $username = $_COOKIE['remember_user'];
} else {
    // User is not logged in, redirect to login page
    // header("location:login.php");
    // exit();
}

// Send feedback to the database
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['feedback_msg'])) {
    // Get details from form field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback_msg = $_POST['feedback_msg'];

    // Query for insert data into database
    $sql = "INSERT INTO `feedback` (`name`, `email`, `feedback_msg`, `dt`) VALUES ('$name', '$email', '$feedback_msg', current_timestamp());";

    // check connection and sql query(right/wrong)
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Successfully Inserted";
        // echo "Successfully Sign Up...";
        
    } else {
        die(mysqli_error($con));
    }
    // close the connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
        <!-- Bootstrap Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact_us_style.css">
</head>

<body class="">
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
                    <input id="searchInput" class="nav_search" type="search" name="Search_Products"
                        placeholder="Search Products">
                    <button class="search_btn"><img class="search-icon" src="icons/search.svg" alt="search"></button>
                </div>
                <!-- <div id="suggestionContainer"></div> -->


                <div class="country">
                    <img class="country_flag" src="icons/india-flag.png" alt="India Flag">
                    India
                </div>
                <div class="profile-dropdown">
                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                        echo '<a href=""><img class="nav_right_logo" src="icons/user.png" alt="user"></a>';
                        echo '<div class="dropdown-content">';
                        echo '    <a href="logout.php">Logout</a>';
                        echo '</div>';
                    }
                    else{
                        echo '<a href="login.php"><img class="nav_right_logo" src="icons/user.png" alt="user"></a>';
                    }
                    ?>

                </div>
                <!-- <a href="login.php"><img class="nav_right_logo" src="icons/user.png" alt="user"></a> -->
                <a href="#"><img class="nav_right_logo" src="icons/cart.png" alt="Cart"></a>
            </div>
        </nav>
    </header>


    <!-- Form -->
    <section id="form_section">
        <div class="container">
            <form id="contact" action="contact_us.php" method="post">
                <h3>Give Feedback</h3>
                <h4>Contact Us for any Query</h4>
                <fieldset>
                    <input placeholder="Your Name" type="text" name="name" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <textarea placeholder="Type your message here...." name="feedback_msg" tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        Copyright &copy; by Ishwar Trada. All rights reserved.
    </footer>

    <!-- Javascript -->
    <script src="script.js"></script>
</body>

</html>