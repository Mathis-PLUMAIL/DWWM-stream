<?php require "php/header.php"; ?>
    <h1 class="text-center  p-3"><i class="fas fa-film"></i> DWWM Stream</h1>
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark container">
        <a class="navbar-brand" href="#">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Films <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Series</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catégories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Comédie</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Thriller</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actus</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Spider-man" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
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