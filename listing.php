<?php
include 'connect.php';

$sql = "SELECT * FROM product";
// $result = $con->query($sql);
$result = mysqli_query($con, $sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socks Listing</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="listing.css">
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
                <a href="login.php"><img class="nav_right_logo" src="icons\user.png" alt="user"></a>
                <a href="#"><img class="nav_right_logo" src="icons\cart.png" alt="Cart"></a>
            </div>
        </nav>
    </header>
    <!-- Intro About Section -->
    <section id="section1">
        <div class="overlay">
            <div class="s1-content-main">
                <!-- <p class="s1-p">Walk Brighter in London's finest socks</p> -->
                <div>
                    <h1 class="s1-h1">Our Shop</h1>
                </div>
                <div>
                    <p>Welcome to London Sock Company, where you can shop a range of luxury socks, all crafted using the
                        finest materials for absolute quality. Our company was built on a belief that the little things
                        –
                        like socks – make a big difference. We don’t just see socks as a wardrobe essential, but a
                        lifestyle
                        choice. Since 2013, we have encouraged our customers to add a dash of colour in their sock
                        drawers,
                        embrace their personality, and be inspired to be the best version of themselves.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Listing -->
    <section id="section2">
        <div class="product-box">

            <?php 
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

            echo '<div class="container">';
            echo '    <div class="div_product_image">';
            echo '        <img src="img/product/'.$row['product_photo'].'" alt="Photo Missing of Producrt id'.$row['product_id'].'" class="hero-image" />';
            echo '    </div>';
            echo '    <div class="price">₹<div>'.$row['product_price'].'</div>';
            echo '    </div>';

            echo '    <div class="information">';

            echo '        <div class="name">'.$row['product_name'].'</div>';

            echo '        <div class="store">Verified&nbsp; Reatailer&nbsp;<img width="20" height="20" src="https://img.icons8.com/dotty/80/49b956/checked.png" alt="checked"/></div>';

            echo '        <a href="pro_details.html" class="button">Purchase Product</a>';

            echo '    </div> <!-- end information -->';
            echo '</div> <!-- end container -->';
                }
            }
            $con->close();
            ?>


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