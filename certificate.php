<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <title>Tale SEO Agency CSS Template by TemplateMo website</title>
  <link href="styles.css" rel="stylesheet" />
		<link rel="stylesheet" href="my-style.css" />
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="verify.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <title>Document</title>
  <style>
    * {
      list-style: none;
      text-decoration: none;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
    }

    body {
      background: #f5f6fa;
    }

    .nav-item {
      font-weight: 800;
      letter-spacing: 0.05;
      /* text-transform: uppercase; */
    }

    .wrapper .sidebar {
      background: #8a00c2;
      position: fixed;
      top: 0;
      left: 0;
      width: 300px;
      height: 100%;
      padding: 20px 0;
      transition: all 0.5s ease;
    }

    a:link {
      color: white;
      background-color: transparent;
      text-decoration: none;
    }

    a:hover {
      color: rgb(224, 222, 222);
      background-color: transparent;
      text-decoration: underline;
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
$email = $_POST['pro_email'];
$res = mysqli_query($conn, "select * from event_certificate where email='" . $email . "' limit 1");
$row = mysqli_fetch_assoc($res);
$sname = $row['sname'];
$cname = $row['course_name'];
$cdate = $row['cdate'];
$cnumber = $row['cnumber'];

// if(mysqli_num_rows($res)>0){
//   header('content-type:image/png');
// $font="Roboto-black.ttf";
// $image=imagecreatefrompng("certificate.png");
// $color=imagecolorallocate($image,19,21,22);
// while($row=mysqli_fetch_assoc($res)){
//   $name=$row['name'];
//   imagettftext($image,50,0,365,420,$color,$font,$name);

// }
// }

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<body>
<div class="wrapper">
    <!--Top menu -->
    <div class="sidebar">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-none d-lg-block" align="center" style="height: 40%;">
          <img class="img-fluid rounded-circle mx-auto mb-2" src="assets/images/ASTERISC_COMPUTER_INSTITUTE-removebg-preview.png" alt="asterisc Logo" style="width: 90%" /></span>
      </a>
      <!-- <div class="collapse navbar-collapse" id="navbarResponsive" align =" center"> -->
      <ul class="navbar-nav" style="align-items: center;">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#certificate"><b>Certificate</b></a></li><br>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#general-information">General Information</a></li><br>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#share">Share</a></li><br>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#wallet">Add to wallet</a></li><br>
        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li> -->
      </ul>

      <!--profile image & text-->
      <!--menu item-->
    </div>
  </div>

  <div style="margin-left:19%">

    <div class="resume-section-content" id="certify">
      <div class="container text-center">
        <div class="row">
          <div class="col">

            <div class="contact-us section" id="contact">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="contact-us-content">
                      <div class="row">
                        <img src="certificate.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
      <div class="col-lg-6" style="margin-left:4% ;margin-top:3%;">
                  <fieldset><a id="download" href="certificate.png" download="certificate.png">
                    <button type="button" class="btn btn-primary mt-2 mb-3">Download</button>
                  </a>
                  </fieldset>
                </div>
    </div>
    
  </div>

  <div style="margin-left:20%">
    <div class="contact-us section" id="cform">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-us-content">
              <div class="row" style="width: 50%;">
                <h4>Certificate Name : 
                </h4>
                <p><?php echo $cname ?></p>
                <br>
                <h4>Issued to : </h4>
                <p><?php echo $sname ?> </p>
                <br>
                <h4>Issued on :</h4>
                <p> <?php echo $cdate ?></p>
               <br>
                <h4>Certificate ID : </h4>
                <p><?php echo $cnumber . $cdate ?></p>
               <br>
                <h4>Public Key:</h4>
                <p>ecdsa-koblitz-pubkey:0xD77e72a87da02ba1c40</p>
              </div>
            </div>

            <div id="isVerifiedBg" class="p-3 isVerifiedContainer accordion accordion-flush">
              <div id="isVerifiedDesc"></div>
              <button type="button" class="btn btn-primary mt-2 mb-3" data-bs-toggle="collapse" data-bs-target="#myAccordion">Verify again</button>
              <div class="accordion-item" style="background-color: inherit">
                <h2 class="accordion-header" id="flush-headingOne"></h2>
                <div class="accordion-collapse collapse" id="myAccordion" aria-labelledby="flush-headingOne" data-bs-parent="#isVerifiedBg">
                  <div class="accordion-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-4" id="picture"><img id="modalLogo" style="width: 100%; max-width: 100px" src="" /></div>
                        <div class="col-lg-8">
                          <div class="row" style="font-size: large" id="title"><?php echo $cname ?></div>
                          <div class="row" style="font-size: large" id="name"><?php echo $sname ?></div>
                          <div class="row" style="font-size: small" id="issued"><?php echo $cdate ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row gx-1" style="margin-top: 20px">
                        <div class="col-2">
                          <div id="tampered" class="loader"></div>
                        </div>
                        <div class="col-10 my-auto">Checking certificate has not been tampered with</div>
                      </div>
                      <div class="row gx-1" style="margin-top: 20px">
                        <div class="col-2">
                          <div id="expired" class="loader"></div>
                        </div>
                        <div class="col-10 my-auto">Checking certificate has not expired</div>
                      </div>
                      <div class="row gx-1" style="margin-top: 20px">
                        <div class="col-2">
                          <div id="revoked" class="loader"></div>
                        </div>
                        <div class="col-10 my-auto">Checking not revoked by issuer</div>
                      </div>
                      <div class="row gx-1" style="margin-top: 20px">
                        <div class="col-2">
                          <div id="authenticity" class="loader"></div>
                        </div>
                        <div class="col-10 my-auto">Checking authenticity</div>
                      </div>
                      <div class="row gx-1" style="margin-top: 20px; display: none" id="verifyResult">
                        <div class="col-2">
                          <div class="loader" id="verifyResultImage"></div>
                        </div>
                        <div class="col-10 my-auto" id="verifyResultDescription"></div>
                      </div>
                    </div>
                  </div>

                </div>
               
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="scripts.js"></script>
</body>

</html>