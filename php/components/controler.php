<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles pour le contrôleur qui reste en bas */
        .music-controller {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #f8f9fa;
            padding: 10px 15px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        
    </style>
</head>
<body>

<div class="music-controller d-flex align-items-center justify-content-between">
    <button class="btn btn-secondary">
        <i class="bi bi-skip-backward"></i>
    </button>

    <button class="btn btn-secondary btn-play-pause">
        <i class="bi bi-play-fill"></i> <!-- Ou bi-pause-fill si c'est en pause -->
    </button>

    <button class="btn btn-secondary">
        <i class="bi bi-skip-forward"></i>
    </button>

</div>

<!-- Bootstrap JS et icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

</body>
</html>
