<?php
include 'connect.php';
session_start(); // Start the session

if (isset($_COOKIE['remember_user'])) {
    $_SESSION['logged_in'] = true;
    $username = $_COOKIE['remember_user'];
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addToCart'])) {
        // Get product details from the form
        $product_id = $_GET['id'];

        // Select product item from product table from id
        $sql = "SELECT * FROM product WHERE product_id = $product_id";
        $result = $con->query($sql);
        if ($row = $result->fetch_assoc()) {

            $product_name = $row['product_name'];
            $product_photo = $row['product_photo'];
            $product_price = $row['product_price'];

            // Check if the product is already in the cart
            $checkQuery = "SELECT * FROM cart_items WHERE product_id = $product_id";
            $checkResult = $con->query($checkQuery);
            if ($checkResult && $checkResult->num_rows == 0) {
                $ins = "INSERT INTO `cart_items` (`product_id`,`product_name`, `product_photo`,`product_price`, `dt`) VALUES ('$product_id', '$product_name', '$product_photo', '$product_price', current_timestamp())";
                $res = $con->query($ins);
                header('Location: cart.php'); // Redirect after POST
                exit();
            }

        }
    }
}
?>

<!-- Your HTML code for displaying cart items -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cart.css">
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
                    } else {
                        echo '<a href="login.php"><img class="nav_right_logo" src="icons/user.png" alt="user"></a>';
                    }
                    ?>

                </div>
                <!-- <a href="login.php"><img class="nav_right_logo" src="icons/user.png" alt="user"></a> -->
                <a href="#"><img class="nav_right_logo" src="icons/cart.png" alt="Cart"></a>
            </div>
        </nav>
    </header>

    <!-- Cart Page content -->
    <div class="main">
        <h1>Shopping Cart</h1>
        <div class="cart-items" id="cart-items">
            <?php
                // To show all data which is store in the cart_item table
                $s_cart = "SELECT * FROM cart_items";
                $cart_product = mysqli_query($con, $s_cart);

                if ($cart_product->num_rows > 0) {
                    while ($row = $cart_product->fetch_assoc()) {

                        echo '<div class="cart-item" style="width: inherit;">';
                        echo '    <div class="pro_name">' . $row['product_name'] . '</div>';
                        // echo '    <div class="pro_quantity">';
                        // echo '        <p>x34</p>';
                        // echo '    </div>';
                        echo '          <div class="pro_quantity quantity">';
                        echo '              <button class="quantity-btn decrement" name="decrement">-</button>';
                        echo '              <input type="number" class="quantity" name="quantity" value="1" min="1" max="10">';
                        echo '              <button class="quantity-btn increment" name="increament">+</button>';
                        echo '          </div>';
                        // echo '          <div class="quantity-message error-message"></div>';
                        // echo '  </div>';
                        echo '    <div class="pro_total_price">';
                        echo '        Rs. 5555';
                        echo '    </div>';
                        echo '    <div class="pro_total_price">';
                        echo '        Rs. 5555';
                        echo '    </div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>
    <footer>
        Copyright &copy; by Ishwar Trada. All rights reserved.
    </footer>

    <script src="script.js"></script>
    <script src="cart.js"></script>
    </script>


</body>

</html>