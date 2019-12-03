<!-- header -->	
	<div class="header" id="home">
		<div class="container">
			<div class="header-left">
				<!--a href="signup.html"class="sign">SIGN UP</a-->
			</div>
			<div class="header-right">
			  <h6>Follows Us :</h6>
				<ul class="f-icons">
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="p"> </a></li>
					<li><a href="#" class="twitter"> </a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>	
<!-- //header -->
<!-- banner -->
<div class="banner">
		<div class="container">
			<div class="banner-navigation">
					<div class="logo">
						<a href="index.php"><h1>Event<span> Management</span></h1></a>
					</div>
					<span class="menu"></span>
						<div class="top-menu">
								<ul class="nav">
									<li class="hvr-sweep-to-bottom cap"><a href="index.php">Home</a></li>
									<li class="hvr-sweep-to-bottom"><a href="about.php">About us</a></li>
									<li class="hvr-sweep-to-bottom"><a href="gallary.php">Gallary</a></li>
									<li class="hvr-sweep-to-bottom"><a href="ourAchievement.php">Our Achievements</a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="ourServices.php">Our Services</a></li>
                                    <li class="hvr-sweep-to-bottom"><a href="contact.php">Contact Us</a></li>
								</ul>
								<div class="clearfix"></div>
						</div>
					<!--script-for-menu-->
								<script>
									$("span.menu").click(function(){
										$(".top-menu ul").slideToggle("slow" , function(){
										});
									});
								</script>
					<!--script-for-menu-->

				<div class="clearfix"></div>
			</div>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
							<li>
								<div class="banner-info">
									<h3>Michael <lable>&</lable> Annie</h3>
									<p>Dec 30TH, 2019</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								
									<h3>David <lable>&</lable> Mary</h3>
									<p>Jan 10TH, 2020</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h3>Adams <lable>&</lable> Eve</h3>
									<p>Jan 30TH, 2020</p>
								</div>								
							</li>
						 </ul>
					</div>
					<!--- banner Slider starts Here --->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
		</div>
	</div>
<!--//banner-->