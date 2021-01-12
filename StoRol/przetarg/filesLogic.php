<?php
// connect to the database
$config = parse_ini_file('./assets/php/config.ini');
// include './assets/php/funkcje.php';
 
$conn = db_connect();

$nazwa = $_POST['nazwa'];
$opis = $_POST['opis'];


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $ftp_username = $config['ftp_username'];
    $ftp_server = $config['ftp_server'];
    $ftp_userpass = $config['ftp_userpass'];
    $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
    $login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);


    // upload file

    if (!in_array($extension, ['pdf'])) {
        echo "You file extension must be .pdf";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        $sql = "SELECT MAX(id) as max_id FROM stok_przetargi";
        $result = db_query($sql);
    
        while ($row = $result->fetch_assoc()) { 

        // $query = mysqli_query($conn, $sql); 
        // $row = mysqli_fetch_array($query);
        $next_id = ($row['max_id'] + 1).'.pdf';
        }
        $downloads = 0;

        if (ftp_put($ftp_conn, '../upload/'.$next_id, $file, FTP_BINARY))
        {
                    
            // echo "Successfully uploaded $file.";
            $stmt = $conn->prepare("INSERT INTO stok_przetargi (temat, opis, name, size, downloads) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssdi", $nazwa, $opis, $next_id, $size, $downloads);

                if ($stmt->execute()) {
                    echo 'Zapisano '.$nazwa.' - '.$opis;
                }
        }
        else
        {
            echo "Error uploading";
        }
    }   

    // close connection
    ftp_close($ftp_conn);
}
?>