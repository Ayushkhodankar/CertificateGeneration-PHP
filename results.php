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
  <link rel="stylesheet" href="table.css" />
  <!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  <style>
    .button {
      display: inline-block;
      padding: 1px 10px;
      font-size: 18px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #b151e5;
      border: none;
      border-radius: 8px;
      box-shadow: 0 5px #999;
    }
    
    .button:hover {background-color: #653e8e}
    
    .button:active {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
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

    .active,
    .collapsible:hover {
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

$a=1;
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

}
?>
<?php
$email = $_POST['email'];

if (isset($_GET['submit'])) {

  $s_cnummber = $_GET['cnumber'];
  // $sql =" SELECT * FROM event_certificate where cnumber='$cnumber'";
  if ($row = mysqli_fetch_assoc($result)) {

    $db_email = $row['email'];

    if (md5($email) == $db_email) {

      header("certificate.php");
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

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">

              <div class="row">
                <div>
                  <div class="section-heading">
                    <h2 align="center"><em>Available Certificates</em></h2>
                    <h5 align="center"><span style="color: red;"> E-Mail :</span><i> <?php echo $email ?></i></h5>
                    <br/>
                    <table class="tab">
            <thead>
                <tr>
                    <th scope="col" bgcolor="#b151e5" >Sr.</th>
                    <th scope="col"bgcolor="#b151e5">Course</th>
                    <th scope="col"bgcolor="#b151e5">Certification No.</th>
                    <th scope="col" bgcolor="#b151e5">Issued Date</th>
                    <th scope="col" bgcolor="#b151e5">Fees</th>

                </tr>
            </thead>
                      <tr>
                        <?php
                        if (isset($_POST["submit"])) {
                          $email = $_POST["email"];

                          $sql = "SELECT * FROM event_certificate where email='$email'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            // output data of each row  
                            while ($row = $result->fetch_assoc()) { ?>
                            <td><center><b><?php echo $a."." ?></b></center></td>
                             <td><center><?php echo $row["course_name"] ?></center></td>
                              <td><center> <?php echo $row["cnumber"] ?></center> </td>
                              <td><center><?php echo $row["cdate"] ?></center></td>
                              <td>
                                <form action="certificate.php" method="post">

                                  <input type="hidden" value="<?php echo $row["cnumber"] ?>" name="pro_cnumber" id="pro_cnumber">
                                 <center> <input type="submit" class="button" value="View" name="View"></center>

                                </form>
                              </td>
                      </tr>
                  <?php
                  $a++;
                            }
                          } else {
                            echo "0 results";
                          }
                        } else { ?>
                  <td colspan="4" align="center"> <b>Please Enter The Details In The Form First.</b></td>
                <?php }
                ?>
                    </table>
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