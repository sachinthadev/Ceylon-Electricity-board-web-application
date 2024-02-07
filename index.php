<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CEB Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="js/bootstrap.js">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    

</head>

<body class="main-layout">

<!-- Loading Gif Start-->

   <div id="loader-container" class="loader-container">
      <img src="img/loading.gif" class="loader-image" alt="Loading...">
   </div>


   <script>
      // Function to show the loader
      function showLoader() {
         document.getElementById("loader-container").style.display = "flex";
      }

      // Function to hide the loader
      function hideLoader() {
         document.getElementById("loader-container").style.display = "none";
      }

      // Show the loader initially
      showLoader();

      // Hide the loader after 2 seconds
      setTimeout(hideLoader, 2000);
   </script>

<!-- Loading Gif End-->



   <!-- Nav bar start-->
	<nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#720F11;">

	 <div class="container">
		<a href="" class="navbar-brand main-logo-container" style="align-content: center;">
			<img src="img/CebLogo.png" class="main-logo">
		</a>

	 </div>
	</nav>

   <!-- Nav bar end-->

	<section class="slider_section">
   <div id="myCarousel" class="carousel slide banner-main">
      
      <div class="WELCOME" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
      <h1 style="text-align: center; color: white; font-size: 90px; position: absolute; top: 30px; left: 50%; transform: translateX(-50%); z-index: 1; width: 100%;">WELCOME </br>CEYLON ELECTRICITY BOARD</h1>
      </div>

      <div class="carousel-inner">
         <div class="carousel-item active">
            <img id="sliderImage" class="first-slide" src="img/slider1.jpg" alt="First slide">
         </div>
      </div>

      	<div class="container">
            <div class="carousel-caption relative">
               <div class="Main-Page-button">
	
						<button class="Main-Page-button"><img src="img/about-us.png" class="bimg"></br> Who We Are </br> <a class="who">about us</a> </button>

						<a href="customer registration.php" style="text-decoration: none; color: white; "><button class="Main-Page-button"><img src="img/new-user.png" class="bimg"></br>New User Request </br> <a class="who">about us</a></button></a>
 
						<a href="LoginPage.php" style="text-decoration: none; color: white; ">  <button class="Main-Page-button"> <img src="img/login.png" class="bimg"></br>Log In </br> <a class="who">Register</a></button>	</a>
					</div>
        
             </div>
            </div>
  		 </div>
</section>


<!--Footer Start-->

<footer>
   <div class="footer">
      <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 width">
         <div class="img1">
            <img src="img/Presedentsite1.png" class="footer-image">
         </div>
         </div>

         <div class="col-lg-4 col-md-6 col-sm-12 width">
         <div class="img1">
            <img src="img/Presedentsite2.png" class="footer-image">
         </div>
         </div>

         <div class="col-lg-4 col-md-6 col-sm-12 width">
         <div class="img1">
            <img src="img/Presedentsite3.png" class="footer-image">
         </div>
         </div>

         </div>
      </div>
   </div>
</footer>

<div class="copyright">
   <p>Copyright @ 2023 Ceylon Electricity Board</p>
</div>

<!--Footer End-->



 <!--Slider_change-->
<script>
   var images = ["img/slider1.jpg", "img/slider2.jpg", "img/slider3.jpg"];
   var currentIndex = 0;
   var sliderImage = document.getElementById("sliderImage");

   function changeSliderImage() {
      currentIndex = (currentIndex + 1) % images.length;
      sliderImage.src = images[currentIndex];
   }

   setInterval(changeSliderImage, 2000);
</script>




</body>
</html>