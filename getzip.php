<?php include 'connection.php'; ?>

<?php 


    $zip = ($_GET['zip']);


    
    $sql = "SELECT state, city FROM zipcodetable WHERE  zip = $zip";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    $Obj = new stdClass();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row  != null) {    
    
        $Obj->city = $row["city"];
        $Obj->state = $row["state"];
    
    }else{  
        $Obj->city = 'null';
        $Obj->state =  'null';
    }


    echo json_encode($Obj);


?>




