<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:600" rel="stylesheet">

    <title>Shop Mother Earth</title>
  </head>
<body style="background: #F28777">
<?php include 'connection.php'; ?>

<?php 
    


      $sql = "SELECT flowers.flowerName, flowers.price, flowers.description, blah.url
      FROM flowers
      NATURAL JOIN (SELECT flowersImages.flowerName, flowersImages.url 
      FROM flowersImages
      WHERE type = 'header') as blah";
      $result = $conn->query($sql);


?>

    <div class="navbarContainer">
        <div class="navbar ">
            <div class="logo">
                <div class="logoText">MotherEarth</div>
                <div class="logoImage">MotherEarth</div>

                <!-- <img class="logoImage" src="/images/icon.png" alt=""> -->

            </div>
            <div class="menu">
                    <div class="menuItem">
                      <a href="index.html" style="color:white">Home</a>
                    </div>
          
                    <div class="menuItem">
                      <a href="about.html" style="color:white">About</a>
                    </div>
                    <a class="menuItem" style="color:white" href="contact.html"> Contact
                    </a>
                    <div class="menuItem">
                      <a href="flowers.html" style="color:white">Shop</a>
                    </div>
                  </div>

            <div class="collapse">
                <i class="hamburger fa fa-bars fa-1x" aria-hidden="true"></i>
            </div>
        </div>
    </div>

        

    <div id="shop">

            <table>
                    <tr>
                      <th>Flower</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Price</th>
                    </tr>
    
    <?php 
                      foreach($result as $res)
                      {

                        echo "<tr>";
                        echo "<td>" . $res["flowerName"] . " </td>";
                        echo "<td> <a href=flower.php?flowerName=" . $res["flowerName"] . "> <img src=".  $res["url"] . " /> </a> </td>";
                        echo "<td>" . $res["description"] . "</td>";
                        echo "<td> $" . $res["price"] ."</td>";
                        echo "</tr>";
                      
                      }

                    
        
      ?>
 

                  </table>
       
    </div>

  </body>
  <script type="text/javascript" src="js/navbar.js"></script>
</html>

