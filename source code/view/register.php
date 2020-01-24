<!DOCTYPE html>
<html>
	<title>Register | Sri Lankan Easy Cook...
	</title>

		<link rel="icon" href="img/recipe.jpeg">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="stylesheets/register.css">
	<link rel="stylesheet" href="stylesheets/commenstyle.css">
	<script src="js/java1.js"></script> 

</head>
<body>
<!-- BACKGROUND IMAGE -->

	<div class="bg-image"><img src="img/bg.jpg" width="100%" height="184%" ></div>

	
	<header>

<!-- LOGO & HEADER -->

		<div id="container">
		   <div id="logo">
					<img src = "img/recipe.jpeg", width = 400px, heigt = 180px, border = "4">
		   </div> 

		   <div id="name">

			<h1 class="headding1" >Lankan Easy Cook...</h1>
			<p class="headding2">Sri Lankan Largest Online Recipes</p>		
			 </div>
			 
<!-- SEARCH BAR -->

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
        <a button class="button" href="Lankan Easy Cook HOME.html" >Home</button></a>
        <a button class="button" href="recipe.html">Recipes</button></a>
        <a button class="button" href="free.html">Free</button></a>
        <a button class="button" href="contactUs.html">Contact Us</button></a>
        <a button class="button" href="aboutAs.html">About Us</button></a>
        <a button class="button" href="mycart.html">My Cart</button></a> 
	</div>

		<hr class="nav-hr">

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

<!-- END COMMEN PARTS -->  

<div class="area"></div>

<div class="writing-area">

<h1 class="form-header">Register at Lanka Easy Cook</h1>

<div class="reg-form">
<form method="post" name="myform">


<input  type="text" name="first name" placeholder="First name" minlength="5">
<br>


<input type="text" name="lastname"  placeholder="Last Name">
<br>


<input type="email" name="email"  placeholder="Email">
<br>


<input type="date" name="DOB"  placeholder="Date Of Birth">
<br>


<input type="password" class="pWrd"  placeholder="Password" minlength="8" required onkeyup='check()' id="pWrd" name="pWrd" required>
<br>


<input type="password" class="conPsw"  placeholder="Confirm Password" required onkeyup='check()' id="conPsw" name="conPsw" required>
<br>

	<label class="gender">Gender :</label><br><br>

	<div class="radiobtn">

    <center><input type="radio" name="gender" >Male<br></center>
	<center><input type="radio" name="gender" >Female<br></center>
</div>
<br>
    <h3 class="pw_check" id="pw_check">Password is not matching. please enter your password again.</h3>
<div class="buttns">
	<input onclick="checking()" type="submit" value="Register" style="height:40px">
	<input type="reset" style="height:40px">
</div>


</form>
</div>
</div>

</body>
</html>