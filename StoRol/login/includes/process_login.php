<?php

///include_once 'db_connect.php';
include_once 'functions.php';
include_once '../../assets/php/funkcje.php';
session_start();

$mysqli = db_connect();

if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.

    // $query =  "SELECT `status` FROM `mkl_members` WHERE email = '".$email."'";
    // $result = db_query($query);
    // while ($row = $result->fetch_assoc()) {
    //     $statusUser=$row['status'];
}

if ($statusUser == 0) {
 
    if (login($email, $password, $mysqli) == true) {

        // echo $_SESSION['username'];
        // die();

        // $menuId = checkMenuStart($email);
        
        // Login success 
        header('Location: ../../index.php');
        
    } else {
        // Login failed 
        header('Location: ../../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
        echo 'Użytkownik nieautoryzowany';
}


?>