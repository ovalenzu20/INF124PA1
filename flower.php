<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" type="text/css" href="/css/nav.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Courgette"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:600"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Exo+2:600"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <title>Mother Earth</title>
  </head>
  <body style="background: #F28777">
    <div class="navbarContainer">
      <div class="navbarbs ">
        <div class="logo">
          <div class="logoText">MotherEarth</div>
          <div class="logoImage">MotherEarth</div>
        </div>

        <div class="menu">
          <div class="menuItem">
            <a href="index.php" style="color:white;">Home</a>
          </div>

          <div class="menuItem">
            <a href="about.html" style="color:white;">About</a>
          </div>
          <div class="menuItem">
            <a style="color:white;" href="contact.html">Contact</a>
          </div>
          <div class="menuItem">
            <a href="shop.php" style="color:white;">Shop</a>
          </div>
        </div>

        <div class="collapses">
          <i class="hamburger fa fa-bars fa-1x" aria-hidden="true"></i>
        </div>
      </div>
    </div>

    <?php


        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "root";
        $db = "MotherEarth";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);



        if ($conn) {

        }


        $fName = $_GET['flowerName'];

        $sql = "SELECT flowers.flowerName, flowers.price, flowers.description, flowers.extendedDescription, flowersImages.url
        FROM flowers NATURAL JOIN flowersImages
        WHERE flowers.flowerName = '$fName' and flowersImages.type = 'sub'";
        $result1 = $conn->query($sql);


        $all_images = array("1", "2", "3");
        $value = 0;
        foreach($result1 as $res)
        {
          $all_images[$value] = $res["url"];
          $value++;
  
        }
    
        # $flowers = $result->fetch_assoc();




        $conn->close();
    ?>

    <div id="tulip">
      <div class="container">
        <div class="jumbotron" style="background:#77f2b6; ">

        <?php 

        echo "<h1> Product ID: " . $res["flowerName"] . " </h1>";

        echo "<h4> " . $res["extendedDescription"] . " </h4>";
    

    
?>
      
    
          <hr class="my-4" />

          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            style="margin-top: 40px;"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              echo  $all_images[0]
              <?php 
      
              echo "<img src=".  $all_images[0] . "   class=\"d-block \"
              style=\"width:500px; height: 300px;\"
              alt=\"...\"   />" ?>

            
              </div>
              <div class="carousel-item">
              <?php 
      
      echo "<img src=".  $all_images[1] . "   class=\"d-block \"
      style=\"width:500px; height: 300px;\"
      alt=\"...\"   />" ?>
              </div>
              <div class="carousel-item">
              <?php 
      
      echo "<img src=".  $all_images[2] . "   class=\"d-block \"
      style=\"width:500px; height: 300px;\"
      alt=\"...\"   />" ?>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <form id="form" action="confirmation.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="inputEmail4"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group col-md-6">
                <label for="inputPID">Product ID</label>
                <input
                  type="text"
                  class="form-control"
                  id="inputPID"
                  placeholder="Product ID"
                  required
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="fistName"
                  placeholder="First Name"
                  required
                />
              </div>
              <div class="form-group col-md-6">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  placeholder="Last Name"
                  required
                />
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress"
                placeholder="1234 Main St"
                required
              />
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input
                type="text"
                class="form-control"
                id="inputAddress2"
                placeholder="Apartment, studio, or floor"
                required
              />
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" />
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" required>
                  <option selected>Choose...</option>
                  <option>California</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputZip"
                  required
                />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCreditCard">Credit Card Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputCreditCard"
                  required
                />
              </div>
              <div class="form-group col-md-4">
                <label for="shipping">Shipping</label>
                <select id="shipping" class="form-control" required>
                  <option selected>Choose...</option>
                  <option>overnight</option>
                  <option>2-day expedited </option>
                  <option>6-day ground shipping</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="phoneNumber">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="phoneNumber"
                  required
                />
              </div>
            </div>

            <button
            type="submit" value="Submit"
              class="btn btn-primary"
            >
              Confirm
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="/js/navbar.js"></script>
  <script type="text/javascript" src="/js/form.js"></script>
</html>
