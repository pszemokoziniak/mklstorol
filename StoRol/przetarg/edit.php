<?php

$id = $_POST['id'];
$queryId =  "SELECT * FROM `stok_przetargi` WHERE id = $id";



include '../assets/php/funkcje.php';
// include '../assets/php/sql.php';



$result = db_query($queryId);

while ($row = $result->fetch_assoc()) { 
    echo'
    <div class="container" data-aos="fade-up">

    <form action="przetarg/update.php" method="post" enctype="multipart/form-data">
        <h3>Dodaj przetarg</h3>
        <div class="form-group">
            <label for="nazwa">Nazwa</label>
            <input value="'.$row['id'].'" id="id" name="id" class="form-control" type="hidden">

            <input value="'.$row['temat'].'" id="nazwa" name="nazwa" class="form-control" type="text" placeholder="dodaj nazwę">
        </div>
        <div class="form-group">
            <label for="opis">Opis</label>
            <textarea id="opis" name="opis" class="form-control" rows="3" placeholder="dodaj opis">'.$row['opis'].'</textarea>
        </div>
        <div class="form-group">
            <label for="pdf">Dodaj PDF</label>
            <input type="file" class="form-control-file" id="pdf" name="myfile">
        </div>
        <hr>
        <button class="btn btn-primary" type="submit" name="update">Popraw</button>
    </form>
</div>';


}

?>