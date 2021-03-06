<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:600" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Mother Earth</title>
  </head>
<body>
<?php include 'connection.php'; ?>

<?php 


    $pid = $_POST["pid"]; 
    $firstName = $_POST["firstName"];
    $lastName =$_POST["lastName"];
    $address =$_POST["address"];
    $inputAddress2 =$_POST["inputAddress2"];
    $city =$_POST["city"];
    $state =$_POST["state"]; 
    $zip =$_POST["zip"];  
    $cc =$_POST["cc"]; 
    $shipping =$_POST["shipping"];
    $phonenumber =$_POST["phonenumber"] ;
    $email =$_POST["email"] ;
    $total =$_POST["cost"] ;
    $tax =$_POST["tax"] ;


    $sql = "INSERT INTO `orders` (productID, firstName, lastName, address, address2, city, state, zip, creditCardNumber, shippingType, phoneNumber, total, email) VALUES ( '$pid', '$firstName', '$lastName', '$address', '$inputAddress2',  '$city', '$state', '$zip',  '$cc', '$shipping',  '$phonenumber' ,  '$total' , '$email')";
    $result1 = $conn->exec($sql);




    

?>

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
                    <a href="contact.html" style="color:white;">Contact</a>
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

    <div id="confImage" >
        <div id = "conformationBox">
        <h1 id="confTexth1"> Thank you <?php echo $firstName ?> <?php echo $lastName ?>for your order of <?php echo $pid ?></h1>
        <p id="confText"> Here are your order details:<p> 
        <p id="confParagraph"> 
            Your order will be shipped to: <br>
                &emsp; <?php echo  $address ?> <?php echo  $inputAddress2?> <br>
                &emsp; <?php echo  $city?>, <?php echo  $state?> <?php echo  $zip?> <br>
            
            with the shipping type: <?php echo  $shipping?>  <br>
        </p>

        <p id="confText"> 
            Total: $<?php echo  $total ?> <br> 
        </div>
    </div>



</body>

<script type="text/javascript" src="js/navbar.js"></script>
</html>