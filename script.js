const cockAndRecipesText = document.getElementById("cock_and_recipes_text");
const Cook_menu = document.getElementById("Cook_menu");
const recipesText = document.getElementById("recipes_text");
const recipesMenu = document.getElementById("recipes_menu");
const ingredients_text = document.getElementById("ingredients_text");
const ingredients_menu = document.getElementById("ingredients_menu");
const Occasion_text = document.getElementById("Occasion_text");
const Occasion_menu = document.getElementById("Occasion_menu");
const About_us_text = document.getElementById("About_us_text");
const About_us_menu = document.getElementById("About_us_menu");


// cockAndRecipesText.addEventListener("mouseover", function() {
//     Cook_menu.style.display = "flex";
// });

// cockAndRecipesText.addEventListener("mouseout", function() {
//     Cook_menu.style.display = "none";
// });


// recipesText.addEventListener("mouseover", function() {
//     recipesMenu.style.display = "flex";
// });


// recipesText.addEventListener("mouseout", function() {
//     recipesMenu.style.display = "none";
// });


recipesText.addEventListener("click", function() {
    if (getComputedStyle(recipesMenu).display === "none") {
        recipesMenu.style.display = "flex";
        Cook_menu.style.display = "none";
        ingredients_menu.style.display = "none";
        Occasion_menu.style.display = "none";
        About_us_menu.style.display = "none";
    } else {
        recipesMenu.style.display = "none";
    }
 });
cockAndRecipesText.addEventListener("click", function() {
    if (getComputedStyle(Cook_menu).display === "none") {
        Cook_menu.style.display = "flex ";
        recipesMenu.style.display = "none";
        ingredients_menu.style.display = "none";
        Occasion_menu.style.display = "none";
        About_us_menu.style.display = "none";
    } else {
        Cook_menu.style.display = "none";
    }
});

ingredients_text.addEventListener("click", function() {
    if (getComputedStyle(ingredients_menu).display === "none") {
        ingredients_menu.style.display = "flex";
        Cook_menu.style.display = "none ";
        recipesMenu.style.display = "none";
        Occasion_menu.style.display = "none";
        About_us_menu.style.display = "none";
    } else {
        ingredients_menu.style.display = "none";
    }
});

Occasion_text.addEventListener("click", function() {
    if (getComputedStyle(Occasion_menu).display === "none") {
        Occasion_menu.style.display = "flex";
        ingredients_menu.style.display = "none";
        Cook_menu.style.display = "none ";
        recipesMenu.style.display = "none";
        About_us_menu.style.display = "none";
    } else {
        Occasion_menu.style.display = "none";
    }
});

About_us_text.addEventListener("click", function() {
    if (getComputedStyle(About_us_menu).display === "none") {
        About_us_menu.style.display = "flex";
        Occasion_menu.style.display = "none";
        ingredients_menu.style.display = "none";
        Cook_menu.style.display = "none ";
        recipesMenu.style.display = "none";
    } else {
        About_us_menu.style.display = "none";
    }
});




const scrollLeftBtn = document.getElementById('scrollLeftBtn');
const scrollRightBtn = document.getElementById('scrollRightBtn');
const product1 = document.getElementById('product1');

scrollLeftBtn.addEventListener('click', () => {
  product1.scrollBy({
    left: -1100, // Ajustez la valeur en fonction de la quantité de défilement souhaitée
    behavior: 'smooth'
  });
});

scrollRightBtn.addEventListener('click', () => {
  product1.scrollBy({
    left: 1100, // Ajustez la valeur en fonction de la quantité de défilement souhaitée
    behavior: 'smooth'
  });
});



document.addEventListener("DOMContentLoaded", function() {
    const scrollLeftBtn = document.getElementById('scrollLeftBtn1');
    const scrollRightBtn = document.getElementById('scrollRightBtn1');
    const container = document.querySelector('.headerrecipe');

    // Fonction pour faire défiler vers la gauche
    scrollLeftBtn.addEventListener('click', function() {
        container.scrollLeft -= 1200; // Changer la valeur selon votre préférence
    });

    // Fonction pour faire défiler vers la droite
    scrollRightBtn.addEventListener('click', function() {
        container.scrollLeft += 1200; // Changer la valeur selon votre préférence
    });
});