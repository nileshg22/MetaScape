<?php require('db_connection.php'); ?>
<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MetaScape</title>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- build:css styles/vendor.css -->
  <!-- bower:css -->
  <!-- endbower -->
  <!-- endbuild -->

  <!-- build:css styles/main.css -->
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Oxygen" rel="stylesheet">

  <!-- endbuild -->

  <!-- build:js scripts/vendor/modernizr.js -->
  <!-- endbuild -->
</head>
<body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      <div class="container">
        <div class="header">
            <img id="bgpic" src="images/bg.jpg">

            <div id="buttons">
              <a href="index.php" data-file="templates/blank.html" onclick="changePage(this); return false;"><img src="images/logo.png"></a>
              <a href="create.php" class="ghost-button">Create</a>
              <a href="index.php" data-file="templates/manage.php" class="ghost-button" onclick="changePage(this); return false;">Manage</a>
              <a href="index.php" data-file="templates/browse.php" class="ghost-button" onclick="changePage(this); return false;">Browse</a>
            </div>
          </div>
          
          <div class="page">
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
            <!-- NILESH PUT THE CONTENT HERE okie-->
          </div>

        </div>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='https://www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <!-- build:js scripts/vendor.js -->
        <!-- bower:js -->
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:js scripts/plugins.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
      </body>
      </html>

      <?php mysql_close($conn); mysql_close($conn2);?>
