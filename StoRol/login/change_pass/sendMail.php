<?php
include('/includes/funkcje.php');


$query =  "SELECT id, email
FROM stok_members
WHERE email = '".$_POST['email']."'
";

$result = db_query($query);

while ($row = $result->fetch_assoc()) {

    $id = $row['id'];

}

$htmlText = 'Jeśli chcesz zrestarować hasło, kliknij link poniżej
<br />
<a href="https://mklstokrol.pl/login/change_pass/change_pass.php?id='.$id.'">Resetuj hasło</a> 
';

$subject = 'Zmiana hasła CRMstokRol'; 
//$addAddress_name = 'Beata';
// $addAddress_surename = 'Chrominska';
// $addAddress = 'pszemo.koziniak@gmail.com';
$addAddress = $_POST['email'];

include_once('mail_output.php');


?>