<?php

require_once "db.php";
// $result = $db->query("SELECT 
//     n.id AS id,
//     n.titel AS titel,
//     n.inhalt AS inhalt,
//     n.date AS Datum,
//     u.name AS username,
// 	u.id AS user_id
// FROM 
//     notizen n
// JOIN 
//     user u ON n.user_id = u.id;");
// $notizen = array();
// while ($notiz = $result->fetch_object()) {
//     $notizen[] = $notiz;
// }

$notizen = array();
$notizen[] = (object) array("id"=>0,"titel"=>"Montags Notizen","inhalt"=>"lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, non quae dignissimos amet provident nostrum ut quos tempore atque mollitia ea modi adipisci recusandae at consequuntur pariatur praesentium facilis sed!","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>1,"titel"=>"Random Notiz","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>2,"titel"=>"Heute Gegessen","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>3,"titel"=>"Neue Spiele","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
$notizen[] = (object) array("id"=>4,"titel"=>"PHP Coding","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");

?>
<!DOCTYPE html>
<html lang="de" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="main.css" rel="stylesheet">
    <script type="module" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    
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
    <!-- Hauptinhalt -->
    <div class="container-fluid my-auto hauptInhalt">
        <div class="row mx-auto">
            <div class="col-12">
                <h1 class="text-center">Willkommen bei Notizy</h1>
        </div>
        <!-- Button zum Öffnen des Modals -->
        <div class="d-grid gap-2 col-2 my-5 m-auto">
            <button type="button" class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                Neuer Beitrag
            </button>
        </div>
        <div class="row px-4 my-5 text-center">
        <div class="list-group col-3">
            <?php foreach ($notizen as $notiz): ?>
                <a href="?id=<?php echo $notiz->id; ?>" class="list-group-item list-group-item-action-primary">
                    <?php echo htmlspecialchars($notiz->titel); ?> <?php echo htmlspecialchars($notiz->Datum); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="px-4 my-5 text-center col-9">
            
        <form>
            <button action="" class="btn btn-lg" method="post" enctype="multipart/form-data" accept-charset="UTF-8"></button>
        </form>

            <p>
                <?php
                    if (isset($_GET['id'])) {
                        $id = intval($_GET['id']);
                        foreach ($notizen as $notiz) {
                            if ($notiz->id == $id) {
                                echo htmlspecialchars($notiz->inhalt);
                                break;
                            }
                        }
                    } else {
                        echo "Bitte wählen Sie eine Notiz aus der Liste aus.";
                    }
                ?>
            </p>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="newpost.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Neue Notiz</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="notizAuthor" class="form-label">Author</label>
                                <input type="text" class="form-control" id="notizAuthor" placeholder="Author...">
                            </div>
                            <div class="mb-3">
                                <label for="notizTitel" class="form-label">Titel</label>
                                <input type="text" class="form-control" id="notizTitel" placeholder="Titel...">
                            </div>
                            <div class="mb-3">
                                <label for="Notiz" class="form-label"></label>
                                <textarea class="form-control" id="Notiz" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Verwerfen</button>
                            <button type="submit" class="btn btn-primary">Notiz Speichern</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Fußzeile -->
    <footer class="text-center footer fixed-bottom">
        © 2024 Notizy. Alle Rechte vorbehalten.
    </footer>

    <!-- Depracated
    <script type="module">
        import { NotizenLanding } from './notizenLanding.js';

        document.addEventListener('DOMContentLoaded', () => {
            const notizen = new NotizenLanding();
            notizen.threeCards();
        }); 
    </script> -->



    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const htmlElement = document.documentElement;

        // Funktion zum Wechseln des Themes
        function toggleTheme() {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            htmlElement.setAttribute('data-bs-theme', newTheme);
            themeToggleBtn.textContent = newTheme === 'light' ? 'Dark Mode' : 'Light Mode';
            localStorage.setItem('theme', newTheme);
        }

        // Event Listener für den Button
        themeToggleBtn.addEventListener('click', toggleTheme);

        // Setze das gespeicherte Theme beim Laden der Seite
        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            htmlElement.setAttribute('data-bs-theme', savedTheme);
            themeToggleBtn.textContent = savedTheme === 'light' ? 'Dark Mode' : 'Light Mode';
        });
    </script>
</body>

</html>
