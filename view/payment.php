<?php
// if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role']!= 1)   {
//     header('Location:../Login/login.php');
//  };
include("../controllers/cart_controller.php");
session_start();
$cid = $_SESSION['customer_id'];
$countwed =count_weddingcart_ctr($cid);
$countwed =count_shootcart_ctr($cid);
$data = get_weddingorder_id_ctr($_SESSION['customer_id']);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GYMSTER - Gym HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://js.paystack.co/v1/inline.js"></script>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">YesIDO</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">YesIDO@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">0544262308</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">YesIDO</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="times.php" class="nav-item nav-link">Classes</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="wedding.php" class="dropdown-item">Weddings</a>
                                    <a href="allshoots.php" class="dropdown-item">Product Shoots</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="../Login/register.php" class="nav-item nav-link">Register</a>
                        </div>
                        <a href="../Login/login.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Login</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Confirm Payment</h1>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="allwedding.php" class="btn btn-light py-md-3 px-md-5">Wedding</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    
    <div class="resp-tabs-container">
							<!--/tab_one-->
							<div class="tab1">
								<!-- <div class="pay_info">
									<div class="vertical_post check_box_agile">
										<h5>COD</h5>
										<div class="checkbox">
											<div class="check_box_one cashon_delivery">
												<label class="anim">
																<input type="checkbox" class="checkbox">
																 <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span> 
															</label>
											</div>

										</div>
									</div>
								</div> -->

							</div>
                           
							

							<div class="tab4">
								<div class="pay_info">
									<div class="col-md-6 tab-grid">
										
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Service</th>
      <th scope="col">Price</th>
      <th scope="col">Cancel</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $weddingcart=get_from_weddingcart_ctr($_SESSION['customer_id']);
    $shootcart=get_from_shootcart_ctr($_SESSION['customer_id']);
    foreach($weddingcart as $item){
    ?>
    <tr>
      <td><?php echo($item['wedding_name']) ?></td>
      <td><?php echo('GHC'); echo($item['wedding.wedding_price*cart.qty']); ?></td>
      <td>
      <form action="../functions/remove_from_cart.php" method="POST">
        <input type="hidden" name="p_id" value="<?php echo($item['wedding_id']);?>" >
        <!-- <button name="deleteCart" ></button> -->
        <input type="submit" name="deleteCart" class='btn btn-outline-danger' value="Delete Order">
      </form>
      </td>
    </tr>
    <?php
    }
    ?>
<!-- Shoots -->
<?php
    foreach($shootcart as $item){
    ?>
    <tr>
      <td><?php echo($item['shoot_name']) ?></td>
      <td><?php echo('GHC'); echo($item['shoots.shoot_price*shootcart.qty']); ?></td>
      <td>
      <form action="../functions/remove_from_cart.php" method="POST">
        <input type="hidden" name="p_id" value="<?php echo($item['shoot_id']);?>" >
        <!-- <button name="deleteCart" ></button> -->
        <input type="submit" name="deleteCart" class='btn btn-outline-danger' value="Delete Order">
      </form>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
<?php
    $get = get_from_weddingcart_ctr($cid);
    $shoot = get_from_shootcart_ctr($cid);
    $total = total_weddingcart_price_ctr($cid);
    $shootT = total_shootcart_price_ctr($cid);
    foreach ($get as $item){
    ?>
    <?php
    foreach ($shoot as $item){
    ?>
    <p class="card-text">
     <?php } ?>
     <?php } ?>
    </p>

		<div class="col-md-6">
			<form class="cc-form" id="paymentForm">
			<div class="clearfix">
			<div class="form-group form-group-cc-number">
			<label>Email</label>
			<input class="form-control" id="email" placeholder="example@gmail.com" type="text"><span class="cc-card-icon" value="<?php //echo $total[""]?>" ></span>
			</div>
			<div class="form-group form-group-cc-cvc">
			    <label>Total Amount</label>
				<input readonly class="form-control" value="<?php echo $total["SUM(cart.qty*wedding.wedding_price)"] + $shootT["SUM(shootcart.qty*shoots.shoot_price)"]  ?>" id="amount5" type="number">
			</div>
		    </div>								
			<button type="submit" class="btn btn-primary submit" onclick="payWithPaystack()">Proceed Payment</button>
			</form>
				</div>
				<div class="clearfix"></div>
				</div>
				</div>
			</div>
    			
            
            <script type="text/javascript">
        function payWithPaystack() {


            event.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_839cab168cfb81723db8ebef98f189d3bbc66f22',
                // key: 'pk_test_2f4f689442f4751d03e7f9d680a26a38bba21720', // Replace with your public key
                email: document.getElementById("email").value,
                amount: document.getElementById("amount5").value * 100,
                ref: '' + Math.floor((Math.random() * 1000000000) + 1),
                currency: 'GHS',
                // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response){

                    alert("payment have been made"+ response.reference);
                    $.ajax({
                    url:"../actions/process.php?reference="+ response.reference,
                    method:'GET',
                    success: function (response){
                        document.getElementById("stripe-login").submit();
                    }

            });
    }
  });
            handler.openIframe();
        }
    </script>

<form id="paymentForm" method='post'>
            <div class="form-group">

                <input type="email" id="email" hidden required value="<?php echo $data['customer_email'] ?>" />
            </div>
            <div class="form-group">
                <input type="number" id="amount" hidden required value="<?php echo $total["SUM(cart.qty*wedding.wedding_price)"] + $shootT["SUM(shootcart.qty*shoots.shoot_price)"]  ?>" />
            </div>
            <div class="form-group">
                <input type="text" id="cname" hidden value="<?php echo $data['customer_name'] ?>" />
            </div>
            <div class="form-group">
                <input type="number" id="cid" hidden value="<?php echo $data['customer_id'] ?>" />
            </div>


            <button type="submit" onclick="payWithPaystack()"> Pay </button>

        </form>





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>