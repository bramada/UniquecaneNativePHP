<form action="db" method="post">
<input type="text" name="db" value="">
<input type="submit" value="Submit">
</form>

<?php

if (isset($_POST["db"])){
    $db= $_POST["db"];
    echo $db;
}

?>


<!-- SELECT produk.idp, nama, material, foto_produk.idp, foto FROM produk inner join foto_produk on produk.idp=foto_produk.idp -->