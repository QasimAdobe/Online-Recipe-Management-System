<!DOCTYPE html>
<html>
	<title>Payment | Sri Lankan Easy Cook...
	</title>

		<link rel="icon" href="img/recipe.jpeg">
		<link rel="stylesheet" type="text/css" href="stylesheets/Payment.css">
		<script type="text/javascript" src="js/pay.js"></script>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="stylesheets/commenstyle.css">

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

	</header>

	<!-- NAV BAR -->

	<hr class="navUp_hr">

	<div class="nav">
        <a button class="button" href="Lankan Easy Cook HOME.html" >Home</button></a>
        <a button class="button" href="recipe.html" >Recipes</button></a>
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
    <a button class="drop_bt" id="drop_bt2" id="active" href="Ingredient.html">&#9673; Seasonal </button></a>
    <a button class="drop_bt" id="drop_bt3" href="Diet & Health.html">&#9673; Diet & Healthy</button></a>
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

<div class="text-area">
	<div class="sidebar-one"><div>
			<h2 class="s-one-title"><b>Enter your card details</b></h2>
	<form class="form-one" id="form1" name="card" method="post" action="" onSubmit="return validation()">
		
					<lable for="name" class="payWith"><b>Pay With<span>:</span></b></lable><br/><br/>
						<label class="choose-name">Paypal<lable/>
			<input type = "radio" name="payment" value="Paypal">
					<label class="choose-name">Credit Card or Debit Cart</label>
			<input type = "radio" name="payment" value="Credit card or Debit card"><br/><br/>
				
			
				
				<p>
					
					<label for="name">Card holder name<span>:</span></label>
					<input type="text" id="name" value="" name="username"/>
				</p>
				<p>
					<label for="number">Card number <span>:</span></label>
					<input type="text" id="number" value="" name="number"/>
				</p>
				<p>
					<label for="date">Expiration Date <span>:</span></label>
					<input type="date" id="date" value="" name="date" />
				</p>
				<p>
					<label for="CCV">CCV <span>:</span></label>
					<input type="CCV" id="CCV" value="" name="CCV" />
				</p>
				
				<button type="submit" value="Submit"  class="sub-btn ">PayNow</button>
				<button type="reset" value="Reset"  class="re-btn ">Reset</button>
				<form/></div>
		</div>
			
		<div class="sidebar-two">
		<h2 class="s-two-title"></h2>
			<img src="img/pay.jpg">
		</div>
</div>			
</body>
</html>
