<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        main {
            height: 105vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('public/vinyle.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
        }
        .latest-releases {
            text-align: left;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        include 'php/header.php';
        include 'php/sidebar_right.php';
        include 'utils/database.php';
    ?>

    <main class="d-flex flex-column mx-4">
        <section class="text-center">
            <?php 
                if (isset($_SESSION['user'])) {
                    echo "<h1 class='display-1 text-white'>Bienvenue, " . htmlspecialchars($_SESSION['user']['nom']) . "</h1>";
                } else {
                    echo '<div class="text-white text-center" style="margin-top: -50px;">';
                    echo '<h1 class="display-1 fw-bold"><strong>Bienvenue sur Hira</strong></h1>';
                    echo '</div>';
                }
            ?>
        </section>
    </main>

    <?php include 'php/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
