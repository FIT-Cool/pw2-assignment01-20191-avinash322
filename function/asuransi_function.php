<?php
function getAsuransi(){
    $link = new PDO("mysql:host=localhost;dbname=prakpw220191", "root", "");
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM insurance";
    $result = $link->query($query);
    return $result;
}

function addAsuransi($nama){
    $link = new PDO("mysql:host=localhost;dbname=prakpw220191", "root", "");
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->beginTransaction();
    $query = "INSERT INTO insurance (name_class) VALUES (?)";
    $statement = $link->prepare($query);
    $statement->bindParam(1, $nama, PDO::PARAM_STR);
    if ($statement->execute()) {
        $link->commit();
    }
    else {
        $link->rollBack();
    }
    $link = null;
    header("location:index.php?menu=asuransi");
}

?>