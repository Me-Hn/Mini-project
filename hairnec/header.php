<?php
include('query.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hairnic - Single Product Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- fontawosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fontawosome -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .icon {
            /* background-color: blue; */
            height: 30px;
            width: 30px;
            position: relative;
            right: 25px;
            text-align: center;
            cursor: pointer;

        }

        .icon::after {
            content: attr(data-notify);
            /* Fetch the value of the data-notify attribute */
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            /* padding: 5px 10px; */
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
            min-width: 20px;
            text-align: center;
        }

        i {
            font-size: 1.4rem;
            font-weight: 700;
            color: #ffff;
        }

        /* Style for the cart box */
        .cart-box {
            position: fixed;
            top: 0;
            right: -300px;
            /* Initially hidden to the right */
            width: 300px;
            height: 100%;
            background-color: #f1f1f1;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            transition: right 0.3s ease;
            padding: 20px;
            overflow: scroll;
        }

        /* When the cart is active, move it into view */
        .cart-box.active {
            right: 0;
        }

        /* Close button styling */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff5e5e;
            border: none;
            color: white;
            font-size: 18px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .close-btn:hover {
            background-color: #ff2e2e;
        }



        /* Cart item layout using Flexbox */
        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            width: 200px;
            height: 130px;
            margin-left: 0px;
            /* No need to change if already 0 */
            text-align: left;
            /* Add this to align the cart item to the left */
        }


        .cart-item-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        .cart-item-image:hover {
            background-image: url('cross-icon.png');
            /* Path to your cross sign image */
            background-repeat: no-repeat;
            background-position: center;
            background-size: 50px 50px;
            /* Adjust size as needed */
            opacity: 0.6;
            /* Dim the image for the cross to stand out */
        }

        .cart-item-image:hover::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 0, 0, 0.5);
            /* Optional: Red overlay on hover */
        }



        .cart-item-details {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 10px;
            flex-grow: 1;
        }

        .product-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-price,
        .product-qty,
        .product-total {
            font-size: 14px;
        }

        /* Adjust layout for better spacing */
        .product-price {
            color: #888;
        }

        .product-qty {
            color: #333;
        }

        .product-total {
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->

    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="index.html" class="navbar-brand">
                    <h2 class="text-white">Hairnic</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="sepret_product.php" class="nav-item nav-link">Products</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="how-to-use.html" class="dropdown-item">How To Use</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="blog.html" class="dropdown-item">Blog Articles</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- icon -->
                    <div class="icon" onclick="toggleCart()" data-notify="
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    echo $count;
                    ?>
                    ">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <!-- Hidden cart box -->
                    <div class="cart-box" id="cartBox">
                        <button class="close-btn" onclick="toggleCart()">X</button>
                        <h2>Your Cart</h2>
                        <ul id="cartItems">
                            <!-- Example cart item -->

                            <?php
                            $count = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $val) {
                                    $total = $val['pqty'] * $val['pprice'];
                                    $count += $total;



                            ?>
                           
                                    <li class="cart-item">
                                        <img src="../adminpanel/img/<?php echo $val['pimg'] ?>" alt="Product Image" class="cart-item-image">
                                        <div class="cart-item-details">
                                            <span class="product-name"><?php echo $val['pname'] ?></span>
                                            <span class="product-price"><?php echo $val['pprice'] ?></span>
                                            <span class="product-qty" name="fqty">QTY :<?php echo $val['pqty'] ?></span>
                                            <span class="product-total"><?php echo $total ?></span>
                                        </div>
                                    </li>
                                   
                                    <!-- <h4>zain</h4> -->
                        </ul>
                <?php }
                            } ?>
                <div class="bottom-btn">
                    <h3>TOTAL : <?php echo $count ?></h3>
                    <button class="btn btn-info">chek out</button>
                    <a href="sdcart2.php" type="submit" class="btn btn-success">Proceed</a>
                    </div>
                    </div>


                    <!-- icon -->
                    <a href="" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Shop Now</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

        <!-- Hero Start -->
        <!-- <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-white animated slideInRight">Natural & Organic</h3>
                    <h1 class="display-4 text-white animated slideInRight">Hair <span class="fw-light text-dark">Shampoo</span> For Healthy Hair</h1>
                    <p class="text-white mb-4 animated slideInRight">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Etiam feugiat rutrum lectus, sed auctor ex malesuada id. Orci varius natoque penatibus et
                        magnis dis parturient montes.</p>
                    <a href="" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">Shop Now</a>
                    <a href="" class="btn btn-outline-dark py-2 px-4 animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="img/shampoo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->

    <script>
        function toggleCart() {
            var cartBox = document.getElementById('cartBox');
            cartBox.classList.toggle('active'); // Toggle the active class to show/hide the cart
        }

        // Example function to add items to the cart (can be modified as per your actual cart logic)
        function addItemToCart(item) {
            var cartItems = document.getElementById('cartItems');
            var listItem = document.createElement('li');
            listItem.textContent = item;
            cartItems.appendChild(listItem);
        }
    </script>