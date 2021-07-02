<?php
$con=mysqli_connect('localhost',"root","","jquery") or die ("Error connecting with the base");
if(isset($_GET['i'])){
	$i=$_GET['i'];
	if($i){
		echo '<script>alert("Thanks for showing your interest, We will get back to you soon")</script>';        
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Beautify</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

  <!-- Preloader Start  -->
  <div class="preloader">
     <div class="loader">
     </div>
  </div>
  <!-- Preloader End  -->
 
 <!-- Header Start -->
 <header class="header">
 	<div class="container">
 		<div class="row justify-content-between align-items-center">
 			<div class="brand-name">
 				<a href="index.php">Beautify</a>
 			</div>
      <div class="nav-toggle">
        <span></span>
      </div>
 			<nav class="nav">
 				<ul>
 					<li><a href="#home">Home</a></li>
 					<li><a href="#about">About</a></li>
 					<li><a href="#services">Services</a></li>
 					<li><a href="#works">Works</a></li>
 					<li><a href="#contact">Contact</a></li>
 				</ul>
 			</nav>
 		</div>
 	</div>
 </header>
 <!-- Header End -->

 <!-- Home Section Start -->
 <section class="home-section" id="home">
 	<!-- shape -->
 	<div class="shape-01">
 	</div>
 	<div class="container">
 		<div class="row align-items-center">
 			<div class="home-content">
 				<h4>To be creative means to be in</h4>
 				<h1>love with life.</h1>
 			</div>
 		</div>
 	</div>
 	<!-- scroll down -->
 	<a href="#about" class="scroll-down">
 		<img src="img/icons/arrow-down.svg" alt="scroll Down">
 	</a>
 </section>
 <!-- Home Section End -->

 <!-- About Section Start -->
 <section class="about-section" id="about">
 	<div class="container">
 		<div class="row">
 			<div class="about-img">
 				<div class="img-box">
 					<div class="shape-02">
 					</div>
 					<img src="img/1.jpg" alt="about me">
 				</div>
 			</div>
 			<div class="about-content">
 			   <div class="row">
                 <div class="section-title">
               	   <h1 style="margin-left:15px;">About Me</h1>
                 </div>
               </div>
               <p style="text-align: justify;
  text-justify: inter-word;">Having quality beauty products and professional beauticians can truly grow your beauty salon business. While working from home and, things might be getting a little tenser than expected. We should utilize this time to its fullest and learn new skills to improve ourselves and enjoy working from home.
				    We don’t know about you, but for us, it feels that we have become so acquainted with our indoor spaces during this process, that we might be in a relationship.
				</p>
               <div class="stats">
               	  <div class="row">
               	  	 <div class="stat-box">
               	  	 	<h2>15</h2>
               	  	 	<h5>Awards Won</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>20</h2>
               	  	 	<h5>Services</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>45</h2>
               	  	 	<h5>Happy Clients</h5>
               	  	 </div>
               	  	 <div class="stat-box">
               	  	 	<h2>200</h2>
               	  	 	<h5>Products</h5>
               	  	 </div>
               	  </div>
               </div>
               <!-- contact btn -->
               <a href="#contact" class="btn btn-01">Contact Me</a>
 			</div>
 		</div>
 	</div>
 </section>
 <!-- About Section End -->

 <!-- Service Section Start -->
 <section class="service-section" id="services">
 	<div class="container">
 		<div class="row">
 			<div class="section-title">
 				<h1>What I Do ?</h1>
 			</div>
 		</div>
 		<div class="row">
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/11.jpg" alt="service">
 					<div class="overlay">
 						<h4>Easy craft</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/12.jpg" alt="service">
 					<div class="overlay">
 						<h4>Waxing and hair removal</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/13.jpg" alt="service">
 					<div class="overlay">
 						<h4>Facial and skin care treatment</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/14.jpg" alt="service">
 					<div class="overlay">
 						<h4>Nail Treatments</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/15.jpg" alt="service">
 					<div class="overlay">
 						<h4>Mehndi</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 			<!-- service Item Start -->
 			<div class="service-item">
 				<div class="service-item-inner">
 					<img src="img/service/16.jpg" alt="service">
 					<div class="overlay">
 						<h4>Light party Makeup</h4>
 					</div>
 				</div>
 			</div>
 			<!-- service Item End -->
 		</div>
 	</div>
 </section>
 <!-- Service Section End -->

 <!-- Work Section Start -->
 <section class="work-section" id="works">
 	<div class="container">
 		<div class="row">
 			<div class="section-title">
 				<h1>My Works</h1>
 			</div>
 		</div>
 		<div class="row">
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img/works/thumb/11.jpg" data-large="img/works/large/11.jpg" alt="work">
 					<div class="overlay">
 						<h4>Easy craft</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img/works/thumb/12.jpg" data-large="img/works/large/12.jpg" alt="work">
 					<div class="overlay">
 						<h4>Waxing and hair removal</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img/works/thumb/16.jpg" data-large="img/works/large/16.jpg" alt="work">
 					<div class="overlay">
 						<h4>Facial and skin care treatment</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img/service/14.jpg" data-large="img/service/14.jpg " alt="work">
 					<div class="overlay">
 						<h4>Nail Treatments</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img/works/thumb/13.jpg" data-large="img/works/large/13.jpg" alt="work">
 					<div class="overlay">
 						<h4>Greeting cards</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 			<!-- Work Item Start -->
 			<div class="work-item">
 				<div class="work-item-inner">
 					<img src="img/works/thumb/17.jpg" data-large="img/works/large/17.jpg" alt="work">
 					<div class="overlay">
 						<h4>Facial, Bleach</h4>
 					</div>
 				</div>
 			</div>
 			<!-- Work Item End -->
 		</div>
 	</div>
 </section>
 <!-- Work Section End --> 


<!-- Contact Section Start -->
<section class="contact-section" id="contact">
	<div class="container">
		<div class="row">
			<div class="contact-img">
				<div class="img-box">
					<div class="section-title">
						<h1>Contact Me</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
        	<div class="contact-form">
        		<form class="form" method="post" action="query.php">
					<div class="row">
        				<div class="left input-group">
        					<label>Name</label>
        					<input type="text" placeholder="Your Name Here" name="name" class="input-control" required>
        				</div>
        				<div class="right input-group">
        					<label>Email or Phone</label>
        					<input type="text" placeholder="Your Email or Phone Here" name="email" id="validationDefault02" class="input-control" required>
							<div id="data10"></div>
						</div>
						<div class="left input-group">
        					<label>Contact</label>
        					<input type="number" placeholder="Your contact" class="input-control" name="contact" required>
        				</div>
        				<div class="right input-group">
        					<label>Your Interest</label>
        					<select class="input-control" required="*" name="interest" >
		
								<?php 
								$query="SELECT * FROM interest";
								$response=mysqli_query($con,$query);
								while ($result=mysqli_fetch_array($response)) 
								{
								?>
								<option value="<?php echo $result['interest'];?>">
								<?php echo $result['interest'];?></option>
								<?php	
								}
								?>
							</select>
        				</div>
        			</div>
        			<div class="row">
        				<div class="input-group">
        					<label>Description</label>
        					<textarea class="input-control" placeholder="Your Message Here" name="description" required></textarea>
        				</div>
        			</div>
        			<div class="form-btn">
        				<input type="submit" class="btn btn-01" value="Submit">
                    </div>
        		</form>
        	</div>
        </div>
        <div class="row">
        	<div class="contact-info">
        		<div class="row">
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Address</h5>
        				<p>Sec - 123, Meerut,Uttar Pradesh, 250002</p>
        			</div>
        			<!-- info item end -->
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Phone</h5>
        				<p>91 8218626363</p>
        			</div>
        			<!-- info item end -->
        			<!-- info item start -->
        			<div class="info-item">
        				<h5>Email</h5>
        				<p>guptaisha350@gmail.com</p>
        			</div>
        			<!-- info item end -->
        		</div>
        	</div>
        </div>

        <div class="row">
        	<div class="social-links">
        		<a href="#" title="facebook"><img src="img/icons/facebook.svg" alt="facebook"></a>
        		<a href="#" title="twitter"><img src="img/icons/twitter.svg" alt="twitter"></a>
        		<a href="#" title="linkedin"><img src="img/icons/linkedin.svg" alt="linkedin"></a>
        		<a href="#" title="instagram"><img src="img/icons/instagram.svg" alt="instagram"></a>
        	</div>
        </div>

	</div>
</section>
<!-- Contact Section End -->

<!-- copyright text -->
<p class="copyright">&copy; 2021</p>


 <!-- lightbox start -->
<div class="lightbox">
  <div class="img-box">
    <div class="lightbox-close">&times;</div>
    <img src="img/works/large/2.jpg" class="lightbox-img" alt="img">
    <div class="lightbox-caption">
      <div class="lightbox-category">
        
      </div>
      <div class="lightbox-counter">
        
      </div>
    </div>
    <div class="lightbox-controls">
      <div class="prev">
        <img src="img/icons/prev.svg" alt="prev">
            </div>
            <div class="next">
              <img src="img/icons/next.svg" alt="next">
            </div>
    </div>
  </div>
</div>
<!-- lightbox end -->

<script type="text/javascript">
        
        $(document).ready(function(){

                $('#validationDefault02').change(function()
                {
                    var email=$(this).val();
                  
                    $.post('fetch.php',{

                        email:email
                    },
                    function(html,status)
                    {
                        $('#data10').html(html);
                    }
                    )
                });

        });
</script>

<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
