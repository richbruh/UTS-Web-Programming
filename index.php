<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Impact</title>
    <link rel="stylesheet" href="frontend/homepage/editing.css">
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="homepage.js"></script>
</head>
<body>
<div class="background">
  <img src="image/fontaine-wallpaper-1.jpg" class="background-image"></img> 

  <audio id="myAudio" autoplay loop>
    <source src="./Fontaine_theme.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio>

</div>
<header>
<nav class="navbar">
    <div class="menu">
      <div class="logo">
        <a href="index.php"><h1>Food Impact</h1></a>
      </div>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="frontend/homepage/menu.php">Menu</a></li>
      </ul>
        <ul>
         <li><a href="login.php">Log In</a></li>
         <li><a href="register.php">Sign Up</a></li>
         <li><button onClick="toggleAudio()" id="audioControl">Audio</button></li>
        </ul>
    </div>
  </nav>
</header>
<br><br><br>
<div class="slideshow-container">

<div class="mySlides fade">
 <iframe autoplay style="width: 100%; height:564px;" src="https://www.youtube.com/embed/CwHoKErDdDU?enablejsapi=1"></iframe>
</div>

<div class="mySlides fade">
  <iframe autoplay style="width: 100%; height: 564px;" src="https://www.youtube.com/embed/X5Dd78jiSi8?enablejsapi=1"></iframe>
</div>

<div class="mySlides fade">
  <iframe autoplay style="width: 100%; height: 564px;" src="https://www.youtube.com/embed/W2Urt7SZeUE?enablejsapi=1"></iframe>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div class="menu2">
<center>
<h2 class="menu-title">Our Menu</h2>
</center>
<div class="row">
    <div class="row-item">
        <div>
            <img src="frontend/homepage/foods/Adeptus Temptation.webp" alt="" width="250">
            <h2>1</h2>
            <p>Adeptus Temptation</p>
            <p>Your Special Adeptus Friends would love this. Meats, Vegetables mixed combined in one pot together. Best when it is shared with your friends !</p>
        </div>
    </div>
    <div class="row-item">
        <div>
            <img src="frontend/homepage/foods/ramen.png" alt="" width="250">
            <h2>2</h2>
            <p>Tonkotsu Ramen</p>
            <p>Inazuma Special! Thick broth with its savory tastes and smooth textures of noodle with toppings such as Pork, Chicken, and Naruto</p>
        </div>
    </div>
    <div class="row-item">
        <div>
            <img src="frontend/homepage/foods/Fontainian Foie Gras.webp" alt="">
            <h2>3</h2>
            <p>Fontainian Foie Gras</p>
            <p>Fontaine Special ! Elegant food among the elites, its tender meat mixed with our special sauce wont ruin the taste of the Foie Gras itself !</p>
        </div>
    </div>
    <div class="row-item">
        <div>
            <img src="frontend/homepage/foods/Tuna Sushi.png" alt="">
            <h2>4</h2>
            <p>Tuna Sushi</p>
            <p>An Elegant Snack for fellow Inazumans, can be snack, can be lunch, the tastes rice</p>
        </div>
    </div>
    <div class="row-item">
        <div>
            <img src="frontend/homepage/foods/Crystal.png" alt="">
            <h2>5</h2>
            <p>Crystal</p>
            <p>Shareable Snacks from the people of Liyue, filled with broth, the tender meat mixed all together making an exquisite taste of cuisine !</p>
        </div>
    </div>
</div>

<div>
    <center><a href="frontend/homepage/menu.php"><button class="button-85" role="button">Show More</button></a></center>
</div>

</div>
<br><br>
<div class="aboutus">
    <div class="image">
        <img src="image/eating.jpg" alt="">
    </div>
    <div class="about">
        <h2>Food Impact</h2>
        <p>
          <strong>
          We provided many variances of food from the game itself !
          Monstadt, Liyue, Inazuma, Sumeru, and even the latest update ! <span class="fontaine">Fontaine !</span>
          </strong>
        </p>
    </div>
</div>
<br><br>
<footer>
<div class="column">
    <h3>Contact Us</h3>
    <p><span class="location-symbol">&#x1F4CD;</span> Locate Us</p>
    <p><span class="phone-symbol">&#x260E;</span> Call: +123 456 7890</p>
    <p><span class="email-symbol">&#x2709;</span> Email: food_impact@gmail.com</p>
</div>
        <div class="column">
            <h3>Food Impact</h3>
            <p1 class="special">Description here</p1>
            <div class="social-icons">
              <ul id="sosmed2"><a href="https://www.instagram.com/genshinimpact/?hl=en"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/640px-Instagram_logo_2022.svg.png" alt="" width="30"></a></ul>
              <ul id="sosmed2"><a href="https://www.youtube.com/c/GenshinImpact"><img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/704/small/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png" alt="" width="40"></a></ul>
              <ul id="sosmed2"><a href="https://www.facebook.com/Genshinimpact/"><img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="" width="30"></a></ul>
            </div>
        </div>
        <div class="column">
            <h3>Opening Hours</h3>
            <p1 class="special">Everyday</p1>
            <p1 class="special">09.00 - 17.00</p1>
        </div>
        <div class="info">
            <p class="copyright">&copy; All Rights Reserved</p>
            <p class="copyright">&copy; <?php echo date("Y"); ?> Food Impact</p>
        </div>
 </footer>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>