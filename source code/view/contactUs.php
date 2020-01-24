<!DOCTYPE html>
<html>
<title>Contact Us | Sri Lankan Easy Cook...
</title>

<link rel="icon" href="img/recipe.jpeg">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylesheets/commenstyle.css">
    <link rel="icon" href="img/recipe.jpeg">
    <link rel="stylesheet" type="text/css" href="stylesheets/con1.css">

</head>

<body>
    <!-- BACKGROUND IMAGE -->

    <div class="bg-image"><img src="img/bg.jpg" width="100%" height="184%"></div>


    <header>

        <!-- LOGO & HEADER -->

        <div id="container">
            <div id="logo">
                <img src="img/recipe.jpeg" , width=4 00px, heigt=1 80px, border="4">
            </div>

            <div id="name">

                <h1 class="headding1">Lankan Easy Cook...</h1>
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
        <a button class="button" href="Lankan Easy Cook HOME.html">Home</button></a>
        <a button class="button" href="recipe.html">Recipes</button></a>
        <a button class="button" href="free.html">Free</button></a>
        <a button class="button" href="contactUs.html" id="active">Contact Us</button></a>
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
        <a button class="drop_bt" id="drop_bt2" href="Seasonal.html">&#9673; Seasonal </button></a>
        <a button class="drop_bt" id="drop_bt3" href="Diet & Health.html">&#9673; Diet & Healthy</button></a>
        <a button class="drop_bt" id="drop_bt4" href="Dish Type.html">&#9673; Dish Type</button></a>
        <a button class="drop_bt" id="drop_bt5" href="World Cuisine.html">&#9673; World Cuisine</button></a>

        <hr class="cat_hr-down">
    </div>


    <!-- FOOTER -->

    <div class="categories_box">Categories</div>


    <div class="fotter_logo">
        <img class="fotter_logo1" src="img/logo.png">
    </div>

    <div class="fotter_logo">
        <img class="fotter_logo2" src="img/logo2.png">
    </div>

    <hr id="fotter-hr">
    <p class="footer_txt1">Copyright Statement</p>
    <p class="footer_txt2">Privary Policy | Terms and Conditions</p>
    <hr class="fotter-hr">

    <!-- END COMMEN PARTS -->

    <div class="writing-area"></div>

    <div class="all-bar">
        <div class="sidebar-one">
            <div>
                <h2 class="s-one-title">Inquiries and Feedback</h2>
                <form class="form-one" id="form1" name="feedback" method="get" action="feedback.php" onSubmit="return validation()">
                    <p>
                        <label for="name">Enter name <span>:</span></label>
                        <input type="text" id="name" value="" name="username" placeholder="Name" />
                    </p>
                    <p>
                        <label for="email">Enter email <span>:</span></label>
                        <input type="email" id="email" value="" name="mail" placeholder="Email Address" />
                    </p>
                    <p>
                        <label for="phone">Enter Phone number <span>:</span></label>
                        <input type="text" id="phone" value="" name="phoneno" placeholder="Phone Number" />
                    </p>
                    <p>
                        <label for="country">Select country <span>:</span></label>
                        <select name="count">
					<optgroup label="Select Your Country">
					<option selected  value="Sri Lanka">Sri Lanka</option>
					<option  value="India">India</option>
					<option  value="Japan">Japan</option>
					<option  value="China">China</option>
				</select>
                    </p>
                    <p>
                        <label for="feedback">Inquiries and Feedback <span>:</span></label>
                        <textarea cols="25" rows="10" placeholder="Your feedback" name="message"></textarea>
                    </p>
                    <button type="submit" value="Submit" id="submit-btn" class="sub-btn click-btn">Submit</button>
                    <button type="reset" name="sub" value="Reset" id="reset-btn" class="re-btn click-btn">Reset</button>
                </form>
            </div>
        </div>
        <div class="sidebar-two">
            <h2 class="s-two-title">Contact us</h2>
            <ul>
                <li><img src="img/Mobile-Phone-icon.png"><b>011-2123456</b></li>
                <li><img src="img/iconfinder_facebook_circle_color_107175.png"><b>Lankan Easy Cook</b></li>
                <li><img src="img/icons8-marker-26.png"><b>225/A new kandy road malabe</b></li>
                <li><img id="gmail-logo" src="img/icons8-gmail-48.png"><b id="mail">lankan_recipe@gmail.com</b></li>

            </ul>
        </div>
    </div>
    <script type="text/javascript" src="js/con1.js"></script>