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
    <title>Product Detail</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pro_details.css">
</head>

<body>
    <!-- Navbar and header-->
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
    <!-- Product Details -->
    <section>
        <?php
        // Check if a valid product ID or slug is provided in the URL
        if (isset($_GET['id'])) {

            $product_id = $_GET['id'];


            // Fetch product details from the database
            $sql = "SELECT * FROM product WHERE product_id = $product_id";
            $result = $con->query($sql);

            if ($row = $result->fetch_assoc()) {
                $product_name = $row['product_name'];
                $product_price = $row['product_price'];
                $product_description = $row['product_desc'];
                $product_photo = $row['product_photo'];

                echo '<div class="product_page">';
                echo '    <div class="product_image">';
                echo '        <img src="img/product/' . $product_photo . '" alt="">';
                echo '    </div>';
                echo '    <div class="product_detail">';
                echo '        <div class="product_description">';
                echo '            <h2>' . $product_name . '</h2>';
                echo '            <h1><span style="font-size: 18px;letter-spacing: 8px;">₹</span>' . $product_price . '</h1>';
                echo '            <div class="description">';
                echo                $product_description;
                echo '            </div>';
                echo '          <div class="quantity">';
                echo '              <button class="quantity-btn" id="decrement">-</button>';
                echo '              <input type="number" id="quantity" value="1" min="1" max="10">';
                echo '              <button class="quantity-btn" id="increment">+</button>';
                echo '          </div>';
                echo '          <div id="quantity-message" class="error-message"></div>';
                echo '            <a href="#" class="add_cart">ADD TO CART </a>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            } else {
                echo '<p>Error: Product not found.</p>';
            }
            // Close the database connection
            $con->close();
        } else {
            echo '<p>Error: Invalid product ID.</p>';
        }
        ?>
    </section>
    <!-- Footer -->
    <footer>
        Copyright &copy; by Ishwar Trada. All rights reserved.
    </footer>

    <!-- Javascript -->
    <script src="script.js"></script>
</body>

</html>