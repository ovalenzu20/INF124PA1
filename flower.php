<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="css/flowerpage.css" />

    <link rel="stylesheet" type="text/css" href="css/nav.css" />
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
    <?php include 'connection.php'; ?>

    <?php




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
          $price = $res["price"];
          $all_images[$value] = $res["url"];
          $value++;
  
        }
    
        # $flowers = $result->fetch_assoc();



        // $conn->close();
    ?>

    <div id="tulip">
      <div class="container">
        <div class="jumbotron" style="background:#77f2b6; ">

        <?php 

        echo "<h1> Product ID: " . $res["flowerName"] . " </h1>";

        echo "<h4> " . $res["extendedDescription"] . " </h4>";
    

    
?>
      
    
          <hr class="my-4" />

          <div id="infocontainer">
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
          <div id="receipt">
            <p>Price:..................... <span id="Rprice"> <?php echo $price ?></span ></p>
            <p>Tax:....................... <span id="Rtax"> 0 </span ></p>
            <hr class="my-4" />
            <p>Total:..................... <span id="Rtotal"> </span ></p>

          
          </div >

          </div>




          <form id="form" action="./confirmation.php" method="POST">

          <hr class="my-4" />

          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="fistName"
                  placeholder="First Name"
                  required
                />
              </div>
              <div class="form-group col-md-6">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="lastName"
                  placeholder="Last Name"
                  required
                />
              </div>
            </div>

          

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  placeholder="Email"
                  required
                />
              </div>
              <div class="form-group col-md-6">
                <label for="inputPID">Product ID</label>
                <input
                  type="text"
                  class="form-control"
                  name="pidS"
                  placeholder="Product ID"
                  required
                />
              </div>
            </div>


            <hr class="my-4" />
     
            <div class="form-row">
              <div class="form-group col-md-6">
              <label for="inputAddress">Address</label>
              <input
                type="text"
                class="form-control"
                name="address"
                placeholder="1234 Main St"
                required
              />
            </div>
            <div class="form-group col-sm">
              <label for="inputAddress2">Apartment/Suite/floor</label>
              <input
                type="text"
                class="form-control"
                name="inputAddress2"
                placeholder="Apartment, studio, or floor"
                required
              />
            </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input id="city" type="text" class="form-control" name="city" />
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="state" name="state" class="form-control" required>
                  <option value="first" selected>Choose...</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input
                  type="number"
                  class="form-control"
                  name="zip"
                  id="zip"
                  required
                />
              </div>
            </div>

            <hr class="my-4" />

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCreditCard">Credit Card Number</label>
                <input
                  type="number"
                  class="form-control"
                  name="cc"
                  required
                />
              </div>
              <div class="form-group col-md-4">
                <label for="shipping">Shipping</label>
                <select name="shipping" class="form-control" required>
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
                  name="phonenumber"
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
  <script type="text/javascript" src="js/navbar.js"></script>
  <script type="text/javascript" src="js/form.js"></script>

</html>
