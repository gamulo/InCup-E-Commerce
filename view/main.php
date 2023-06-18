<?php include('../php/dbcon.php') ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>In Cup</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="..\style\style.css">
  <link rel="stylesheet" href="..\style\products.css">
  <link rel="stylesheet" href="..\style\clients.css">
  <link rel="stylesheet" href="..\style\contact.css">
  <link rel="stylesheet" href="..\style\home.css">
  <link rel="stylesheet" href="..\style\responsive.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="..\assets\logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav  m-lg-auto mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#clients">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>

        </ul>
        <a class="cart" href="#">
          <img src="..\assets\cart.png">
        </a>
        <a class="profile" href="#">
          <img src="..\assets\user.png">
        </a>
        <!-- LOGOUT -->
        <a href="login.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">LOG OUT</span>
        </a>
      </div>
    </div>
  </nav>


  <!-- Home Section -->
  <section id="homes" class="homes-section-padding" style="overflow: hidden;">
    <div class="container" id="reveal">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="contact-text">
            <h1 class="incup">In Cup</h1>
            <h2 class="coffee">Coffee</h2>

          </div>
        </div>
        <div class="mx-auto" style="height: 250px;">
        </div>
        <div class="fade-in-image" id="ec">
          <img src="..\assets\eclipse.png" class="eclipse">
          <img src="..\assets\coffee.png" class="coffeeincup">
        </div>
      </div>
  </section>


  <!-- Products Section -->

  <section id="products" class="productS-section-padding">
    <div class="container" id="reveal">
      <div class="row">
        <div class="mx-auto" style="height: 100px;">
        </div>
        <div class="all-texts">
          <h2 class="products-text">Our Products</h2>
        </div>
        <div class="products-spacing-height">
        </div>
        <div class="card">
          <div style="width:100%; text-align:center">
            <img src="..\assets\products\arabica.png" style="width:100%; height:100%;">
          </div>
          <div class="card-body">
            <h5 class="card-title">Arabica Coffee</h5>
            <p class="card-text">₱ 250.00</p>
            <a href="#" class="btn">Order Now</a>
          </div>
        </div>
        <div class="products-spacing-width">
        </div>
        <div class="card">
          <div style="width:100%; text-align:center">
            <img src="..\assets\products\arabica.png" style="width:100%; height:100%;">
          </div>
          <div class="card-body">
            <h5 class="card-title">Excelsa Coffee</h5>
            <p class="card-text">₱ 280.00</p>
            <a href="#" class="btn">Order Now</a>
          </div>
        </div>
        <div class="products-spacing-width">
        </div>
        <div class="card">
          <div style="width:100%; text-align:center">
            <img src="..\assets\products\arabica.png" style="width:100%; height:100%;">
          </div>
          <div class="card-body">
            <h5 class="card-title">Liberica Coffee</h5>
            <p class="card-text">₱ 350.00</p>
            <a href="#" class="btn">Order Now</a>
          </div>
        </div>
        <div class="products-spacing-width">
        </div>
        <div class="card">
          <div style="width:100%; text-align:center">
            <img src="..\assets\products\arabica.png" style="width:100%; height:100%;">
          </div>
          <div class="card-body">
            <h5 class="card-title">Robusta Coffee</h5>
            <p class="card-text">₱ 300.00</p>
            <a href="#" class="btn">Order Now</a>
          </div>
        </div>
        <div class="products-spacing-height">
        </div>
      </div>
    </div>
  </section>


  <!-- Clients Section -->

  <section id="clients" class="clients-section-padding">
    <div class="sponsor">
      <div class="mx-auto" style="height: 100px;">
      </div>
      <div class="all-texts">
        <h2 class="clients-text">Clients that trust us</h2>
      </div>
      <div class="rows">
        <img src="..\assets\clients\bpas 1.png " alt="">
        <img src="..\assets\clients\bpas 2.png " alt="">
        <img src="..\assets\clients\bpas 3.png " alt="">
      </div>
      <div class="rows">
        <img src="..\assets\clients\bpas 4.png " alt="">
        <img src="..\assets\clients\bpas 5.png " alt="">
        <img src="..\assets\clients\bpas 6.png " alt="">
      </div>
    </div>
  </section>


  <!-- Contact Us Section -->

  <section id="contact" class="contact-section-padding">
    <div class="container" id="reveal">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="contact-text">
            <div class="mx-auto" style="height: 50px;">
            </div>
            <h2>Contact Us</h2>
          </div>
        </div>
        <div class="mx-auto" style="height: 50px;">
        </div>
        <div class="row">
          <div class="col">
            <fieldset>
              <h3 class="h3-design">First Name</h3>
              <input type="text" id="fname" name="fname">
            </fieldset>
          </div>
          <div class="col-sm-8">
            <fieldset>
              <h3 class="h3-design">Last Name</h3>
              <input type="text" id="fname" name="lname">
            </fieldset>
          </div>
        </div>
        <div class="mx-auto" style="height: 50px;">
        </div>
        <div class="column-gap-1">
          <h3 class="h3-design">Email</h3>
          <input type="text" id="email" name="email"><br>
        </div>
        <div class="mx-auto" style="height: 10px;">
        </div>
        <div class="column-gap-1">
          <h3 class="h3-design">Message</h3>
          <textarea rows="4" cols="50" name="message" id="message" form="usrform" maxlength="200"></textarea>
        </div>
      </div>
      <div class="mx-auto" style="height: 50px;">
      </div>
      <input type="submit" value="Submit" class="submit">
      <img src="..\assets\contact\incup-contact.png" style="width:30%;" id="contact-image">
    </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    /** Dropdown **/
    $(document).ready(function () {
      $('profile').on('change', function () {
        var demovalue = $(this).val();
        $("div.myDiv").hide();
        $("#show" + demovalue).show();
      });
    });
    /** Active Navbar **/
    const li = document.querySelectorAll(".nav-item");
    const sec = document.querySelectorAll("section");

    function activeMenu() {
      let len = sec.length;
      while (--len && window.scrollY + 97 < sec[len].offsetTop) { }
      li.forEach(ltx => ltx.classList.remove("active"));
      li[len].classList.add("active");
    }
    activeMenu();
    window.addEventListener("scroll", activeMenu);
  </script>
</body>

</html>