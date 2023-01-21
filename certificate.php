<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Asterisc Certificate</title>
		<!-- <link rel="icon" type="image/png" href="assets/img/gcc-logo.png" /> -->
		<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
		<!-- Font Awesome icons (free version)-->
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="assets/css/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/my-style.css" />
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		<script src="js/verify.js"></script>
	
  <style>
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}


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
// echo "Connected successfully";

?>

<body id="page-top">
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" style="background-color: #8a00c2;">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">
				<span class="d-block d-lg-none">Asterisc Verifier</span>
				<span class="d-none d-lg-block"
					><img class="img-fluid rounded-circle mx-auto mb-2" src="assets/images/ASTERISC_COMPUTER_INSTITUTE-removebg-preview.png" alt="Gutenberg verifier logo" style="width: 90%"
				/></span>
			</a>
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#navbarResponsive"
				aria-controls="navbarResponsive"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#certificate">Certificate</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#general-information">General Information</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#share">Share</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#wallet">Add to wallet</a></li>
					<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li> -->
				</ul>
			</div>
		</nav>
  <section>
  <div>

    <div class="resume-section-content" id="certify">
      <div class="container text-center">
        <div class="row" style="margin-top:2%;">
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
        <div class="col-lg-6" style="margin-top:3%;">
                  <fieldset><a id="download" href="certificate.png" download="certificate.png">
                    <button type="button" class="btn btn-primary mt-2 mb-3">Download Certificate</button>
                  </a>
                  </fieldset>
                </div>
      </div>
      
    </div>
    
  </div>

  <div>
    <div class="contact-us section" id="cform">
      <div class="container" >
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-us-content">
              <div class="row" style="width: 60%; margin-left:3%;">
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


<div class = "verify" style="margin-left:2%;">
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

            <!-- Button trigger modal -->
            <div id="isVerifiedBg" class="p-3 isVerifiedContainer accordion accordion-flush" style="background-color: rgba(42,178,123,0.1); border-left: 3px solid #2ab27b;">
									<img id="isVerifiedLogo" class="pr-1" src="images/greenLogo.png" style="height: 25px; width: 25px"><strong id="isVerified">Verified</strong>
									<div id="isVerifiedDesc">This is a valid certificate</div>
									<button type="button" class="btn btn-primary mt-2 mb-3" data-bs-toggle="collapse" data-bs-target="#myAccordion" aria-expanded="true">Verify again</button>
									<div class="accordion-item" style="background-color: inherit">
										<h2 class="accordion-header" id="flush-headingOne"></h2>
										<div class="accordion-collapse collapse show" id="myAccordion" aria-labelledby="flush-headingOne" data-bs-parent="#isVerifiedBg" style="">
											<div class="accordion-body">
												<div class="container">
													<div class="row">
														<div class="col-lg-4" id="picture"><img id="modalLogo" style="width: 100%; max-width: 100px" src="https://issuer.gutenbergcerts.com/images/yellowLogo.png"></div>
														<div class="col-lg-8">
															<div class="row" style="font-size: large" id="title">Be smart in a smart world. What counts in a digital workplace?</div>
															<div class="row" style="font-size: large" id="name">Bhavika Gandait</div>
															<div class="row" style="font-size: small" id="issued">Issued on Thu, 10 Nov 2022 05:29:41 GMT by Employability</div>
														</div>
													</div>
												</div>
												<div class="container">
													<div class="row gx-1" style="margin-top: 20px">
														<div class="col-2">
															<div id="tampered" class=""><img src="https://issuer.gutenbergcerts.com/images/greenLogo.png" class="modalLogo"></div>
														</div>
														<div class="col-10 my-auto">Checking certificate has not been tampered with</div>
													</div>
													<div class="row gx-1" style="margin-top: 20px">
														<div class="col-2">
															<div id="expired" class=""><img src="https://issuer.gutenbergcerts.com/images/greenLogo.png" class="modalLogo"></div>
														</div>
														<div class="col-10 my-auto">Checking certificate has not expired</div>
													</div>
													<div class="row gx-1" style="margin-top: 20px">
														<div class="col-2">
															<div id="revoked" class=""><img src="https://issuer.gutenbergcerts.com/images/greenLogo.png" class="modalLogo"></div>
														</div>
														<div class="col-10 my-auto">Checking not revoked by issuer</div>
													</div>
													<div class="row gx-1" style="margin-top: 20px">
														<div class="col-2">
															<div id="authenticity" class=""><img src="https://issuer.gutenbergcerts.com/images/greenLogo.png" class="modalLogo"></div>
														</div>
														<div class="col-10 my-auto">Checking authenticity</div>
													</div>
													<div class="row gx-1" style="margin-top: 20px;" id="verifyResult">
														<div class="col-2">
															<div class="" id="verifyResultImage"><img src="https://issuer.gutenbergcerts.com/images/greenLogo.png" class="modalLogo"></div>
														</div>
														<div class="col-10 my-auto" id="verifyResultDescription">This is a valid certificate</div>
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
                </section>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="scripts.js"></script>
</body>

</html>