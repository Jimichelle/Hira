<!doctype html>
<html lang="en">
    <head>
        <title>Front-Office</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <?php require_once ('php/components/sidebar.php')?>

        <?php require_once ('php/components/header.php')?>
        <?php require_once ('php/components/controler.php')?>
        <main>
            <!-- Titre -->
            <section class="container my-5 mx-auto">
                <h1 class="text-left">Bienvenue User</h1>
            </section>
            <!-- Recommandations -->
            <section>
                <div class="container my-5 mx-auto">
                    <h2 class="text-left">Recommandations</h2>
                    <div class="d-flex flex-row my-4">
                        <div class="card" style="width: 18rem; padding: 0rem;">
                            <img src="/public/placeholder.svg" alt="placeholder" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Titre</h5>
                                <p class="card-text">Description</p>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- Écouter récemment -->
             <section>
                <div class="container my-5 mx-auto">
                    <h2 class="text-left">Écouter récemment</h2>
                    <div class="d-flex flex-row my-4">
                        <div class="card" style="width: 18rem; padding: 0rem;">
                            <img src="/public/placeholder.svg" alt="placeholder" class="card-img-top">
                        </div>
                    </div>
                </div>
             </section>
            <!-- Classement -->
            <section>
                <div class="container my-5 mx-auto">
                    <h2 class="text-left">Classement</h2>
                    <div class="container-fluid d-flex flex-row my-4">
                        <div class="card mx-2" style="width: 18rem; padding: 0rem;">
                            <img src="/public/placeholder.svg" alt="placeholder" class="card-img-top">
                        </div>
                        <div class="card mx-2" style="width: 18rem; padding: 0rem;">
                            <img src="/public/placeholder.svg" alt="placeholder" class="card-img-top">
                        </div>
                        <div class="card mx-2" style="width: 18rem; padding: 0rem;">
                            <img src="/public/placeholder.svg" alt="placeholder" class="card-img-top">
                        </div>
                    </div>
                </div>

        </main>

        <!-- Bootstrap JavaScript Libraries -->
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
