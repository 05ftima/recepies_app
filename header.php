<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="Stylesheet" href="./style.css"/>

</head>
<body>
        <!-- navbar -->
        <nav class="navbar">

          <div class="search_and_log">
            <img class="logo" src="" alt="">

            <!--<form action="">
              <div class="search-container">
                  <input type="search" placeholder="What would you like to cook?">
              </div>
            </form>-->

            <div>
              <button><a href="Login.php">Log In</a></button>
              <button style="background-color: #df321b;"><a href="Signup.php">Subscribe</a></button>
            </div>

          </div>

          <div class="cock_and_recipes">
            <a href="./index.php"><p >Home</p></a>
              <p id="cock_and_recipes_text">What to Cook</p>
              <p id="recipes_text">Recipes</p>
              <p id="ingredients_text"> ingredients</p>
              <p id="Occasion_text">Occasion</p>
              <a href="#foter">About Us</a>
          </div>
        </nav>


        <section>
            <div class="nytcDesktopOpenMenu" id="Cook_menu">
              <div>
                <p class="nytcSectionName">Staff Picks</p>
                <ul class="nytcSectionLinks">
                  <li><a href=""><p>New and Updated</p></a></li>
                  <li><a href=""><p>Healthy Dinner Recipes</p></a></li>
                  <li><a href="./page2.php?id=2"><p>Soup and Stews</p></a></li>

                </ul>
              </div>

              <div>
                <p class="nytcSectionName">FROM OUR NEWSLETTERS</p>
                <ul class="nytcSectionLinks">
                  <li><a href=""><p>The Cooking Newsletter</p></a></li>
                  <li><a href=""><p>Five Weeknight Dishes</p></a></li>
                  <li><a href=""><p>The Veggie</p></a></li>
                </ul>
              </div>

              <!--
              <div>
                <p class="nytcSectionName">PERFECT FOR</p>
                <ul class="nytcSectionLinks">
                  <li><a href=""><p>One-Pot Dinners</p></a></li>
                  <li><a href=""><p>Weeknight Chicken</p></a></li>
                  <li><a href=""><p>Quick Pastas</p></a></li>
                  <li><a href=""><p>30 Minute Vegetarian</p></a></li>
                  <li><a href=""><p>Easy Baking</p></a></li>
                </ul>
              </div>-->

            </div>
  

            <div class="nytcDesktopOpenMenu" id="recipes_menu">

              <div >
                <p class="nytcSectionName">EVERYDAY RECIPES</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page4.php?getnam=Easy"?>"><p>Easy</p></a></li>
                  <li><a href="<?php echo "page4.php?getnam=Healthy"?>"><p>Healthy</p></a></li>
                  <li><a href="<?php echo "page4.php?getnam=Weeknight"?>"><p>Weeknight</p></a></li>
                  <li><a href="<?php echo "page4.php?getnam=Pasta"?>"><p>Pasta</p></a></li>
                  <li><a href="<?php echo "page4.php?getnam=Quick"?>"><p>Quick</p></a></li>
                </ul>
              </div>

              <div>
                <p class="nytcSectionName">BY MEAL</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page1.php?nam=Dinner";  ?>"><p>Dinner</p></a></li>
                  <li><a href="<?php echo "page1.php?nam=Breakfast";  ?>"><p>Breakfast</p></a></li>
                  <li><a href="<?php echo "page1.php?nam=lunch";  ?>"><p>Lunch</p></a></li>
                  <li><a href="<?php echo "page1.php?nam=Desserts";  ?>"><p>Desserts</p></a></li>
                  <li><a href="<?php echo "page1.php?nam=Drinks";  ?>"><p>Drinks</p></a></li>
                </ul>
              </div>

              <div>
                <p class="nytcSectionName">BY DIET</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page5.php?vegan=1"?>"><p>Vegetarian</p></a></li>
                  <li><a href="<?php echo "page5.php?vegan=2"?>"><p>Vegan</p></a></li>
                </ul>
                </ul>
              </div >

            </div>
  
            
            <div class="nytcDesktopOpenMenu" id="ingredients_menu">
              <div >
                <p class="nytcSectionName">MEAT & SEAFOOD</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page5.php?name=1";  ?>"><p>Chicken</p></a></li>
                  <li><a href="<?php echo "page5.php?name=2";  ?>"><p>Beef</p></a></li>
                  <li><a href="<?php echo "page5.php?name=3";  ?>"><p> Pork</p></a></li>
                  <li><a href="<?php echo "page5.php?name=4";  ?>"><p>Salmon</p></a></li>
                  <li><a href="<?php echo "page5.php?name=5";  ?>"><p>Shrimp</p></a></li>
                </ul>
              </div>

              <div>
                <p class="nytcSectionName">VEGETABLES & FRUITS</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page5.php?name=6";  ?>"><p>Zucchini</p></a></li>
                  <li><a href="<?php echo "page5.php?name= 7";  ?>"><p>Sweet Potato</p></a></li>
                  <li><a href="<?php echo "page5.php?name=8";  ?>"><p>Eggplant</p></a></li>
                  <li><a href="<?php echo "page5.php?name=9";  ?>"><p>Cabbage</p></a></li>
                  <li><a href="<?php echo "page5.php?name=10";  ?>"><p>Asparagus</p></a></li>
                  <li><a href="<?php echo "page5.php?name=11";  ?>"><p>Tomato</p></a></li>
                </ul>
              </div>

              <div>
                <p class="nytcSectionName">PLANT-BASED PROTEINS</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page5.php?name=12";  ?>"><p>Tofu</p></a></li>
                  <li><a href="<?php echo "page5.php?name=13";  ?>"><p>Lentil</p></a></li>
                  <li><a href="<?php echo "page5.php?name=14";  ?>"><p>Chickpea</p></a></li>
                  <li><a href="<?php echo "page5.php?name=15";  ?>"><p>Bean</p></a></li>
                </ul>
                </ul>
              </div >

              <div>
                <p class="nytcSectionName">RICE, GRAINS, PASTA</p>
                <ul class="nytcSectionLinks">
                  <li><a href="<?php echo "page5.php?name=16";  ?>"><p>Pasta</p></a></li>
                  <li><a href="<?php echo "page5.php?name=17";  ?>"><p>Noodles</p></a></li>
                  <li><a href="<?php echo "page5.php?name=18";  ?>"><p>Rice</p></a></li>
                  <li><a href="<?php echo "page5.php?name=19";  ?>"><p>Quinoa</p></a></li>
                  <li><a href="<?php echo "page5.php?name=20";  ?>"><p>Bread</p></a></li>
                  <li><a href="<?php echo "page5.php?name=21";  ?>"><p>Couscous</p></a></li>
                </ul>
              </div>

            </div>
  
            <div class="nytcDesktopOpenMenu" id="Occasion_menu">
              <div >
                <p class="nytcSectionName">BY UPCOMING HOLIDAY</p>
                <ul class="nytcSectionLinks">
                  <li><a href=""><p>Ramadan</p></a></li>
                  <li><a href=""><p>Easter</p></a></li>
                  <li><a href=""><p> Eid al-Fitr</p></a></li>
                </ul>
              </div>

              <div>
                <p class="nytcSectionName">BY OCCASION</p>
                <ul class="nytcSectionLinks">
                  <li><a href=""><p>Birthdays</p></a></li>
                  <li><a href=""><p>Brunch</p></a></li>
                  <li><a href=""><p>Parties</p></a></li>
                  <li><a href=""><p>Picnics</p></a></li>
                </ul>
              </div>

            </div>


          </section>
        