<?php
//delete.php
include("connection.php");

if(isset($_POST["product_id"]))
{
    $query = "DELETE FROM INSURANCE WHERE ID_INSURANCE = '".$_POST["product_id"]."'";
    $objParse1 = oci_parse($connection, $query);
    oci_execute($objParse1, OCI_DEFAULT);
    if(oci_commit($connection)){
        echo 'success';
    }else {
        echo 'fail';
    }
}
?>
