<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" type="text/css" href="/css/nav.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:600" rel="stylesheet">

    <title>Shop Mother Earth</title>
  </head>
<body style="background: #F28777">

<?php 
    


      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "root";
      $db = "MotherEarth";
      $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);



      if ($conn) {
        echo "Connected successfully";
      }




      $sql = "SELECT * FROM flowers";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["flowerName"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();




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
                      <th>#</th>
                      <th>Flower</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Price</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Tulip</td>
                        <td> <a href="tulips.html"><img src="imgs/tulips.jpg"></a></td>
                        <td>Bright Pink Tulips Grown in California; 10 in a bundle.</td>
                        <td>$15</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Carnation</td>
                        <td><a href="carnation.html"><img src="imgs/Carnation-Flower.jpg"> </a></td>
                        <td> Available in Pink and Blue; 10 in a bundle.</td>
                        <td>$25</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Forget Me Not</td>
                        <td> <a href="fmn.html"><img src="imgs/forget-me-not.jpg"></a></td>
                        <td>Beautiful bouquet of wild Forget Me Not flowers.</td>
                        <td>$30</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Lotus</td>
                        <td><a href="lotus.html"><img src="imgs/lotus.jpg"></a></td>
                        <td>Rare Pink Louts</td>
                        <td>$20</td>
                    </tr>
                    <tr>
                            <td>5</td>
                            <td>Jasmine</td>
                            <td><a href="jasmine.html"><img src="imgs/jasmine.jpg"></a></td>
                            <td>White Jasmines available in a bundle of 5.</td>
                            <td>$25</td>
                        </tr>
                        <tr>
                                <td>6</td>
                                <td>Peony</td>
                                <td><a href="peony.html"><img src="imgs/pink-peony.jpg"></a></td>
                                <td>Pink Peonies; 4 available in a bundle.</td>
                                <td>$30</td>
                            </tr>
                            <tr>
                                    <td>7</td>
                                    <td>Rose</td>
                                    <td><a href="rose.html"><img src="imgs/rose.jpg"></a></td>
                                    <td>Classic and beautiful. Perfect for any occasion; 8 in a bundle.</td>
                                    <td>$27</td>
                                </tr>
    
                            <tr>
                                    <td>8</td>
                                    <td>Hibiscus</td>
                                    <td><a href="hibiscus.html"><img src="imgs/hibiscus.jpg"></a</td>
                                    <td>Known for their large and colorful properties - this flower is also used for tea. 
                                        5 in a bundle.<br> </td>
                                    <td>$26</td>
                                </tr>
                            <tr>
                                    <td>9</td>
                                    <td>Windflower</td>
                                    <td><a href="windflower.html"><img src="imgs/windflower.jpg"></a></td>
                                    <td>Available in purple and white; 20 in a bundle.</td>
                                    <td>$16</td>
                                            </tr>
                            
                            <tr>
                                    <td>10</td>
                                    <td>Violet</td>
                                    <td><a href="violet.html"><img src="imgs/violet.jpg"></a></td>
                                    <td>Available in violet; 12 in a bundle.</td>
                                    <td>$12</td>
                      
                                            </tr>
                  </table>
       
    </div>

  </body>
  <script type="text/javascript" src="/js/navbar.js"></script>
</html>

