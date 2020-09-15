<?php require "php/header.php"; ?>
    <div class="container row mx-auto">
        <div class="card my-2 col-lg-3 col-md-6 col-sm-12 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Film 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-lg-3 col-md-6 col-sm-12 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="hulk">
            <div class="card-body">
                <h5 class="card-title">Film 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-lg-3 col-md-6 col-sm-12 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Film 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-lg-3 col-md-6 col-sm-12 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">film 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-3  text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Film 5</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-3 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="hulk">
            <div class="card-body">
                <h5 class="card-title">Film 6</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-3 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Film 7</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
        <div class="card my-2 col-3 text-center" style="width: 18rem;">
            <img src="img/hulk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">film 8</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-success"><i class="fas fa-play-circle"></i></a>
            </div>
        </div>
    </div>
    <?php 
        include 'php/database.php'; // on inclut notre fichier de connection
        $pdo = Database::connect(); // on se connecte à la base 
        $sql5 = "SELECT *
                FROM films";
        $reqTra = $pdo->query($sql5);
        $count = $reqTra->rowCount();
        if($count != 0) {  
        foreach ($reqTra as $row) { //on cree les lignes du tableau avec chaque valeur retournée
            // if ($row['fk_salarie_id']) {       
                echo '<tr class="text-center text-white id="deleteResa'.$row['films_id'].'">';
                echo'<td>' . $row['films_nom'] . '</td>';
                echo'<td>' . $row['films_sortie'] . '</td>';                            
                echo'<td>' . $row['films_real'] . '</td>';                            
                // echo'<td><button onclick="deleteResa('.$row['id_resa'].')" type="button" class="btn btn-danger"><i class="fas fa-trash text-white"></i></button> </td>';                                                     
                echo '</tr>';
            //  }
        } // fin de foreach 
        } else echo '<h4 class="text-center text-danger"><i class="fas fa-exclamation-triangle"></i> &nbsp;<u>Pas de films disponible</u></h4>';  
        Database::disconnect(); // on se deconnecte de la base    
    ?>
    <div class="container">
        <nav class="mt-4" aria-label="...">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <span class="page-link">Précèdent</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">
                        2
                        <span class="sr-only">(current)</span>
                    </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
    </div>
<?php require "php/footer.php"; ?>