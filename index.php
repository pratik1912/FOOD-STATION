<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FooD StatioN</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome-free-5.7.2-web 2/css/all.css" />
    <link rel="stylesheet" href="styles.css" />
    <?php require_once("main.php"); ?>
  </head>
  <body>
    <!-- nav button -->
    <span class="nav-btn" id="nav-btn">
      <i class="fas fa-bars"></i>
    </span>
    <!-- navbar -->
    <nav class="navbar" id="navbar">
      <div class="navbar-header">
        <span class="nav-close" id="nav-close">
          <i class="fas fa-times"></i>
        </span>
      </div>
      <ul class="nav-items">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="comforts.html" class="nav-link">Comforts</a></li>
        <li><a href="about.html" class="nav-link">About</a></li>
        <li><a href="products.html" class="nav-link">Products</a></li>
      </ul>
    </nav>
    <!-- header -->
    <header class="header">
      <div class="banner">
        <h3 class="banner-subtitle">Vegan Eats and Treats</h3>
        <h1 class="banner-title"> Eat breakfast like a king, lunch like a prince, and dinner like a pauper</h1>
        <a href="#section2" class="banner-btn">explore</a>
      </div>
    </header>
    <!-- end header -->
    <!-- content divider -->
    <div class="content-divider"></div>
    <!-- end content divider  -->
    <!-- comforts section -->
    <section class="comforts clearfix" id="section2">
      <!-- single comfort -->
      <article class="comfort">
        <span class="comfort-icon">
          <i class='fas fa-hamburger'></i>
        </span>
        <h3 class="comfort-title">made in India</h3>
        <p class="comfort-text">You can eat on the best lattes in Town and buy the loveseat you are sitting on.</p>
      </article>
      <!--end single comfort -->
      <!-- single comfort -->
      <article class="comfort">
        <span class="comfort-icon">
          <i class="fas fa-glass-cheers"></i>
        </span>
        <h3 class="comfort-title">relaxation</h3>
        <p class="comfort-text">To me, the smell of fresh made food is one of the greatest inventions.</p>
        </article>
      <!--end single comfort -->
      <!-- single comfort -->
      <article class="comfort">
        <span class="comfort-icon">
          <i class="fas fa-bomb"></i>
        </span>
        <h3 class="comfort-title">energy</h3>
        <p class="comfort-text">FOOD is a break..<br>That make a chain between ENERGY and WORK.</p>
      </article>
      <!--end single comfort -->
      <!-- single comfort -->
      <article class="comfort">
        <span class="comfort-icon">
          <i class="fas fa-mortar-pestle"></i>
        </span>
        <h3 class="comfort-title">family recipe</h3>
        <p class="comfort-text">The home runs on LOVE,LAUGHTER and DISH OF DELICIOUS FOOD.</p>
      </article>
      <!--end single comfort -->	
    </section>
    <!-- end of comforts section -->
    <div class="content-divider"></div>

    <!-- about  -->
    <section class="about">
      <div class="section-center clearfix">
        <!-- first column -->
        <article class="about-img">
          <div class="about-picture-container">
            <img style="height: 500px;" 
              src="./images/food.jpg"
              alt="coffee kettle"
              class="about-picture"
            />
          </div>
        </article>
        <!-- second column -->
        <article class="about-info">
          <!-- section title -->
          <div>
            <h3 class="section-subtitle">about our</h3>
            <h2 class="section-title">food station</h2>
          </div>
          <!--end section title -->
          <p class="about-text">
            Food Station mission is to provide a full range of cuisines and drinks to busy rail commuters with the sole objetive of ensuring that their journey is not delayed and instead enhanced.
          </p>
          <p class="about-text">
            We also aim to provide the personal touch by creating freindly curteous service to all our clients.
          </p>
          <a href="about.php" class="main-btn">learn more</a>
        </article>
      </div>
    </section>
    <!--  end of about  -->
    <div class="content-divider"></div>

    <!-- products -->
    <section class="products">
      <div class="section-center clearfix">
        <!-- product info -->
        <article class="products-info">
          <!-- section title -->
          <div>
            <h3 class="section-subtitle">check out</h3>
            <h2 class="section-title text-white">our products</h2>
          </div>
          <!--end section title -->
          <p class="product-text">
            We are excited to introduce to our products. We have very different delicious Dishes which belongs from over hundred type of cuisines. We have also launched our own Drinks which will make your experience even more Delicious. And at the end we are searving Rich & Decadent Desserts.</p>
          <a href="products.php" class="main-btn">inventory</a>
        </article>
        <!-- product inventory -->
        <article class="products-inventory clearfix">
        	<!-- single product -->
          <article class="product">
            <img
              src="./images/dishes.jpg"
              alt="product"
              class="product-img"
            />
            <h3 class="product-title">Delicious Dishes</h3>
            <h3 class="product-price">699Rs.<abbr title="Per Person" style="text-decoration: none;">(Per Person)</abbr></h3>
          </article>
          <!-- end single product -->
          <!-- single product -->
          <article class="product">
            <img
              src="./images/drinks.jpg"
              alt="product"
              class="product-img"
            />
            <h3 class="product-title">Drinks</h3>
            <h3 class="product-price">299Rs.<abbr title="Per Person" style="text-decoration: none;">(Per Person)</abbr></h3>
          </article>
          <!-- end single product -->
          <!-- single product -->
          <article class="product">
            <img
              src="./images/desserts.jpg"
              alt="product"
              class="product-img"
            />
            <h3 class="product-title">Rich & Decandent Desserts</h3>
            <h3 class="product-price">Complementary</h3>
          </article>
          <!-- end single product -->
        </article>
      </div>
    </section>
    <!-- end products -->
    <div class="content-divider"></div>

    <!-- contact -->
    <section class="contact">
      <div class="section-center clearfix">
        <!-- contact info -->
        <article class="contact-info">
          <!-- contact item -->
          <div class="contact-item">
            <h3 class="contact-title"><span class="contact-icon"><i class="fas fa-location-arrow"></i></span>address</h3>
            <h3 class="contact-text">
              Link Road Bharuch,opp. HDFC Bank,Bharuch-392001
            </h3>
          </div>
          <!--end of  contact item -->
          <!-- contact item -->
          <div class="contact-item">
            <h3 class="contact-title">
              <span class="contact-icon"><i class="fas fa-envelope"></i></span>email
            </h3>
            <h3 class="contact-text">
              18dit057@charusat.edu.in
            </h3>  
          </div>
          <!--end of  contact item -->
          <!-- contact item -->
          <div class="contact-item">
            <h3 class="contact-title">
              <span class="contact-icon"><i class="fas fa-phone"></i></span>phone
            </h3>
            <h3 class="contact-text">
              +91 7572903388
          </div>
          <!--end of  contact item -->
        </article>
        <!-- contact form -->
        <article class="contact-form">
          <form class="form-group" action="index.php" method="post">
            <input type="text" name="name" placeholder="name" class="form-control"/>
            <input type="email" name="email" placeholder="email" class="form-control"/>
            <textarea name="message" rows="5" class="form-control" placeholder="message"></textarea>
            <button type="submit" class="main-btn" name="send">send</button>
          </form>
        </article>
      </div>
    </section>

    <!-- end of contact -->
    <div class="content-divider"></div>
    
    <footer class="footer">
      <div class="section-center">
        <div class="social-icons">
          <!-- social icon -->
          <a href="#" class="social-icon">
            <i class="fab fa-facebook"></i>
          </a>
          <!-- end of social icon -->
          <!-- social icon -->
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <!-- end of social icon -->

        </div>
        <p class="footer-text">
          &copy; <span class="text-primary">food station</span>
        </p>
      </div>
    </footer>
   	<script src="app.js"></script>
  </body>
</html>
