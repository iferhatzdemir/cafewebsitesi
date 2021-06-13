
  <?php
  @session_start();
  @ob_start();
  define("DATA", "data/");
  define("SAYFA", "include/");
  define("SINIF","yonetimpaneli/class/");
  include_once(DATA."baglanti.php");
  define("SITE", $siteurl);
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$sitebaslik?></title>
    <meta http-equiv="keywords" content="<?=$siteanahtar?>">
  <meta http-equiv="description" content="<?=$siteaciklama?>">
<link rel="shortcut icon" href="<?=SITE?>images/logo.png" type="image/x-icon" alt="trigofirincafe" >
  <!-- Favicons -->
  <link href="<?=SITE?>images/logo.png" rel="icon">
  <link href="<?=SITE?>images/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=SITE?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=SITE?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=SITE?>assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
 



  <!-- ======= Hero Section ======= -->
 

  

    <!-- ======= Menu Section ======= -->
   

<?php
      include_once(DATA."ust.php");


      include_once(DATA."ust.php");


      if($_GET && !empty($_GET["sayfa"]))
      {
        $sayfa=$_GET["sayfa"].".php";
        if(file_exists(SAYFA.$sayfa))
        {
          include_once(SAYFA.$sayfa);
        }
        else
        {
          include_once(SAYFA."home.php");
        }

      }
      else
      {
        include_once(SAYFA."home.php");
      }

      include_once(DATA."footer.php");

      ?>




    <!-- ======= Chefs Section ======= -->
    <
    <!-- ======= Contact Section ======= -->




  <!-- ======= Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=SITE?>assets/vendor/aos/aos.js"></script>
  <script src="<?=SITE?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=SITE?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=SITE?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=SITE?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?=SITE?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=SITE?>assets/js/main.js"></script>

</body>

</html>