<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
	<meta name="author" content="https://www.Zerotheme.com">

	<title>Ganadera</title>

	<!-- Bootstrap Core CSS -->
	<link href="style/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="style/estilos.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Owl Carousel Assets -->
	<link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="owl-carousel/owl.theme.css" rel="stylesheet"> 

	<!-- jQuery and Modernizr-->
	<script src="js/js/jquery-2.1.1.js"></script> 

</head>

<body>
	<!-- /////////////////////////////////////////Navigation -->
	<div id="nav-wrapper">
		<div id="nav" class="navbar navbar-default navbar-inner">
			<div class="container">

				<!-- BAR CONTENTS -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{% url 'web' %}" class="navbar-brand navbar-brand-centered"><img
							src="images/logo1.png" alt="First slide"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll first" href="#nav-services">SERVICIOS</a>
						</li>
						<li>
							<a class="page-scroll" href="#nav-event">EVENTOS</a>
						</li>
						<li>
							<a class="page-scroll" href="#nav-catalogo">CATALOGO</a>
						</li>
						<li>
							<a class="page-scroll" href="#nav-procesos">PROCESOS</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="page-scroll" href="#nav-adventures">AVENTURA</a>
						</li>
						<li>
							<a class="page-scroll" href="#nav-testimonials">TESTIMONIOS</a>
						</li>
					
					</ul>
				</div><!-- /.navbar-collapse -->


			</div> <!-- row -->
		</div> <!-- nav -->
	</div> <!-- wrapper -->
	<!-- Navigation -->

	<header>
		<div class="box-shadow">
			<!-- Carousel -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/vaca1.jpg" alt="First slide">
						<!-- Static Header -->
						<div class="header-text hidden-xs">
							<div class="col-md-12 text-center">
								<h1><br /></h1>
							</div>
						</div><!-- /header-text -->
					</div>
					<div class="item">
						<img src="images/vaca2.jpg" alt="Second slide">
						<!-- Static Header -->
						<div class="header-text hidden-xs">
							<div class="col-md-12 text-center">
								<h1></h1>
							</div>
						</div><!-- /header-text -->
					</div>
					<div class="item">
						<img src="images/3.jpg" alt="Third slide">
						<!-- Static Header -->
						<div class="header-text hidden-xs">
							<div class="col-md-12 text-center">
								<h1><br /></h1>
							</div>
						</div><!-- /header-text -->
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div><!-- /carousel -->
		</div>
	</header>
	<!-- /Section: intro -->

	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">

		<!-- ////////////Content http://127.0.0.1:8000/ox 01 -->
		<section class="box-content box-1" id="nav-services">
			<div class="container">
				<div class="heading">
					<h2>SERVICIOS</h2>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="box-item">
							<center><img src="images/climbing.png" /></center>
							<h3>Enfermeria</h3>
							<p>Area asignada para la revision del ganado etc.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-item">
							<center><img src="images/fishing.png" /></center>
							<h3>Peso</h3>
							<p>Se utiliza para llevar un registro del ganado, de cuando entra y sale etc.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-item">
							<center><img src="images/camping.png" /></center>
							<h3>Etc</h3>
							<p>Agregar los demas servicios que se implementen en la ganadera</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-item">
							<center><img src="images/fire.png" /></center>
							<h3>Etc</h3>
							<p>Agregar los demas servicios que se implementen en la ganadera</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 02 -->
		<section class="box-content box-2 box-style-1" id="nav-catalogo">
			<div class="container">
				<div class="heading">
					<h2>ÁREA CATALOGOS</h2>
				</div>
				<div class="row">
					<div class="no-gutter">
						<div class="col-lg-4 col-sm-6">
							<a href="index.php" target="_blank" class="portfolio-box">
								<img src="images/vacas.png" alt="" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Categoria
										</div>
										<div class="project-name">
											CORRALES
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" target="_blank" class="portfolio-box">
								<img src="images/composta.png" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Categoia
										</div>
										<div class="project-name">
											PRODUCTO
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<!-- <a href="#" class="portfolio-box"> -->
							<a href="#" target="_blank" class="portfolio-box">
								<img src="images/clientes.jpg" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Categoria
										</div>
										<div class="project-name">
											CLIENTES
										</div>
									</div>
								</div>
							</a>
						</div>
						<!--<div class="col-lg-4 col-sm-6">
							<a href="#" class="portfolio-box">
								<img src="{% static 'images/portfolio-4.jpg'%}" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Category
										</div>
										<div class="project-name">
											Project Name
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="portfolio-box">
								<img src="{% static 'images/portfolio-5.jpg'%}" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Category
										</div>
										<div class="project-name">
											Project Name
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="portfolio-box">
								<img src="{% static 'images/portfolio-6.jpg'%}" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Category
										</div>
										<div class="project-name">
											Project Name
										</div>
									</div>
								</div>
							</a>
						</div> -->

						<div class="clear"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 03 -->
		<section class="box-content box-3" id="nav-gallery">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>ÁREA CATALOGOS</h2>
					</div>
				</div>
			</div>
		</section>

		<section class="box-content box-2 box-style-1" id="nav-procesos">
			<div class="container">
				<div class="heading">
					<h2>ÁREAS DE PROCESOS</h2>
				</div>
				<div class="row">
					<div class="no-gutter">
						<div class="col-lg-4 col-sm-6">
							<a href="#" class="portfolio-box">
								<img src="images/vacas.png" alt="" class="img-responsive" alt="">
								<div class="portfolio-box-caption">
									<div class="portfolio-box-caption-content">
										<div class="project-category text-faded">
											Categoria
										</div>
										<div class="project-name">
											SURTIDOS
										</div>
									</div>
								</div>
							</a>
						</div>
						<!-- <div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							<img src="{% static 'images/portfolio-2.jpg'%}" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">
										Category
									</div>
									<div class="project-name">
										Project Name
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							<img src="{% static 'images/portfolio-3.jpg'%}" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">
										Category
									</div>
									<div class="project-name">
										Project Name
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							<img src="{% static 'images/portfolio-4.jpg'%}" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">
										Category
									</div>
									<div class="project-name">
										Project Name
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							<img src="{% static 'images/portfolio-5.jpg'%}" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">
										Category
									</div>
									<div class="project-name">
										Project Name
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-sm-6">
						<a href="#" class="portfolio-box">
							<img src="{% static 'images/portfolio-6.jpg'%}" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-category text-faded">
										Category
									</div>
									<div class="project-name">
										Project Name
									</div>
								</div>
							</div>
						</a>
					</div> -->
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="box-content box-3" id="nav-gallery2">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>ÁREAS DE PROCESOS</h2>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ////////////Content Box 04 -->
		<section class="box-content box-4 box-style-3">
			<div class="container">
				<div class="row">
					<div class="box-item">
						<blockquote>
							<p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
								vultatup duista.</p>
						</blockquote>
					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 05 -->
		<section class="box-content box-5" id="nav-adventures">
			<div class="container">
				<div class="row heading">
					<h2>Our Adventures</h2>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/12.jpg" class="img-responsive" />
							<div class="content">
								<h3>Planning Our Honeymoon</h3>
								<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa
									pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt. Aliquam eget
									metus nec leo tempor bibendum. Phasellus tincidunt lobortis metus. Duis euismod
									lorem turpis, viverra feugiat ipsum volutpat vitae. Fusce justo turpis, sodales sed
									placerat non, suscipit at diam.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
						<div class="box-item">
							<img src="images/13.jpg" class="img-responsive" />
							<div class="content">
								<h3>Brainstorming Wedding Ideas</h3>
								<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa
									pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt. Aliquam eget
									metus nec leo tempor bibendum. Phasellus tincidunt lobortis metus. Duis euismod
									lorem turpis, viverra feugiat ipsum volutpat vitae. Fusce justo turpis, sodales sed
									placerat non, suscipit at diam.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/10.jpg" class="img-responsive" />
							<div class="content">
								<h3>She Said Yes!</h3>
								<p>Nunc eu velit metus. Donec in massa libero. Donec bibendum orci a lorem scelerisque
									luctus. Aliquam et ante quis erat semper pretium. Pellentesque vitae aliquam ipsum.
									Cras tempor sit amet odio sit amet porttitor. Integer consectetur bibendum tempus.
									Fusce egestas sed mi a vehicula.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
						<div class="box-item">
							<img src="images/11.jpg" class="img-responsive" />
							<div class="content">
								<h3>Met Dovey???s Parents in Chicago</h3>
								<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
									himenaeos. Sed varius fringilla tortor at euismod. Cras volutpat vehicula libero,
									nec faucibus urna bibendum id. Duis a commodo lectus. Morbi id purus nec purus
									feugiat vestibulum. Suspendisse sapien ante, bibendum ac quam quis, imperdiet
									bibendum sem. Curabitur nibh magna, tristique et convallis???</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-item">
							<img src="images/14.jpg" class="img-responsive" />
							<div class="content">
								<h3>Choosing The Bridesmaids and Groomsmen</h3>
								<p>Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa
									pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt. Aliquam eget
									metus nec leo tempor bibendum. Phasellus tincidunt lobortis metus. Duis euismod
									lorem turpis, viverra feugiat ipsum volutpat vitae. Fusce justo turpis, sodales sed
									placerat non, suscipit at diam.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
						<div class="box-item">
							<img src="images/15.jpg" class="img-responsive" />
							<div class="content">
								<h3>A Sweet Escape to Paris</h3>
								<p>Proin lobortis mattis odio non ornare. Sed tempor nisi eu hendrerit luctus. Class
									aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
									himenaeos. Cras et velit id sem tincidunt convallis ac eget quam. Vestibulum posuere
									porttitor sapien et fringilla. Donec laoreet ultricies sagittis. Suspendisse
									potenti.</p>
								<span>MAY 21, 2014 BY VAFPRESS</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 06 -->
		<section class="box-content box-6 box-style-2" id="nav-testimonials">
			<div class="container">
				<div class="row heading">
					<h2>Testimonials</h2>
				</div>
				<div class="row">
					<div id="owl-brand" class="owl-carousel">
						<div class="row">
							<div class="col-md-6">
								<div class="item box-item">
									<img src="images/partner1.png" class="img-circle" />
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industrys standard dummy text ever since the 1500s, when an
										unknown printer took a galley.</p>
									<span>Catherine Grace - America</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="item box-item">
									<img src="images/partner2.png" class="img-circle" />
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industrys standard dummy text ever since the 1500s, when an
										unknown printer took a galley.</p>
									<span>Catherine Grace - America</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="item box-item">
									<img src="images/partner3.png" class="img-circle" />
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industrys standard dummy text ever since the 1500s, when an
										unknown printer took a galley.</p>
									<span>Catherine Grace - America</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="item box-item">
									<img src="images/partner1.png" class="img-circle" />
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
										Ipsum has been the industrys standard dummy text ever since the 1500s, when an
										unknown printer took a galley.</p>
									<span>Catherine Grace - America</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 07 -->
		<!-- <section class="box-content box-7" id="location">
			<div class="clearfix">
				<div class="heading" style="margin-bottom: 0;">
					<h2>LOCATION</h2>
				</div>
				<div class="box-item">
					<div class='embed-container maps'>
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434"
							width="100%" height="400px" frameborder="0" style="border: 0"></iframe>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h3>Complete the Submission Form</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's standard</p>
								<h3>Or Just Make a Call</h3>
								<p>+6221 888 888 90 <br>
									+6221 888 88891</p>
								<p>info@yourdomain.com</p>
							</div>
							<div class="col-md-8">
								<h3>Contact Form</h3>
								<div id="contact-form">
									<form name="form1" method="post" action="contact.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control input-lg" name="name"
														id="name" placeholder="Enter name" required="required" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control input-lg" name="email"
														id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control input-lg" name="subject"
														id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4"
														cols="25" required="required" placeholder="Message"></textarea>
												</div>
												<center><button type="submit" class="btn btn-skin" name="btnContactUs"
														id="btnContactUs">
														Submit</button></center>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<!-- </div> -->

		<footer>
			<div class="wrap-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="copyright">Desarrollado por Generadora de Tecnologia &copy; 2021
								<!-- <br />Designed by
								<a href="https://www.Zerotheme.com">Zerotheme</a> -->
							</div>
						</div>
						<!-- <div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li><a href="#">Privacy Policy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div> -->
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer -->



		<!-- jQuery -->
		<script src="js/js/jquery-2.1.1.js"></script>


		<!-- Bootstrap Core JavaScript -->
		<script src="js/js/bootstrap.min.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="js/js/agency.js"></script>

		<!-- Animated Top -->
		<script src="js/js/jquery.easing.min.js"></script>
		<script src="js/js/classie.js"></script>
		<script src="js/js/cbpAnimatedHeader.js"></script>

		<script>
			$(function () {
				$('#nav-wrapper').height($("#nav").height());

				$('#nav').affix({
					offset: { top: $('#nav').offset().top }
				});
			});
		</script>

		<!-- carousel -->
		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$("#owl-brand").owlCarousel({
					autoPlay: 3000,
					items: 1,
					itemsDesktop: [1199, 1],
					itemsDesktopSmall: [979, 2],
					navigation: false,
				});
			});
		</script>
</body>
</html>