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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

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
            <img id="sliderImage" class="first-slide" src="img/elecBack.jpg" alt="First slide">
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
   var images = ["img/elecBack.jpg", "img/Back.png", "img/elecBack1.png"];
   var currentIndex = 0;
   var sliderImage = document.getElementById("sliderImage");

   function changeSliderImage() {
      currentIndex = (currentIndex + 1) % images.length;
      sliderImage.src = images[currentIndex];
   }

   setInterval(changeSliderImage, 2000);
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>