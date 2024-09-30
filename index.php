<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require_once ('php/components/header.php')?>
<?php require_once ('php/database.php')?>
    <main class="d-flex justify-content-center flex-column">
        <section class="container my-5 mx-auto">
            <h1 class="text-center">Bienvenue sur Hira</h1>
            <p class="text-center">
                Ceci est la page d'accueil pour l'instant qui a prévu d'être modifiée sous peu pour mieux présenter l'application.
            </p>
        </section>
        <section class="container my-5 mx-auto d-flex flex-row justify-content-center">
            <button class="px-4 mx-auto btn btn-primary"
                onclick="window.location.href='front.php'">
            
                Front Office
            </button>
            <button class="px-4 mx-auto btn btn-primary"
                onclick="window.location.href='back.php'">
            
                Back Office
            </button>
            <div class="dropdown mx-auto">
                <button class="btn dropdown-toggle btn-primary" data-bs-toggle="dropdown" aria-expanded="false" type="button">
                    Composants
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#" class="dropdown-item">
                            Item 1
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">
                            Item 2
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-item">
                            Item 3
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
</body>
</html>