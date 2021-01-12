<?php 
include 'filesLogic.php';
include './assets/php/sql.php';
// include './assets/php/funkcje.php';

?>

<section id="addPrzetarg" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>Dodaj przetarg</h3>
            <div class="form-group">
                <label for="nazwa">Nazwa</label>
                <input id="nazwa" name="nazwa" class="form-control" type="text" placeholder="dodaj nazwę" required>
            </div>
            <div class="form-group">
                <label for="opis">Opis</label>
                <textarea id="opis" name="opis" class="form-control" rows="3" placeholder="dodaj opis" required></textarea>
            </div>
            <div class="form-group">
                <label for="pdf">Dodaj PDF</label>
                <input type="file" class="form-control-file" id="pdf" name="myfile">
            </div>
            <hr>
            <button class="btn btn-primary" type="submit" name="save">Zapisz</button>
            
        </form>
    </div>
</section>

<div id=prztargi>

    <section id="addPrzetarg" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Tytuł</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Akcja</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
            
            $result = db_query($query);
    
            while ($row = $result->fetch_assoc()) { 
            
            echo '        
                <tr>
                    <th scope="row">'.$row['id'].'</th>
                    <td>'.$row['temat'].'</td>
                    <td>'.$row['opis'].'</td>
                    <td><span onclick="edit('.$row['id'].')" id="mody" style="cursor:pointer; color:blue;">Modyfikuj</span> | <span onclick="usun('.$row['id'].')" style="cursor:pointer; color:blue;">Usuń</span></td>
                </tr>';
            }
            ?>

                </tbody>
            </table>

        </div>
    </section>
</div>