<?php
// include('query.php');
include('header.php');
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
        /* style.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
            font-weight: bold;
        }

        .table {
            background-color: #fff;
        }

        .quantity-controls input {
            max-width: 50px;
            width: 60px;
        }

        .quantity-controls button {
            min-width: 30px;
        }

        .table img {
            border-radius: 8px;
        }

        .btn-danger {
            background-color: #ff5c5c;
        }

        .qty {
            text-align: center;
        }

        .hero-header {
            height: 900px;
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12">
                    <h2 class="text-white mb-4">Shopping Cart</h2>
                    <table class="table table-bordered table-striped bg-white">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th> <!-- Added Price Column -->
                                <th scope="col">Quantity</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $key => $val2) {
                                    // Calculate total price for each product
                                    $total = $val2['pqty'] * $val2['pprice'];
                            ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../adminpanel/img/<?php echo $val2['pimg'] ?>" name="cartimg" alt="Product" width="70" class="me-3">
                                                <div>
                                                    <h5 name="cartname"><?php echo $val2['pname'] ?></h5>
                                                    <p name="cartds" class="text-muted"><?php echo $val2['pds'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$<?php echo $val2['pprice'] ?></td> <!-- Unit Price -->
                                        <td>
                                            <div class="input-group quantity-controls">
                                                <input type="number" class="qty" name="cartqty" min="1" value="<?php echo $val2['pqty'] ?>">
                                            </div>
                                        </td>
                                        <td>$<?php echo number_format($total, 2) ?></td> <!-- Total Price -->
                                        <td>
                                            <button class="btn btn-danger btn-sm">X</button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<tr><td colspan="5" class="text-center">Your cart is empty</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>


                    <div class="row">
                        <div class="col-lg-6">
                            <a href="sepret_product.php" class="btn btn-outline-light">Continue Shopping</a>
                        </div>

                        <?php
                        if (isset($_SESSION['username'])){
                        ?>
                        <div class="col-lg-3">
                            <a href="?chekout" class="btn btn-outline-light">proced to cart</a>
                        </div>
                        <?php
                        }else{?>
                            <div class="col-lg-3">
                            <a href="login.php" class="btn btn-outline-light">proced to cart</a>
                        </div>
                        <?php }?>



                        <div class="col-lg-3 text-end text-white">
                            <p><strong>Subtotal:</strong><?php echo $count ?></p>
                            <p><strong>Shipping:</strong> Free</p>
                            <p><strong>Total:</strong><?php echo $count ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <?php ?>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>