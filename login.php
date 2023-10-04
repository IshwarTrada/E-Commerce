<?php
include 'connect.php';
if (isset($_POST['u_name']) && isset($_POST['u_email']) && isset($_POST['u_pwd'])) {
    // Get details from form field
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_pwd = $_POST['u_pwd'];

    // Query for insert data into database
    $sql = "INSERT INTO `user_detail` (`u_name`, `u_email`, `u_pwd`, `dt`) VALUES ('$u_name', '$u_email', '$u_pwd', current_timestamp());";

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
if (isset($_POST['log_u_email']) && isset($_POST['log_u_pwd'])) {

    $u_email = $con->real_escape_string($_POST['log_u_email']);
    $u_pwd = $con->real_escape_string($_POST['log_u_pwd']);

    // Query for select those data which are into database
    $sql = "SELECT * FROM user_detail WHERE u_email = '$u_email' AND u_pwd = '$u_pwd'";

    // check connection and sql query(right/wrong)
    $result = mysqli_query($con, $sql);


    if ($result->num_rows > 0) {
        // echo "Welcome to the Vedam Socks";
        $row = $result->fetch_assoc(); // Assuming you want to get the username from the result
        $username = $row['u_name'];

        // Set cookie to expire in 5 seconds
        setcookie('just_logged_in', true, time() + 5, '/'); 

        // redirect the page
        header("location:index.php?username=$username");
        exit();
    } else {
        // echo "You aren't Signed up yet";
    }

    // close the connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                        initial-scale=1.0">
    <title>My Profile</title>
    <!-- Bootstrap -->
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <!-- <header>
        <h1 class="heading">GeeksforGeeks</h1>
        <h3 class="title">Sliding Login & Registration Form</h3>
    </header> -->
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
                    <li><a href="listing.html">Socks</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <a href="index.html"><img src="img\logo.png" alt="Logo" class="nav_logo"></a>
            </div>
            <div class="nav_right">
                <div class="search-bar">
                    <input id="" class="nav_search" type="search" name="Search_Products" placeholder="Search Products">
                    <button class="search_btn"><img class="search-icon" src="icons\search.svg" alt="search"></button>
                </div>
                <div class="country">
                    <img class="country_flag" src="icons/india-flag.png" alt="India Flag">
                    India
                </div>
                <a href="login.html"><img class="nav_right_logo" src="icons\user.png" alt="user"></a>
                <a href="#"><img class="nav_right_logo" src="icons\cart.png" alt="Cart"></a>
            </div>
        </nav>
    </header>

    <!-- container div -->
    <section class="login_class">
        <div class="container">

            <!-- upper button section to select
            the login or signup form -->
            <div class="slider"></div>
            <div class="btn">
                <button class="login">Login</button>
                <button class="signup">Signup</button>
            </div>

            <!-- Form section that contains the
            login and the signup form -->
            <div class="form-section">

                <!-- login form -->
                <form action="login.php" method="post">
                    <div class="login-box">
                        <input type="email" name="log_u_email" id="log_u_email" class="email ele"
                            placeholder="Enter Your Email Id" required>
                        <input type="password" name="log_u_pwd" id="log_u_pwd" class="password ele"
                            placeholder="Enter Your Password" required>
                        <input type="submit" name="log_in" id="log_in" class="clkbtn" value="Log In">
                    </div>
                </form>
                <!-- signup form -->
                <form action="login.php" method="post">
                    <div class="signup-box">
                        <input type="text" name="u_name" id="u_name" class="name ele" placeholder="Enter Your Name"
                            required>
                        <input type="email" name="u_email" id="u_email" class="email ele" placeholder="Enter Email Id"
                            required>
                        <input type="password" name="u_pwd" id="u_pwd" class="password ele" placeholder="Enter Password"
                            required>
                        <input type="password" id="cnf_pwd" class="password ele" placeholder="Confirm password"
                            required>
                        <input type="submit" id="sign_up" class="clkbtn" onclick="validate_pwd()" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        Copyright &copy; by Ishwar Trada. All rights reserved.
    </footer>

    <!-- Javascript -->
    <script src="script.js"></script>
    <script src="login.js"></script>
</body>

</html>