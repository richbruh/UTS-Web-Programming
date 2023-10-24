<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Impact | Booking Table</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <h1>Food Impact</h1>
        <nav>
            <ul class="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="frontend/homepage/menu.php">Menu</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a class="active" href="bookingtable.php">Book Table</a></li>
            </ul>
        </nav>
        <a href="tes.php" class="test-button">Tes</a>
    </header>
    <section class="book_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              Book A Table
            </h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form_container">
                <form action="">
                  <div>
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                  <div>
                    <input type="text" class="form-control" placeholder="Phone Number">
                  </div>
                  <div>
                    <input type="email" class="form-control" placeholder="Your Email">
                  </div>
                  <div>
                    <input type="number" class="form-control" min="2" max="5" placeholder="How many persons?">
                </div>                
                </div>                
                  <div>
                    <input type="date" class="form-control">
                  </div>
                  <div class="btn_box">
                    <button>
                      Book Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
    <div class="footer">
        <div class="column">
    <h3>Contact Us</h3>
    <p><span class="location-symbol">&#x1F4CD;</span> Locate Us</p>
    <p><span class="phone-symbol">&#x260E;</span> Call: +123 456 7890</p>
    <p><span class="email-symbol">&#x2709;</span> Email: food_impact@gmail.com</p>
    </div>
        <div class="column">
            <h3>Food Impact</h3>
            <p1 class="special">Deskripsi sini</p1>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
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
    </div>
</body>
</html>