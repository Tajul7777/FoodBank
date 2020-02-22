<?php

include("connection.php");

$query="SELECT * FROM `restaurent`";

$result = mysqli_query($conn,$query);

?>


<html>

    <head>
    
        <title>RESTAURANT DETAIL</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/shop-homepage.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    
        <style>
            
            /* Navbar */
            
            body
            {
                overflow-x: hidden;
                overflow-y: auto;
            }
            
            #navbar_body 
            { 
                background: linear-gradient(#190A05,#870000); 
                border-color: #222;  
            }
            #brand_header 
            { 
                font-family: 'Julius Sans One';
                color: #fff; 
            }
            #navbar_options
            { 
                font-family: 'Julius Sans One';
                color: #fff; 
                border-style: solid; 
                border-width: 0 0 2px 0; 
                border-color: transparent;
                transition: all 500ms ease;
            }
            #navbar_options:hover
            { 
                color:#fff;
                font-size: 15px;
            }
            #navbar_options:hover,
            #navbar_options:visited,
            #navbar_options:focus,
            #navbar_options:active 
            { 
                background: rgba(0,0,0,0.5); 
            }
            #navbar_option_button
            {
                background: #222; border-radius: 2px; 
            }
            #navbar_option_button:hover 
            { background: black; }
            
            
            #brand_header
            {
                font-size: 25px;
                font-family: 'Julius Sans One';
                -webkit-animation: neon 2s ease-in-out infinite alternate;
                -moz-animation: neon 2s ease-in-out infinite alternate;
                animation: neon 2s ease-in-out infinite alternate;
            }
            @-webkit-keyframes neon
            {
                to 
                {
                    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #fff, 0 0 70px #fff, 0 0 80px #fff;
                }
            }
            
            /* Navbar */
        
           
            /* Image  Slider*/
            
            .slide1,.slide2,.slide3,.slide4,.slide5,.slide6,.slide7,.slide8,.slide9,.slide10 
            {
                position: fixed;
                bottom: 0%;
                left: 0%;
                height: 100%;
                width: 100%;
                transition: all 1000ms ease;
            }
            .slide1 
            {
                background: url(images/res_1.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade 60s infinite;
                -webkit-animation:fade 60s infinite;
            } 
            .slide2 
            {
                background: url(images/food1.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade2 60s infinite;
                -webkit-animation:fade2 60s infinite;
            }
            .slide3 
            {
                background: url(images/res_2.jpeg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade3 60s infinite;
                -webkit-animation:fade3 60s infinite;
            }
            .slide4 
            {
                background: url(images/food2.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade4 60s infinite;
                -webkit-animation:fade4 60s infinite;
            }
            .slide5 
            {
                background: url(images/res_3.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade5 60s infinite;
                -webkit-animation:fade5 60s infinite;
            }
            .slide6 
            {
                background: url(images/food3.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade6 60s infinite;
                -webkit-animation:fade6 60s infinite;
            }
            .slide7 
            {
                background: url(images/res_4.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade7 60s infinite;
                -webkit-animation:fade7 60s infinite;
            }
            .slide8 
            {
                background: url(images/food4.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade8 60s infinite;
                -webkit-animation:fade8 60s infinite;
            }
            .slide9 
            {
                background: url(images/res_5.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade9 60s infinite;
                -webkit-animation:fade9 60s infinite;
            }
            .slide10 
            {
                background: url(images/food5.jpg)no-repeat center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                animation:fade10 60s infinite;
                -webkit-animation:fade10 60s infinite;
            }
            
            
            @keyframes fade
            {
                0%     {opacity:1}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:1}
            }
            @keyframes fade2
            {
                0%     {opacity:0}
                10%    {opacity:1}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade3
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:1}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade4
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:1}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade5
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:1}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade6
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:1}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade7
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:1}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade8
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:1}
                80%    {opacity:0}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade9
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:1}
                90%    {opacity:0}
                100%   {opacity:0}
            }
            @keyframes fade10
            {
                0%     {opacity:0}
                10%    {opacity:0}
                20%    {opacity:0}
                30%    {opacity:0}
                40%    {opacity:0}
                50%    {opacity:0}
                60%    {opacity:0}
                70%    {opacity:0}
                80%    {opacity:0}
                90%    {opacity:1}
                100%   {opacity:0}
            }
            
            /* Image  Slider*/
            
            
            
            /* Details */
            
            #restaurant_details
            {
                
                display: inline-block;
                position: relative;
                font-family: 'Julius Sans One';
                background: rgba(0,0,0,0.85);
            }
            #restaurant_detail_title
            {
                font-size: 45px;
                color: white;
                margin-top: 2.5%;
                -webkit-animation: neon 2s ease-in-out infinite alternate;
                -moz-animation: neon 2s ease-in-out infinite alternate;
                animation: neon 2s ease-in-out infinite alternate;
            }
            #restaurant_detail_address
            {
                color: white;
                margin-top: 1.5%;
                word-wrap: break-word;
            }
            #restaurant_detail_rating
            {
                color: white;
                margin-top: 1%;
            }
            #restaurant_detail_review
            {
                color: white;
                margin-top: 2.5%;
                text-decoration: none;
                cursor: pointer;
            }
            #restaurant_detail_review:hover
            {
                -webkit-animation: neon 2s ease-in-out infinite alternate;
                -moz-animation: neon 2s ease-in-out infinite alternate;
                animation: neon 2s ease-in-out infinite alternate;
            }
            #image
            {
                box-shadow: inset 0 0 25px rgba(255, 255, 255, .6), 0 0 25px rgba(255, 255, 255, .7);
                border-radius: 20px;
            }
            #restaurant_detail_review_main
            {
                color: white;
                -webkit-animation: neon 2s ease-in-out infinite alternate;
                -moz-animation: neon 2s ease-in-out infinite alternate;
                animation: neon 2s ease-in-out infinite alternate;
            }
            #restaurant_detail_rating_main
            {
                margin-top: 15%;
                color: white;
                -webkit-animation: neon 2s ease-in-out infinite alternate;
                -moz-animation: neon 2s ease-in-out infinite alternate;
                animation: neon 2s ease-in-out infinite alternate;
            }
            #parent
            {
                width: 100%;
            }
            #child1
            {
                width:30%;
                float: left;
                
            }
            #child2
            {
                width:27%;
                float: right;
            }
            
            #user_name,#user_date
            {
                color: white;
                font-size: 18px;
                font-family: 'Merienda One';
            }
            #user_review
            {
                color: lightgray;
                font-size: 16px;
                font-family: sans-serif;
                letter-spacing: 2px;
                line-height: 22px;
            }
            #comment_box
            {
                display: inline-block;
                position: relative;
                box-sizing: border-box;
                width: 95%;
                height: 10%;
                overflow-x: hidden;
                padding-top: 3px;
                padding-left: 15px;
                padding-right: 15px;
                font-size: 15px;
                resize: none;
                outline: none;
            }
            #post_comment_button 
            {   
                background: transparent; 
                color: #fff;
                cursor: pointer;
                font-size:16px;
                font-family: 'Julius Sans One', sans-serif;
                padding: 13px 50px; 
                max-width: 160px; 
                text-decoration: none;
                text-transform:uppercase;
                vertical-align: middle;
                width: 100%;     
                border: 0 solid;
                box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
                outline: 2px solid;
                outline-color: rgba(255, 255, 255, .5);
                outline-offset: 0px;
                text-shadow: none;
                transition: all 1000ms cubic-bezier(0.19, 1, 0.22, 1);
                margin-bottom: 10%;
            } 
            #post_comment_button:hover
            {
                border: 1px solid;
                box-shadow: inset 0 0 25px rgba(255, 255, 255, .5), 0 0 25px rgba(255, 255, 255, .2);
                outline-color: rgba(229, 45, 39, 0);
                outline-offset: 25px;
                border-radius: 0;
                text-shadow: 1px 1px 1px #fff; 
            }
            
            /* Details */
            
            
            
            /* Footer */
            
            #footer_body
            {
                position: relative;
                background: #222;
                color: white;
                font-family: 'Julius Sans One';
            }
            
            /* Footer */
            
        </style>
        
    </head>

    
    <body>
    
        <!-- Navbar -->
        
        <div>
            <nav id="navbar_body" class="navbar navbar-findcond navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button id="navbar_option_button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span style="background: #fff;"  class="icon-bar"></span>
                            <span style="background: #fff;" class="icon-bar"></span>
                            <span style="background: #fff;" class="icon-bar"></span>
                        </button>
                        <a id="brand_header" class="navbar-brand" href="index.php">FOOD BANK</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a id="navbar_options" href="restaurant.php">Restaurant<span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a id="navbar_options" href="foods.php">Foods<span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a id="navbar_options" href="#">Log-In<span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a id="navbar_options" href="#">Log-Out<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- Navbar -->
        
        <!-- Image Slider -->
        
        <div class='slider'>
            <div class='slide1'></div>
            <div class='slide2'></div>
            <div class='slide3'></div>
            <div class='slide4'></div>
            <div class='slide5'></div>
            <div class='slide6'></div>
            <div class='slide7'></div>
            <div class='slide8'></div>
            <div class='slide9'></div>
            <div class='slide10'></div>
        </div>
        
        <!-- Image Slider -->
        
        <!-- Restaurant Body -->
        
        <br>
        <div class="container">
            <div style="margin-left:0%;border-radius:50px;" id="restaurant_details" class="row">
                <div class="row">
                    <div align="center" class="container">
                        <h1 id="restaurant_detail_title">ABC Restaurant</h1>
                        <h3 id="restaurant_detail_address">ABC Restaurant Address</h3>
                        <h4 id="restaurant_detail_rating">Rating : 4 . 5 / 5</h4>
                        <a id="restaurant_detail_review">Reviews</a>
                    </div>
                    <br><br>
                    <div class="row"> 
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <img id="image" class="img-responsive" src="images/17.jpg">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div align="center">
                        <br>
                        <hr style="width:70%;">
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div id="parent">
                                <div id="child1">
                                    <h1 id="restaurant_detail_review_main">Reviews</h1>
                                </div>
                                <div id="child2">
                                    <h3 id="restaurant_detail_rating_main">Rating : 4 . 5 / 5</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div>
                                <label id="user_name">Piya Prue Marma</label>
                                <label id="user_date">&nbsp;&nbsp;&nbsp;&nbsp;17 / 12 / 17</label>
                                <h5 id="user_review">
                                    Food is the necessity of life. It provides nutrition, sustenance and growth to human body. Food can be classified into cereals, pulses, nuts and oilseeds, vegetable, fruits, milk and milk products and flesh food. Food comprises protein, facts, carbohydrates, vitamins, minerals salts and water. Most of the food items contain all these in varying properties. Oil and ghee are exclusively fats while sugarcane and starch contain high amount of carbohydrates. Accordingly, food items are termed as protein rich, vitamin rich, fat rich food etc. Proteins, fats and carbohydrates are usually termed as proximate principles.
                                </h5>
                            </div>
                            <hr style="margin-top:3%;margin-bottom:3%;border-color: gray;">
                            <div>
                                <label id="user_name">Usai Marma</label>
                                <label id="user_date">&nbsp;&nbsp;&nbsp;&nbsp;15 / 12 / 17</label>
                                <h5 id="user_review">
                                    Food is the necessity of life. It provides nutrition, sustenance and growth to human body. Food can be classified into cereals, pulses, nuts and oilseeds, vegetable, fruits, milk and milk products and flesh food. Food comprises protein, facts, carbohydrates, vitamins, minerals salts and water.
                                </h5>
                            </div>
                            <hr style="margin-top:3%;margin-bottom:3%;border-color: gray;">
                            <div>
                                <div align="center" class="row">
                                    <label style="font-size:18px;color:white;font-family:'Merienda One';" id="comment_box_header">COMMENT BOX</label>
                                    <form action="" method="post">
                                        <br>
                                        <textarea id="comment_box" style="font-family:sans-serif;"></textarea>
                                        <br><br><br>
                                        <a id="post_comment_button">Post Comment</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <br><br>
                </div>
            </div>

        </div>
        <!-- Restaurant Body -->
        
        <br><br><br><br><br>
        <br><br><br><br>
        
        <!-- Footer Body -->
        
        <div id="footer_body" align="center" class="row">
            <h1 style="margin-top:2%;margin-bottom:2%;">Piya Prue Marma - 011 142 138</h1>
        </div>
        
        <!-- Footer Body -->
        
    </body>

</html>