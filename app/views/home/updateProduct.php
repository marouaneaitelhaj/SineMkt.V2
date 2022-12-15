

			<!-- Start Header Navigation -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="index.html"><img src="../app/views/home/logologo.png" style="width: 125px;height: 125px:margin : 50px"></a>

			</div>
			<!--/.navbar-header-->
			<!-- End Header Navigation -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu" style="background-color: #f7f6ee;">
				<ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
					<li><a href="home">home</a></li>
					<li><a href="NewArrivals">new arrival</a></li>
					<li><a href="FeaturedProducts">features</a></li>
					<li><a href="blog">blog</a></li>
					<li><a href="Conrtact">contact</a></li>
				</ul>
				<!--/.nav -->
			</div><!-- /.navbar-collapse -->
		</div>
		<!--/.container-->
	</nav>
	<!--/nav-->
	<!-- End Navigation -->
	<!--sofa-collection start -->

	<!--sofa-collection end -->
	<!--new-arrivals start -->
	<section id="new-arrivals" class="new-arrivals">
		<div class="container">
			<div class="section-header">
				<h2>new arrivals</h2>
			</div>
			<!--/.section-header-->
			<div class="new-arrivals-content">
				<div class="row-product-list">
					<?php

					while ($row = mysqli_fetch_array($data['query'])) {


					?>
						<div class="productlist">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img src="../../OOP-PHP/uploads/<?php echo $row['productPic'];?>" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay"></div>
									<div class="sale bg-1">
										<p><a id="deletebtn" href="deleteproduct?id=<?php echo $row['productId'];?>" name="updateProduct">Delete</a></p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="editformProduct?id=<?php echo $row['productId'];?>" name="updateProduct">Edit Product</a>
											
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#">
										<?php
										echo $row['productName'];
										?>
									</a></h4>
								<p class="arrival-product-price"><?php
										echo "$" . $row['productPrice'];
										?></p>
							</div>
						</div>


					<?php
					}
					?>


				</div>
			</div>
		</div>
		<!--/.container-->

	</section>
	<!--/.new-arrivals-->
	<!--new-arrivals end -->

	<!--footer start-->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="hm-footer-copyright text-center">
				<div class="footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
				<p>
					&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
				</p>
				<!--/p-->
			</div>
			<!--/.text-center-->
		</div>
		<!--/.container-->

		<div id="scroll-Top">
			<div class="return-to-top">
				<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
			</div>

		</div>
		<!--/.scroll-Top-->

	</footer>
	<!--/.footer-->
	<!--footer end-->

	<!-- Include all js compiled plugins (below), or include individual files as needed -->

	<script src="../app/views/home/assets/js/jquery.js"></script>

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<!--bootstrap.min.js-->
	<script src="../app/views/home/assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="../app/views/home/assets/js/bootsnav.js"></script>

	<!--owl.carousel.js-->
	<script src="../app/views/home/assets/js/owl.carousel.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


	<!--Custom JS-->
	<script src="../app/views/home/assets/js/custom.js"></script>

</body>

</html>