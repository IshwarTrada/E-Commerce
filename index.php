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
                    <li><a href="">Home</a></li>
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
    <?php
    if (isset($_GET['username'])) {
        $username = htmlspecialchars($_GET['username']);
        // if (isset($_SESSION['just_logged_in']) && $_SESSION['just_logged_in']) {
        if (isset($_COOKIE['just_logged_in']) && $_COOKIE['just_logged_in']) {
            echo "<div id='welcome' class='welcome_msg' onDOMContentLoaded='messageDisappear()'>
            <strong>Welcome $username!</strong>
          </div>";
            // Expire the cookie immediately
            setcookie('just_logged_in', '', time() - 3600, '/');
        }
        // unset($_SESSION['just_logged_in']); // Unset the session variable
        // }
    }
    ?>
    <!-- Section 1 -->
    <section id="section1">
        <div class="overlay">
            <div class="s1-content-main">
                <p class="s1-p">Walk Brighter in London's finest socks</p>
                <h1 class="s1-h1">Step into <em>Summer</em></h1>
                <div class="s1-content">
                    <a class="s1-link-btn" href="listing.html">Shop Sale</a>
                    <!-- <a class="s1-link-btn" href="#">Colour of the Season</a> -->
                </div>
            </div>
            <div class="scroll-tease__icon">
                <img class="scroll-tease__outline" src="icons/mouse-outline.svg" alt="">
                <img class="scroll-tease__wheel" src="icons/mouse-wheel.svg" alt="">
            </div>
        </div>
    </section>
    <!-- Section 2 -->
    <section id="section2" class="category">
        <div class="category_box">
            <a href="listing.html">
                <img src="img/Summer_socks.avif" alt="Summer Socks">
                <div class="category_description">
                    <h2 class="category_title">Summer <em>Socks</em></h2>
                    <p>Jump into summer with socks worthy of sunnier days.</p>
                </div>
            </a>
        </div>
        <div class="category_box">
            <a href="listing.html">
                <img src="img/Best_Seller.avif" alt="Best Seller">
                <div class="category_description">
                    <h2 class="category_title">Best <em>Sellers</em></h2>
                    <p>Our most popular pairs and standout styles.</p>
                </div>
            </a>
        </div>
        <div class="category_box">
            <a href="listing.html">
                <img src="img/Dress_socks.avif" alt="Dress Books">
                <div class="category_description">
                    <h2 class="category_title">Dress <em>Socks</em></h2>
                    <p>Upgrade your Monday to Friday with a dash of colour and class.</p>
                </div>
            </a>
        </div>
        <div class="category_box">
            <a href="listing.html">
                <img src="img/Gift_Boxes.avif" alt="Gift Boxes">
                <div class="category_description">
                    <h2 class="category_title">Gift <em>Boxes</em></h2>
                    <p>Carefully curated and beautifully packaged.</p>
                </div>
            </a>
        </div>
    </section>
    <!-- Section 3 -->
    <section id="section3">
        <div class="s3_img">
            <img class="s3_i" src="img/section4.avif" alt="section3 image">
        </div>
        <div class="s3_content">
            <p class="s3_c"><strong>Sale away with these great pairs</strong></p>
            <h3 class="s3_c">Summer Sale: <em>up to 50% off</em></h3>
            <p class="s3_c">Ready to sale away with the LSC Summer Sale?
                <br>Up to 50% off select summertime styles for a limited time.
                <br>Be quick.
            </p>
            <a href="listing.html" class="s3_c s1-link-btn">Shop Sale</a>
        </div>
    </section>
    <!-- Section 4 -->
    <section id="section6">
        <div class="s6_content">
            <p class="s6_c"><strong>Believe. Walk <em>Brighter.</em></strong></p>
            <h3 class="s6_c">Supporting self-belief <em>through style</em></h3>
            <p class="s6_c">With every order, you help London Sock Company proudly support London-based charity
                Suited &
                Booted, an organisation that embodies the power of self-belief and the power of style to instil
                confidence and optimism.</p>
            <br>
            <p class="s6_c">Their team of volunteers help vulnerable, unemployed men confidently head to job
                interviews by kitting
                them out top-to-toe in smart new clothes. We’ve always known the transformative potential of style
                on
                self-belief and Suited & Booted are proof.
            </p>
            <!-- <button class="s3_c s1-link-btn">Learn More</button> -->
        </div>
        <div class="s6_video">
            <video class="s6_vi" src="video/London_Sock_VIDEO.mp4" controls></video>
        </div>
    </section>
    <section id="section7">

    </section>
    <footer>
        Copyright &copy; by Ishwar Trada. All rights reserved.
    </footer>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            var welcomeMsg = document.getElementById('welcome');

            if (welcomeMsg) {
                setTimeout(function () {
                    welcomeMsg.style.display = 'none';
                }, 5000);
            }
        });
    </script> -->
    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    var welcomeMsg = document.querySelector('.welcome_msg');
    if (welcomeMsg) {
        welcomeMsg.style.cssText = `
            position: absolute;
            z-index: 100;
            left: 50%;
            top: 25%;
            transform: translateX(-50%);
            padding: 10px 50px;
            background-color: #47ec7083;
            border: 3px solid #00c531;
            color: #036017;
        `;
        welcomeMsg.style.display = 'block';
        setTimeout(function() {
            welcomeMsg.style.display = 'none';
        }, 5000);
    }
});
</script> -->
    <script src="script.js"></script>
</body>

</html>