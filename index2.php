<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Website</title>

    <link rel="stylesheet" href="style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>S</span>afarnama</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
            
              
             
            </ul>
            <form class="d-flex">
            <li class="nav-item">
                <a class="nav-link" >Hello, <?php echo $user_data['username']; ?></a>
              </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Logout</a>
              </li>
            </form>

          
          </div>
        </div>
      </nav>
    <!-- Navigation bar -->


    <!-- Home -->
    <div class="home">
        <div class="content">
            <h3>Welcome To India</h3>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Unleash India's Rich Cultural Heritage with Us - Book Your Tickets Today!</p>
            <a href="#packages">Book Tickets</a>
        </div>
    </div>
    <!-- Home -->


    <!--  Packages -->
    <section class="packages" id="packages">
      <div class="container">
        
        <div class="main-txt">
          <h1>Packages</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./pictures/4.jpg" alt="">
              <div class="card-body">
                <h3>Taj Mahal</h3>
                <p>Agra</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <p> Starting from: </p>
                <h6><strong>₹600</strong> per adult</h6>
                <a href="cart.php">Add to Cart</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./pictures/3.jpg" alt="">
              <div class="card-body">
                <h3>Red Fort</h3>
                <p>New Delhi</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <p>Starting from: </p>
                <h6><strong>₹2300</strong> per adult</h6>
                <a href="cart.php">Add to Cart</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./pictures/qutub minar.jpg" alt="">
              <div class="card-body">
                <h3>Qutub Minar</h3>
                <p>New Delhi</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <p>Starting From:</p>
                <h6><strong>₹1000</strong> per adult</h6>
                <a href="cart.php">Add to Cart</a>
              </div>
            </div>

          </div>



        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./pictures/purana-qila-museum_DSVXQO.webp" alt="">
              <div class="card-body">
                <h3>Purana Quila Museum</h3>
                <p>New Delhi</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <p>Starting From</p>
                <h6><strong>₹600</strong> per adult</h6>
                <a href="cart.php">Add to Cart</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./pictures/sun temple.jpg" alt="">
              <div class="card-body">
                <h3>Sun Temple</h3>
                <p>Konark</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <p>Starting From</p>
                <h6><strong>₹600</strong> per adult</h6>
                <a href="cart.php">Add to Cart</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./pictures/Jantar-Mantar.jpeg" alt="">
              <div class="card-body">
                <h3>Jantar Mantar</h3>
                <p>New Delhi</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <p>Starting from: </p>
                <h6><strong>₹600</strong> per adult</h6>
                <a href="cart.php">Add to Cart</a>
              </div>
            </div>

          </div>



        </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./pictures/rambagh-garden.jpg" alt="">
            <div class="card-body">
              <h3>Ram Bagh</h3>
              <p>Agra</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <p> Starting from: </p>
              <h6><strong>₹600</strong> per adult</h6>
              <a href="cart.php">Add to Cart</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./pictures/hampi.jpg" alt="">
            <div class="card-body">
              <h3>Group of Monuments - Hampi</h3>
              <p>Hampi</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <p>Starting from: </p>
              <h6><strong>₹600</strong> per adult</h6>
              <a href="cart.php">Add to Cart</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./pictures/humayun tomb.jpg" alt="">
            <div class="card-body">
              <h3>Humayun's Tomb</h3>
              <p>New Delhi</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <p>Starting From:</p>
              <h6><strong>₹600</strong>per adult</h6>
              <a href="cart.php">Add to Cart</a>
            </div>
          </div>

        </div>

<!-- NEW WORK STARTED -->

        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
         <img src="./pictures/fatehpur-sikri-fort-complex.jpg" alt="">
        <div class="card-body">
        <h3>Fatehpur Sikri, Agra </h3>
      <p>Agra</p>
      <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <p>Starting from: </p>
      <h6><strong>₹600</strong> per adult</h6>
      <a href="cart.php">Add to Cart</a>
    </div>
  </div>

</div>




        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
        <img src="./pictures/Ajanta-Ellora-Caves1-architecture.jpg" alt="">
        <div class="card-body">
       <h3>Ajanta and Ellora Caves, Maharashtra </h3>
      <p>Maharashtra</p>
      <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <p>Starting from: </p>
      <h6><strong>₹600</strong> per adult</h6>
      <a href="cart.php">Add to Cart</a>
    </div>
  </div>

</div>




          <div class="col-md-4 py-3 py-md-0">

          <div class="card">
         <img src="./pictures/Khajuraho-Group-of-Monuments-ili-133-ogimg.jpg" alt="">
        <div class="card-body">
      <h3>Khajuraho Group of Monuments, Madhya Pradesh</h3>
      <p>Madhya Pradesh</p>
      <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <p>Starting from: </p>
      <h6><strong>₹600</strong> per adult</h6>
      <a href="cart.php">Add to Cart</a>
    </div>
  </div>

</div>



          <div class="col-md-4 py-3 py-md-0">

        <div class="card">
    <img src="./pictures/Brihadeeswarar-Temple-Tamil-Nadu.jpg" alt="">
    <div class="card-body">
      <h3>Brihadeeswarar Temple, Tamil Nadu</h3>
      <p>Tamil Nadu</p>
      <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <p>Starting from: </p>
      <h6><strong>₹600</strong> per adult</h6>
      <a href="cart.php">Add to Cart</a>
    </div>
  </div>

</div>


        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
        <img src="./pictures/sanchi_stupa.jpg" alt="">
        <div class="card-body">
        <h3>Sanchi Stupa, Madhya Pradesh  </h3>
      <p>Madhya Pradesh</p>
      <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <p>Starting from: </p>
      <h6><strong>₹600</strong> per adult</h6>
      <a href="cart.php">Add to Cart</a>
    </div>
  </div>

</div>



      <div class="col-md-4 py-3 py-md-0">

        <div class="card">
        <img src="./pictures/bodh_gaya.jpeg" alt="">
        <div class="card-body">
        <h3>Bodh Gaya, Bihar  </h3>
        <p>Bihar</p>
        <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <p>Starting from: </p>
      <h6><strong>₹600</strong> per adult</h6>
      <a href="cart.php">Add to Cart</a>
    </div>
  </div>

</div>



      <div class="col-md-4 py-3 py-md-0">

       <div class="card">
        <img src="./pictures/Jaisalmer-Fort_600x400.jpg" alt="">
        <div class="card-body">
        <h3>Jaisalmer Fort, Rajasthan </h3>
      <p>Rajasthan</p>
       <div class="star">
       <i class="fa-solid fa-star checked"></i>
       <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
       <i class="fa-solid fa-star "></i>
</div>
<p>Starting from: </p>
<h6><strong>₹600</strong> per adult</h6>
<a href="cart.php">Add to Cart</a>
</div>
</div>

</div>



      <div class="col-md-4 py-3 py-md-0">

       <div class="card">
        <img src="./pictures/Groups-of-Monuments-at-Mahabalipuram-1024x675.jpg" alt="">
        <div class="card-body">
         <h3>Mahabalipuram Group of Monuments, Tamil Nadu </h3>
          <p>Tamil Nadu</p>
        <div class="star">
  <i class="fa-solid fa-star checked"></i>
  <i class="fa-solid fa-star checked"></i>
  <i class="fa-solid fa-star checked"></i>
  <i class="fa-solid fa-star "></i>
  <i class="fa-solid fa-star "></i>
</div>
<p>Starting from: </p>
<h6><strong>₹600</strong> per adult</h6>
<a href="cart.php">Add to Cart</a>
</div>
</div>

</div>



        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
        <img src="./pictures/chittorgarh.jpg" alt="">
        <div class="card-body">
         <h3>Chittorgarh Fort, Rajasthan </h3>
          <p>Rajasthan</p>
          <div class="star">
  <i class="fa-solid fa-star checked"></i>
  <i class="fa-solid fa-star checked"></i>
  <i class="fa-solid fa-star checked"></i>
  <i class="fa-solid fa-star "></i>
    <i class="fa-solid fa-star "></i>
  </div>
<p>Starting from: </p>
<h6><strong>₹600</strong> per adult</h6>
<a href="cart.php">Add to Cart</a>
</div>
</div>

</div>



        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
        <img src="./pictures/Charminar.jpg" alt="">
         <div class="card-body">
        <h3>Charminar, Telangana</h3>
        <p>Telangana</p>
         <div class="star">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star "></i>
<i class="fa-solid fa-star "></i>
</div>
<p>Starting from: </p>
<h6><strong>₹600</strong> per adult</h6>
<a href="cart.php">Add to Cart</a>
</div>
</div>

</div>




        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
        <img src="./pictures/vijay-stambh3.jpg" alt="">
        <div class="card-body">
         <h3>Vijay Stambh, Chittorgarh </h3>
         <p>Chittorgarh</p>
        <div class="star">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star "></i>
<i class="fa-solid fa-star "></i>
</div>
<p>Starting from: </p>
<h6><strong>₹600</strong> per adult</h6>
<a href="cart.php">Add to Cart</a>
</div>
</div>

</div>




        <div class="col-md-4 py-3 py-md-0">

        <div class="card">
         <img src="./pictures/Kanch_Mahal.jpg" alt="">
         <div class="card-body">
          <h3>Kanch Mahal, Agra </h3>
            <p>Agra</p>
         <div class="star">
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star checked"></i>
<i class="fa-solid fa-star "></i>
<i class="fa-solid fa-star "></i>
</div>
<p>Starting from: </p>
<h6><strong>₹600</strong> per adult</h6>
<a href="cart.php">Add to Cart</a>
</div>
</div>

</div>

      </div>


      </div>
    </section>
    <!-- Packages -->



    <!--  Services -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span></span>Services</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Hotels Nearby</h3>
                <p></p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Food & Drinks</h3>
                <p></p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Safety Guidelines</h3>
                <p></p>
              </div>
            </div>

          </div>



        </div>

        </div>

      </div>
    </section>
    <!-- Services -->




    <!-- Pictures Gallery -->
    <section class="gallery" id="gallery">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allery</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/4.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/4(1).jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/5.jpg" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/3.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/2.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/1.jpg" alt="" height="230px">
            </div>
          </div>
        </div>


        <!-- WORK STARTS HERE -->
        

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/Ajanta-Ellora-Caves1-architecture.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/bodh_gaya.jpeg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/hampi.jpg" alt="" height="230px">
            </div>
          </div>
        </div>

        

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/Jaisalmer-Fort_600x400.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/rambagh-garden.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/Kailasha_Temple_from_the_Gate1-1-scaled.jpg" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Pictures Gallery -->







    <!-- Start -->
    <section class="about" id="about">
      <div class="container">

        <div class="main-txt">
          <h1>About <span>Us</span></h1>
        </div>

        <div class="row" style="margin-top: 50px;">

          <div class="col-md-6 py-3 py-md-0">
            <div class="card">
              <img src="./pictures/4(1).jpg" alt="">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">
            <h2>How Online Booking Works</h2>
            <p>We are dedicated to providing you with a seamless and hassle-free experience when it comes to exploring the rich cultural heritage of our world. Our platform is designed to make your ticket booking process quick and easy, so you can spend less time worrying about logistics and more time immersing yourself in the wonders of history and art. Our team is committed to ensuring that you have access to the best attractions and experiences available, and we pride ourselves on our extensive network of partners and suppliers. Whether you're a solo traveler or part of a group, we are here to help you discover the beauty and significance of our world's monuments and museums. Thank you for choosing us as your ticket booking platform, and we look forward to helping you create unforgettable memories.</p>
            <button id="about-btn">Read More...</button>
          </div>

        </div>

      </div>
    </section>
    <!-- End -->








    <!-- Footer-->
    <footer id="footer">
      <h1>Safarnama</h1>
      <p>Unleash India's Rich Cultural Heritage with Us - Book Your Tickets Today!</p>
      <div class="social-links">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-youtube"></i>
        <i class="fa-brands fa-pinterest-p"></i>
      </div>
      <div class="credit">
        <p>Designed By <a href="#">________</a></p>
      </div>
      <div class="copyright">
        <p>&copy;Copyright ________. All Rights Reserved</p>
      </div>
    </footer>
    <!-- Footer -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>