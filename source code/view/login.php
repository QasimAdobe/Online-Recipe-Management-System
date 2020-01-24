<head>

    <link rel="stylesheet" href="stylesheets/commenstyle.css">
    <link rel="stylesheet" href="stylesheets/login.css">
    
    <script>
        function greeting(){
            alert("Welcome! Your Last Successfull login updated !");
            return true;
        }
    </script>
    <script>
            function cancel() {
            var okToRefresh = confirm("Do you really want to clear your empty fields? ");
            if (okToRefresh) {
                setTimeout("location.reload(true);", 100);
            }
        }
    </script>
    <title>Login | Sri Lankan Easy Cook...</title>

    <link rel="icon" href="img/recipe.jpeg">

</head>

<body>
    <header>
        <!--.. BACKGROUND IMAGE -->

        <div class="bg-image"><img src="img/bg.jpg" width="100%" height="184%">
        </div>


        <header>

            <!--.. LOGO & HEADER -->

            <div id="container">
                <div id="logo">
                    <img src="img/recipe.jpeg" ,="" width="400px," heigt="180px," border="4">
                </div>

                <div id="name">

                    <h1 class="headding1">Lankan Easy Cook...</h1>
                    <p class="headding2">Sri Lankan Largest Online Recipes</p>
                </div>

                <!--.. SEARCH BAR -->

                <div id="search-bar">
                    <form>
                        <input class="form-search" type="search" placeholder="Find a Recipe" aria-label="find">
                        <button class="seach-button" type="submit" style="padding : 0px; border-radius: 0px;">Search</button>
                    </form>

                </div>

                <!--.. LOGIN & REGISTER BUTTON -->

                <div id="sign-button">
                        <a href="login.html"><button class="button-log">Login</button></a>
                        <a href="register.html"><button class="button-log">Register</button></a>
                </div>
            </div>

        </header>

        <!--.. NAV BAR -->

        <hr class="navUp_hr">

        <div class="nav">
            <a button="" class="button" href="Lankan Easy Cook HOME.html">Home</a>
            <a button="" class="button" href="recipe.html">Recipes</a>
            <a button="" class="button" href="free.html">Free</a>
            <a button="" class="button" href="contactUs.html">Contact Us</a>
            <a button="" class="button" href="aboutAs.html">About Us</a>
            <a button="" class="button" href="mycart.html">My Cart</a>
        </div>

        <hr class="nav-hr">

        <!--.. VIRTICAL LINE -->

        <div class="vl"></div>
        <br>

        <!--.. SIDE BAR -->

        <div class="side-bar">
            <hr class="cat_hr">

            <a button="" class="drop_bt" id="drop_bt1" href="Meal Type.html">&#9673; Meal Type</a>
            <a button="" class="drop_bt" id="drop_bt2" href="Seasonal.html">&#9673; Seasonal</a>
            <a button="" class="drop_bt" id="drop_bt3" href="Diet & Health.html">&#9673; Diet & Health</a>
            <a button="" class="drop_bt" id="drop_bt4" href="Dish Type.html">&#9673; Dish Type</a>
            <a button="" class="drop_bt" id="drop_bt5" href="World Cuisine.html">&#9673; World Cuisine</a>

            <hr class="cat_hr-down">
        </div>



        <!--.. FOOTER -->

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
    </header>

    <!--.. END COMMEN PARTS -->

    <div class="user-area"></div>

    <img class="user-img" src="img/user.png">

    <form>

        <div class="form-div1">
            <label for="uname"><b>Username</b>
            </label>
            <input type="text" placeholder="Enter Username" name="uname" required="">

            <label for="psw"><b>Password</b>
            </label>
            <input type="password" placeholder="Enter Password" name="psw" required="">

            <button type="submit" value="submit" onclick="return greeting();">Login</button>

        </div>

        <div class="form-div2">
            <button type="button" value="delete" class="cancelbtn" onclick="return cancel();">Cancel</button>
            <span class="psw"><a id = "link1" href="#"> Forgot password?</a></span>
        </div>
    </form>
</body>