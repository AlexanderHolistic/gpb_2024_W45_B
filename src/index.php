<?php
/*
require_once "db.php";
$result = $db->query("");
$notizen = array();
while ($notiz = $result->fetch_object()) {
    $notizen[] = $notiz;
}
    */

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Notizy</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="bg-dark">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-8 mt-5">
                    <h1 class="text-white">Notizy <small class="text-secondary">Der Notizblock</small></h1>
                </div>
                <div class="col-sm-4"> 
                    <img src="design/logo/notizy.png" alt="Notizy Logo" width="150" height="150" class="d-inline-block">
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Platzhalter1</a>
            <a class="nav-item nav-link" href="#">Platzhalter2</a>
          </div>
        </div>
    </nav>

    <!-- Hauptinhalt -->
    <div class="container my-5">
        <h1 class="text-center">Willkommen bei Notizy</h1>
    </div>

    <div class="container px-4 text-center">
        <div class="row gx-5">
            <!-- Erste Karte -->
            <div class="col">
                <div class="p-3 border bg-light">
                    <div class="card justify-content-center">
                        <img src="..." class="card-img-top" alt="Bild">
                        <div class="card-body">
                            <h5 class="card-title">Titel der Notiz</h5>
                            <p class="card-text">Beispieltext für den Inhalt der Karte.</p>
                            <a href="#" class="btn btn-primary">Weiterlesen</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zweite Karte -->
            <div class="col">
                <div class="p-3 border bg-light">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="Bild">
                        <div class="card-body">
                            <h5 class="card-title">Titel der Notiz</h5>
                            <p class="card-text">Beispieltext für den Inhalt der Karte.</p>
                            <a href="#" class="btn btn-primary">Weiterlesen</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dritte Karte -->
            <div class="col">
                <div class="p-3 border bg-light">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="Bild">
                        <div class="card-body">
                            <h5 class="card-title">Titel der Notiz</h5>
                            <p class="card-text">Beispieltext für den Inhalt der Karte.</p>
                            <a href="#" class="btn btn-primary">Weiterlesen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fußzeile -->
    <footer class="bg-secondary text-white text-center py-3 mt-auto">
        © 2024 Notizy. Alle Rechte vorbehalten.
    </footer>

   
</body>

</html>