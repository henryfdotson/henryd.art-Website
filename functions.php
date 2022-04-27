<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'REDACTED';
    $DATABASE_USER = 'REDACTED';
    $DATABASE_PASS = 'REDACTED';
    $DATABASE_NAME = 'REDACTED';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header
function template_header($title) {
// Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>$title</title>
		<link href="../style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <!-- Bootstrap CSS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
	<body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-11">
                        <a href="/"><h1 class="fade-in">henryd</h1></a>
                    </div>
                    <div class="col-1">
                    <a href="/index.php?page=cart">
                        <button class="btn btn-primary fade-in" type="button">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>   <span class="badge">$num_items_in_cart</span>
                        </button>
                    </a>

                    </div>
                </div>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fade-in">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="/products.php">Art</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/3dart.php">3D Art</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/photography.php">Photo</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/code.php">Code</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/magazine.php">Magazine</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/biography.php">Statement</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/contact.php">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/index.php?page=cart">Cart</a>
                      </li>
                    </ul>
                  </div>
                </nav>



            </div>
        </header>
        <main>
EOT;
}


// Template sidebar
function template_sidebar() {
echo <<<EOT
<div class="container main-container">
    <div class="row main-row">
        <div class="sidebar col" style="margin-top:40px;">
            <a href="/">
            </a>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="/products.php">
                  Art
                </a>
              </li>
              <li>
                <a href="/3dart.php">
                  3D Art
                </a>
              </li>
              <li>
                <a href="/biography.php">
                  Statement
                </a>
              </li>
              <li>
                <a href="/contact.php">
                  Contact
                </a>
              </li>
              <li>
                <a href="/index.php?page=cart">
                  Cart
                </a>
              </li>
            </ul>
        </div>
EOT;
}

// Template sidebar
function template_sidebar_closer() {
echo <<<EOT
        <!-- Closing div of main-row -->
        </div>
        <!-- Closing div of main-container -->
        </div>
EOT;
}



// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col fade-in">
                        <p>&copy; $year henryd studio</p>
                        <img src="/images/logos/goldbargreen.png" style="max-width: 70px;"/>
                    </div>
                </div>
            </div> 
        </footer>
        <script src="../script.js"></script>
    </body>
</html>
EOT;
}
?>