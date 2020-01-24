<!DOCTYPE html>
<html>
	<title>My Cart | Sri Lankan Easy Cook...
	</title>

	    <link rel="icon" href="img/recipe.jpeg">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="stylesheets/mycart.css">
    <link rel="stylesheet" href="stylesheets/commenstyle.css">
    <script src="js/cart.js" async></script>
            

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
        <a button class="button" href="recipe.html">Recipes</button></a>
        <a button class="button" href="free.html">Free</button></a>
        <a button class="button" href="contactUs.html">Contact Us</button></a>
        <a button class="button" href="aboutAs.html">About Us</button></a>
        <a button class="button" href="mycart.html" id="active">My Cart</button></a> 
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


    <div class="text-area">  </div>

<div class="body-area">
    <div class="section-main"><br/><br/>
        <h2 class="section-header">CART</h2><br/>
        <div class="cart-rowHead">
            <div class="cart-item cart-header cart-column">ITEM</div>
            <div class="cart-price cart-header cart-column">PRICE</div>
            <div class="cart-quantity cart-header cart-column">QUANTITY</div>
        </div>
        <div class="cart-items">
            <div class="cart-column cart-row">
                <div class="cart-item item-content">
                    <img class="cart-item-image" src="img/img.jpg" width="100" height="100">
                    <div class="cart-item-title">XXRecipe NameXX</div>
                </div>
            <div class="cart-price">$10</div>
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button" style="width:160px;">REMOVE</button>
            </div>
            <div class="cart-column cart-row">
                <div class="cart-item item-content">
                    <img class="cart-item-image" src="img/img.jpg" width="100" height="100">
                    <div class="cart-item-title">XXRecipe NameXX</div>
                </div>
                <div class="cart-price">$20</div>
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button" style="width:160px;">REMOVE</button>
            </div>
            
            <div class="cart-column cart-row">
                <div class="cart-item item-content">
                    <img class="cart-item-image" src="img/img.jpg" width="100" height="100">
                    <div class="cart-item-title">XXRecipe NameXX</div>
                </div>
            <div class="cart-price">$30</div>
                <input class="cart-quantity-input" type="number" value="1">
                <button class="btn btn-danger" type="button" style="width:160px;">REMOVE</button>
            </div>	
        </div>
        <div class="cart-total">
            <div class="cart-total-title">Total</div>
            <div class="cart-total-price">$60</div>
        </div>
        <a  href="payment.html"><button class="btn btn-primary btn-purchase" type="button">PURCHASE </button></a>
    </div>
</div>
</body>
</html>
