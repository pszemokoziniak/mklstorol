<?php

function db_query($query) {
    // Connect to the database
    $connection = db_connect();


	if (!$connection) {
    	die('Could not connect:  ' . mysqli_error());
		}
		
    // Query the database
    ///mysql_select_db('rent_apart', $connection);
    
    $result = $connection->query($query);


	if(!$result) {
    
	echo 'db_query_error';
	}
	
    return $result;
}

function db_delete($query) {
    // Connect to the database
    $connection = db_connect();


	if (!$connection) {
    	die('Could not connect:  ' . mysqli_error());
		}
		
    // Query the database
    ///mysql_select_db('rent_apart', $connection);
    
    $result = $connection->query($query);


	if(!$result) {
	echo 'db_delete_error';
	}
	
    return $result;
}
/////////////////////////////////////////


function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('config.ini'); 
        
       
        $connection = new mysqli("crm.mkl.pl", $config['username'], $config['password'], $config['username']);
    	$connection->set_charset("utf8");
    	}
    	
    	
    	if (!$connection) {
    	die('error connection ' . mysqli_error());
		}
    
    return $connection;
    
    }

/////////////////////////////////////////


function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}

/////////////////////////////////////////


function db_input($query) {

$connection = db_connect();

	if (!$connection) {
    	die('Could not connect:  ' . mysql_error());
		}

if ($connection->query($query) === TRUE) {
    ///echo "Zapisano - OK<br />";
} else {
    ///echo "Error: " . $query . "<br>" . $connection->error;
    

    echo '<script language="javascript">alert("'.$connection->error.'");</script>';

    
}
}



?>