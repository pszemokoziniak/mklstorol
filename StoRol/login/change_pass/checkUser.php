<?php
include('/includes/funkcje.php');


$query =  "SELECT email
FROM stok_members
WHERE email = '".$_POST['email']."'
";

$result = db_query($query);

$licznik = $result->num_rows;

echo $licznik;


?>