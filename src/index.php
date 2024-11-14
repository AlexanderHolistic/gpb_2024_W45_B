<?php

require_once "db.php";

$result = $db->query("SELECT 
    n.id AS id,
    n.titel AS titel,
    n.inhalt AS inhalt,
    n.Datum AS Datum,
    u.name AS username,
	u.id AS user_id
FROM 
    notizen n
JOIN 
    user u ON n.user_id = u.id;");
$notizen = array();
while ($notiz = $result->fetch_object()) {
    $notizen[] = $notiz;
}
// $notizen = array();
// $notizen[] = (object) array("id"=>0,"titel"=>"Montags Notizen","inhalt"=>"lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, non quae dignissimos amet provident nostrum ut quos tempore atque mollitia ea modi adipisci recusandae at consequuntur pariatur praesentium facilis sed!","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
// $notizen[] = (object) array("id"=>1,"titel"=>"Random Notiz","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
// $notizen[] = (object) array("id"=>2,"titel"=>"Heute Gegessen","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
// $notizen[] = (object) array("id"=>3,"titel"=>"Neue Spiele","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");
// $notizen[] = (object) array("id"=>4,"titel"=>"PHP Coding","inhalt"=>"TestInhalt","user_id"=>0,"Datum"=>"00-00-00","username"=>"Hoppe");

$notizInhalt = "Wählen Sie eine Notiz aus.";
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($notizen as $notiz) {
        if ($notiz->id == $id) {
            $notizInhalt = htmlspecialchars($notiz->inhalt);
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="de" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notizy</title>
    <link href="main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header>
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-8 mt-5">
                    <h1 class="notizy titleshadows">Notizy <small class="theblock">Der Notizblock</small></h1>
                </div>
                <div class="col-sm-4">
                    <img src="../design/logo/notizy.png" alt="Notizy Logo" height="125" width="110" class="d-inline-block p-3">
                </div>
            </div>
            <!-- Optional: Theme-Toggle Button -->
            <!-- <button id="theme-toggle" class="btn btn-secondary mt-3">Dark Mode</button> -->
        </div>
    </header>

    <!-- Hauptinhalt -->
    <div class="container-fluid my-auto hauptInhalt">
        <div class="row mx-auto">
            <div class="col-12 p-5">
                <h1 class="text-center titleshadows">Willkommen bei Notizy</h1>
            </div>

            <!-- Button zum Öffnen des Modals -->
            <div class="d-grid gap-2 col-2 my-2 m-auto">
                <button type="button" class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                    Neuer Beitrag
                </button>
            </div>

            <div class="container">
                <div class="row p-4 text-center rounded shadow rowbg">
                    <div class="list-group col-3">
                        <?php foreach ($notizen as $notiz): ?>
                            <a href="?id=<?php echo $notiz->id; ?>" class="list-group-item list-group-item-action-primary">
                                <?php echo htmlspecialchars($notiz->titel); ?> <?php echo htmlspecialchars($notiz->Datum); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="px-4 my-5 text-center col-9">
                        <div class="row notizinhalt h-fit-content shadow rounded">
                            <div class="col-12">
                                <form>
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="disabledNotiz">Notiz</label>
                                            <textarea id="disabledNotiz" class="form-control" placeholder="Wählen Sie eine Notiz aus" rows="5" disabled><?php echo htmlspecialchars($notizInhalt ?: 'Wählen Sie eine Notiz aus.'); ?></textarea>
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <button id="bearbeiten" class="btn btn-lg form-control">Beitrag Bearbeiten</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal -->
         <div class="modal fade custom-fade-color" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content ">
                    <form class="modalinhalt" action="newpost.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Neue Notiz</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="notizAuthor" class="form-label">Author</label>
                                <input type="text" name="username" class="form-control" id="notizAuthor" placeholder="Author...">
                            </div>
                            <div class="mb-3">
                                <label for="notizTitel" class="form-label">Titel</label>
                                <input type="text" name="title" class="form-control" id="notizTitel" placeholder="Titel...">
                            </div>
                            <div class="mb-3">
                                <label for="Notiz" class="form-label"></label>
                                <textarea class="form-control" name="inhalt" id="Notiz" rows="3"></textarea>
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

    <!-- Footer -->
    <footer class="text-center py-3 mt-auto">
        © 2024 Notizy. Alle Rechte vorbehalten.
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Set the 'disabled' attribute on the textarea when the page loads
            const disabledNotiz = document.getElementById('disabledNotiz');
            if (disabledNotiz) {
                disabledNotiz.setAttribute('disabled', 'true');
            }

            // Handle the "Beitrag Bearbeiten" button click
            const editNotiz = document.getElementById('bearbeiten');
            if (editNotiz && disabledNotiz) {
                editNotiz.addEventListener('click', (e) => {
                    e.preventDefault();

                    if (disabledNotiz.hasAttribute('disabled')) {
                        // Enable the textarea for editing
                        disabledNotiz.removeAttribute('disabled');
                        editNotiz.textContent = 'Speichern';
                        editNotiz.classList.remove('btn-lg');
                        editNotiz.classList.add('btn-success');
                    } else {
                        // Disable the textarea after editing
                        disabledNotiz.setAttribute('disabled', 'true');
                        editNotiz.textContent = 'Beitrag Bearbeiten';
                        editNotiz.classList.remove('btn-success');
                        editNotiz.classList.add('btn-lg');
                    }

                    // Debug
                    console.log(`Textarea disabled: ${disabledNotiz.hasAttribute('disabled')}`);
                });
            } else {
                console.warn('Elemente mit den IDs "bearbeiten" oder "disabledNotiz" wurden nicht gefunden.');
            }
        });
    </script>
</body>
</html>
