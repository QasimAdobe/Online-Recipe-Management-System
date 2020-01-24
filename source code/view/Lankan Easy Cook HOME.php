<!DOCTYPE html>
<html>
	<title>Welcome | Sri Lankan Easy Cook...
	</title>

	    <link rel="icon" href="img/recipe.jpeg">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="stylesheets/stylesheet.css">
	<link rel="stylesheet" href="stylesheets/commenstyle.css">

</head>
<body>
	
<!-- BACKGROUND IMAGE -->

	<div class="bg-image"><img src="img/bg.jpg" width="100%" height="184%" ></div>

	
	<header>

<!-- LOGO & HEADER .-->

		<div id="container">
		   <div id="logo">
					<img src = "img/recipe.jpeg", width = 400px, heigt = 180px, border = "4">
		   </div> 

		   <div id="name">

			<h1 class="headding1" >Lankan Easy Cook...</h1>
			<p class="headding2">Sri Lankan Largest Online Recipes</p>		
			 </div>
			 
<!--SEARCH BAR -->

		   <div id="search-bar">
            		<form>
               	 		<input class="form-search" type="search" placeholder="Find a Recipe" aria-label="find">
							<button class="seach-button" type="submit" style="padding : 0px; border-radius: 0px;">Search</button>
            		</form>

        </div>

<!-- LOGIN & REGISTER BUTTON -->

		   <div id="sign-button">
				<a href="login.html"><button class="button-log">Login</button></a>
				<a href="register.html"><button class="button-log">Register</button></a>
		   </div>
		</div>

	</header>

	<!-- NAV BAR -->

	<hr class="navUp_hr">

	<div class="nav">
  		<a button class="button" href="Lankan Easy Cook HOME.html" id="active">Home</button></a>
 		<a button class="button" href="recipe.html">Recipes</button></a>
 		<a button class="button" href="free.html">Free</button></a>
  		<a button class="button" href="contactUs.html">Contact Us</button></a>
  		<a button class="button" href="aboutAs.html">About Us</button></a>
  		<a button class="button" href="mycart.html">My Cart</button></a> 
	</div> 

		<hr class="nav-hr">

<!-- SLIDESHOW IMAGES -->

	<div class="img_slideshow" >

 		 <img class="mySlides" src="img/sec-1.jpg" >
 		 <img class="mySlides" src="img/sec-2.jpg" >
  	 	<img class="mySlides" src="img/sec-3.jpeg" >

	</div>
<!-- Latest -->

	<h1 id="name" class="latest">Latest Recipes...<h1></h1>


<!-- VIRTICAL LINE -->

<div class="vl"></div>
<br/>

<!-- SIDE BAR -->


<div class="side-bar">
		<hr class="cat_hr">

	<a button class="drop_bt" id="drop_bt1" href="Meal Type.html">&#9673; Meal Type</button></a>
	<a button class="drop_bt" id="drop_bt2" href="Seasonal.html">&#9673; Seasonal</button></a>
	<a button class="drop_bt" id="drop_bt3" href="Diet & Health.html">&#9673; Diet & Health</button></a>
	<a button class="drop_bt" id="drop_bt4" href="Dish Type.html">&#9673; Dish Type</button></a>
	<a button class="drop_bt" id="drop_bt5" href="World Cuisine.html">&#9673; World Cuisine</button></a>

	<hr class="cat_hr-down">
</div>


<!-- LATEST RACIPES -->

<div class="latest_recipes" >
	<div class="latset-image1">
		<img class="latset-image" src="img/latest1.jpg">
		<p class="nameNprice"><center>XXRecipe NameXX</center></p>
		<p class="nameNprice"><center>$$Price$$</center></p>
	</div>

	<div class="latset-image2">
		<img class="latset-image" src="img/latest2.jpg">
		<p class="nameNprice"><center>XXRecipe NameXX</center></p>
		<p class="nameNprice"><center>$$Price$$</center></p>
	</div>

	<div class="latset-image3">
		<img class="latset-image" src="img/latest3.jpg">
		<p class="nameNprice"><center>XXRecipe NameXX</center></p>
		<p class="nameNprice"><center>$$Price$$</center></p>
	</div>

	<div class="latset-image4">
		<img class="latset-image" src="img/latest4.jpg">
		<p class="nameNprice"><center>XXRecipe NameXX</center></p>
		<p class="nameNprice"><center>$$Price$$</center></p>
	</div>


</div>

<hr class="fotterup-hr">

<!-- FOOTER -->


<div class="categories_box">Categories</div>


<div class="fotter_logo" >
		<img class="fotter_logo1" src="img/logo.png" >
</div>

<div class="fotter_logo" >
		<img class="fotter_logo2" src="img/logo2.png" >
</div>

<hr id="fotter-hr">
<p class = "footer_txt1">Copyright Statement</p>
<p class = "footer_txt2">Privary Policy | Terms and Conditions</p>
<hr class="fotter-hr">

<!-- Image Slideshow SCRIPT --> 

<script>

		var myIndex = 0;
		carousel();
	
		function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
	
		for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
		}
		myIndex++;
	
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 2000);
	}
	</script>

</body>
</html>