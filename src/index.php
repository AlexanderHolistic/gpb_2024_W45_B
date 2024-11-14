<?php
/*
require_once "db.php";
$result = $db->query("");
$notizen = array();
while ($notiz = $result->fetch_object()) {
    $notizen[] = $notiz;
}
    */
$notizen = array();
$notizen[] = (object) array("id"=>0,"titel"=>"Test1","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>1,"titel"=>"Test1","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>2,"titel"=>"Test1","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>3,"titel"=>"Test1","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>4,"titel"=>"Test1","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
?>
<!DOCTYPE html>
<html lang="de" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="main.css" rel="stylesheet">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Notizy</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header>
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-8 mt-5">
                    <h1 class="notizy">Notizy <small class="theblock">Der Notizblock</small></h1>
                </div>
                <div class="col-sm-4"> 
                    <img src="../design/logo/notizy.png" alt="Notizy Logo" height="125" width="110" class="d-inline-block p-3">
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="newpost.php">Neuer Beitrag</a>
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
                <div class="p-3 border bg-light rounded shadow">
                    <div class="card justify-content-center">
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
                <div class="p-3 border bg-light rounded shadow">
                    <div class="card">
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
                <div class="p-3 border bg-light rounded shadow">
                    <div class="card">
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
    <footer class="text-center py-3 mt-auto">
        © 2024 Notizy. Alle Rechte vorbehalten.
    </footer>

   
</body>

</html>
