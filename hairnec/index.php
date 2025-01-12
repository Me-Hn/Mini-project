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


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-leaf fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">100% Natural</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-tint-slash fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Anti Hair Fall</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-times fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Hypoallergenic</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- About Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="img/shampoo-1.png">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="text-primary mb-4">Healthy Hair <span class="fw-light text-dark">Is A Symbol Of Our
                            Beauty</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est.</p>
                    <p class="mb-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.</p>
                    <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- Deal Start -->
    <!-- <div class="container-fluid deal bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="img/shampoo-2.png">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-4">
                        <div class="border p-4">
                            <p class="mb-2">Natural & Organic Shampoo</p>
                            <h2 class="fw-bold text-uppercase mb-4">Deals of the Day</h2>
                            <h1 class="display-4 text-primary mb-4">$99.99</h1>
                            <h5>Fresh Organic Shampoo</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Etiam feugiat rutrum lectus sed auctor.</p>
                            <div class="row g-0 cdt mb-4">
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-days"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-hours"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-minutes"></h1>
                                </div>
                                <div class="col-3">
                                    <h1 class="display-6" id="cdt-seconds"></h1>
                                </div>
                            </div>
                            <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Deal End -->




    <!-- Product Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Our </span> Categorey</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <?php 
$cat = mysqli_query($mysqli, "SELECT * FROM add_categorey");

?>

<div class="row g-4">
    <?php while ($catefeild = mysqli_fetch_assoc($cat)) { ?>
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="product-item text-center border h-100 p-4">
              <img class="img-fluid mb-4" src="../adminpanel/img/<?php echo $catefeild['image']; ?>" alt="">
                <div class="mb-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small>(99)</small>
                </div>
                <a href="#" class="h6 d-inline-block mb-2"><?php echo $catefeild['Categorey_Name']; ?></a>
                <h5 class="text-primary mb-3"><?php echo $catefeild['Discription']; ?></h5>
                <a href="product.php?id=<?php echo $catefeild['id'];?>" class="btn btn-outline-primary px-3">Add To Cart</a>
            </div>
            </div>
    <?php } ?>

 


</div>

    
   

    <!-- Product End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial bg-primary my-5 py-5">
        <div class="container text-white py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-white mb-3">Our Customer Said <span class="fw-light text-dark">About Our Natural Shampoo</span></h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center" data-dot="1">
                            <img class="img-fluid border p-2" src="img/testimonial-1.jpg" alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="2">
                            <img class="img-fluid border p-2" src="img/testimonial-2.jpg" alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                        <div class="testimonial-item text-center" data-dot="3">
                            <img class="img-fluid border p-2" src="img/testimonial-3.jpg" alt="">
                            <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                            <h5 class="mb-1">Client Name</h5>
                            <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">From Our</span> Blog Articles</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/blog-1.jpg" alt="">
                        <a href="" class="h5 lh-base d-inline-block">Foods that are good for your hair growing</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/blog-2.jpg" alt="">
                        <a href="" class="h5 lh-base d-inline-block">How to take care of hair naturally</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="blog-item border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/blog-3.jpg" alt="">
                        <a href="" class="h5 lh-base d-inline-block">How to use our natural & organic shampoo</a>
                        <div class="d-flex text-black-50 mb-2">
                            <div class="pe-3">
                                <small class="fa fa-eye me-1"></small>
                                <small>9999 Views</small>
                            </div>
                            <div class="pe-3">
                                <small class="fa fa-comments me-1"></small>
                                <small>9999 Comments</small>
                            </div>
                        </div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


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