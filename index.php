<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <title>Tale SEO Agency CSS Template by TemplateMo website</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  <style>
    #right {
  position: absolute;
  left: 31%;
  width: 100%;
  border: 0px solid #73AD21;
  padding: 1px;
}
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 2px solid purple;
      padding: 15px;
    }

.collapsible {
  background-color: #002d82;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  border-radius: 25px 25px 25px 25px;
}

.active, .collapsible:hover {
  background-color: #004f92;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
 
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asterisc_certificate_student";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


$email = $cnumber = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $cnumber = $_POST["cnumber"];
  // if(empty($email) || empty($cnumber))
  // {
  //   echo'Please Fill in the Blank';
  // }
  // else{
  //   $sql =" SELECT * FROM event_certificate where cnumber='$cnumber'";
  //   $result= mysqli_query($conn,$sql);

  //   if($row=mysqli_fetch_assoc($result)){

  //     $db_cnumber=$row['cnumber'];
  //     $db_email=$row['email'];

  //      if(md5($cnumber)==$db_cnumber)
  //      {
  //       if(md5($email)==$db_email)
  //       {

  //         header("certificate.php");

  //       }
  //      }
  // }
  //   else{
  //     echo'Certificate not available';
  //   }

  // }
}
?>
<?php

if (isset($_GET['submit'])) {

  $s_cnummber = $_GET['cnumber'];
  // $sql =" SELECT * FROM event_certificate where cnumber='$cnumber'";
  if ($row = mysqli_fetch_assoc($result)) {

    $db_cnumber = $row['cnumber'];
    $db_email = $row['email'];

    if (md5($cnumber) == $db_cnumber) {
      if (md5($email) == $db_email) {

        header("certificate.php");
      }
    }
  } else {
    echo 'Certificate not available';
  }
}
?>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>7744822228</a></li>
              <!-- <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>St. London 54th Bull</a></li>-->
              <li>An ISO 9001:2015</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/asterisc.in_-300x75.png" alt="" style="max-width: 2000px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#projects">Projects</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#infos">Infos</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="contact-us section" id="contact" style="align-self:center;">
    <div class="container" id="right">
      <div class="row">
        <div class="col-lg-6" >
          <div class="contact-us-content">
            <div class="row" >
              <form id="contact-form" action="results.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row" >
                  <div class="col-lg-12">
                    <div class="section-heading">
                      <h2><em>Verify For Certificate Details</em></h2>
                      <span>Enter Email For Certificate Verification</span>
                    </div>

                  </div>
                  <div>
                    <fieldset>

                      <input type="email" name="email" id="3" placeholder="E-mail" autocomplete="on" required>

                    </fieldset>
                  </div>
                  <!-- <div>
                    <fieldset>

                      <input type="text" name="cnumber" id="cnumber" placeholder="Certificate Number" autocomplete="on" required>

                    </fieldset>
                  </div> -->

                  <div>
                    <fieldset>
                      <button type="submit" id="submit" name="submit" class="">Search</button>
                    </fieldset>
                  </div>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


</body>

</html>