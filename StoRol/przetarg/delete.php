<?php
include '../assets/php/funkcje.php';
include '../assets/php/sql.php';


$id = $_POST['id'];

$queryDel = 'UPDATE stok_przetargi
                SET
                downloads = 1                
                WHERE id = "'.$id.'"';
db_input($queryDel); ?>

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
            <td><span onclick="modif()" id="mody" style="cursor:pointer; color:blue;">Modyfikuj</span> | <span onclick="usun('.$row['id'].')" style="cursor:pointer; color:blue;">Usuń</span></td>
        </tr>';
    }
    ?>

            </tbody>
        </table>

    </div>
</section>
