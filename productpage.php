<!DOCTYPE html>
<html>
  <head>
    <!-- Call jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <!-- Call Font -->
    <link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>
    <!-- Call Stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- Disable OPCACHE -->
    <?php opcache_reset();
      // Connect to DB
      $db = mysqli_connect('REDACTED','REDACTED','REDACTED','REDACTED')
      or die('Error connecting to MySQL server.');

      $servername = "REDACTED";
      $username = "REDACTED";
      $password = "REDACTED";
      $dbname = "REDACTED" ;

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    ?>
  </head>
  <body>
   <div class="header">
    <!--Header-->
          <div id="header-placeholder">
          </div>
          <script>
            $(function(){
              $("#header-placeholder").load("/header.php");
            });
          </script>
        <!--end of Header-->
  </div>

    <div class="row">
      <div class="col-3 menu">
        <!--Navigation bar-->
          <div id="nav-placeholder">

          </div>

          <script>
          $(function(){
            $("#nav-placeholder").load("/nav.php");
          });
          </script>
        <!--end of Navigation bar-->
      </div>
      <!-- Start of content area -->
      <div class="col-9 product-content">
        <!-- Get some data from that DB -->
        <?php

          if(isset($_GET['ID'])) {
            $thisistheid = $_GET['ID'];
            $sql = "SELECT id, title, price, category, imageurl, inventory FROM art_data WHERE id='$thisistheid'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- Content Info -->
                <div class="col-6 content-info">
                    <img class="product-image" src="<?php echo $row["imageurl"]; ?>" ondragstart="return false;" ondrop="return false;" />
                </div>
                <!-- End Content Info -->
                <div class="col-3">
                <h1 class = "product-title"><?php echo $row["title"]; ?></h1>
                <h2 class = "product-price">$<?php echo $row["price"]; ?></h2>
                <!-- Payment Content -->
                <?php
                // Check to see if the item is in stock
                $isitinstock = $row["inventory"];
                // If the item is in stock
                if($isitinstock > 0) {
                  // Do the PayPal thing
                ?>
                <!-- Begin PayPal Integration -->
                This is where the PayPal Integration Goes
                <!-- End PayPal Integration -->
                <?php
                }
                //If the item is out of stock
                else {
                  echo "Sadly this item is out of stock.";
                }
                ?>
                </div>
                <!-- End Payment Content -->
              <?php
              }
            } else {
              echo "0 results";
            }
          }
          else {
            echo "We're gonna need a page ID yo...";
          }

        ?>
      </div>
      <!-- End of content area -->
      <!-- Start of Footer -->
      <div class="col-12 footer">
        <!--Footer-->
          <div id="footer-placeholder">
          </div>
          <script>
            $(function(){
              $("#footer-placeholder").load("../footer.php");
            });
          </script>
        <!--End of Footer-->
      </div>
    </div>
  </body>
</html>