<?php include 'connection.php'; ?>
<?php 




    $zip = ($_GET['zip']);


    
    $sql = "SELECT tax FROM taxtable WHERE  zip = $zip";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $Obj = new stdClass();

    if ($row  != null) {    

 
        $Obj->tax = $row["tax"];


}else{
    $Obj->tax = "-1";
}
  

    echo json_encode($Obj);





?>
