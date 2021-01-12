<?php
// connect to the database
$config = parse_ini_file('../assets/php/config.ini');
include '../assets/php/funkcje.php';
 
$conn = db_connect();

$id = $_POST['id'];
$temat = $_POST['nazwa'];
$opis = $_POST['opis'];
$idPdf = $id.'.pdf';



// Uploads files
if (isset($temat)) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    // $nazwa = $_POST['nazwa'];
    // $opis = $_POST['opis'];

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
    if ($size>0) {

        if (!in_array($extension, ['pdf'])) {
            echo "You file extension must be .pdf";
        } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
            echo "File too large!";
        } 
        else {
        ftp_put($ftp_conn, '../upload/'.$idPdf, $file, FTP_BINARY);
        }
    }   

    if (isset($temat) &&  isset($opis))
    {
                
        // echo "Successfully uploaded $file.";
        $stmt = $conn->prepare("UPDATE stok_przetargi SET temat = ?, opis = ?, name = ?, size = ? WHERE id = ?");
        $stmt->bind_param("sssdi", $temat, $opis, $idPdf, $size, $id);

            if ($stmt->execute()) {
                echo 'Aktualizacja '.$temat.' - '.$opis;
            }
    }
    else
    {
        echo "Error update";
    }

    // close connection
    ftp_close($ftp_conn);
}

?>

<script>
window.location.href = '../';

// $(document).ready(function () {
// $(location).attr("href", "../");
// });
</script>
