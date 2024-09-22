<?php
include('header.php');
include('connection.php');
?>


<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header mb-5">
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
</div>
<!-- Hero End -->




<?php
include('content.php');

?>


<!-- Product Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our </span> Product</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
        </div>
        <?php
        if (isset($_GET['id'])) {
            $pro = $_GET['id'];
            $quer = mysqli_query($mysqli, "SELECT * FROM product WHERE categorey=$pro ");

            if ($quer) { // Check if the query was successful
        ?>
                <div class="row g-4">
                    <?php while($profeild = mysqli_fetch_assoc($quer)){ ?>
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="product-item text-center border h-100 p-4">
                                <img class="img-fluid mb-4" src="../adminpanel/img/<?php echo $profeild['pro_image'];?>" alt="">
                                <div class="mb-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(99)</small>
                                </div>
                                <a href="#" class="h6 d-inline-block mb-2"><?php echo $profeild['pro_name']; ?></a>
                                <h5 class="text-primary mb-3"><?php echo $profeild['pro_discription']; ?></h5>
                                <h5 class="text-primary mb-3"><?php echo $profeild['pro_price']; ?></h5>
                                <a href="cart.php?proid=<?php echo $profeild['id']?>" class="btn btn-outline-primary px-3">Add To Cart</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        <?php
            } else {
                echo "location.assign('sepret_product.php')";
                
            }
        } else {
            echo "No category selected.";
        }

        ?>


        <!-- Product End -->




        <!-- Newsletter Start -->
        <div class="container-fluid newsletter bg-primary py-5 my-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="text-white mb-3"><span class="fw-light text-dark">Let's Subscribe</span> The Newsletter</h1>
                    <p class="text-white mb-4">Subscribe now to get 30% discount on any of our products</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 wow fadeIn" data-wow-delay="0.5s">
                        <div class="position-relative w-100 mt-3 mb-2">
                            <input class="form-control w-100 py-4 ps-4 pe-5" type="text" placeholder="Enter Your Email"
                                style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-white fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <?php
        include('footer.php')
        ?>