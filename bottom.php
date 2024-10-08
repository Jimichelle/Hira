<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bottom Sidebar Spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style/bottom.css">
    
</head>
<body>

<!-- Bottom Sidebar -->
<div class="bottom-sidebar bg-dark">
    <!-- Song Details -->
    <div class="song-details">
        <img src="public/greenzer.jpg" alt="Album Art">
        <div class="song-info">
            <p>FUM22NOCIVE</p>
            <p>Green Montana</p>
        </div>
    </div>

    <!-- Controls -->
    <div class="controls">
        <i class="bi bi-heart" title="Like"></i>
        <i class="bi bi-download" title="Download"></i>
        
        <i class="bi bi-speaker-fill" title="Speaker"></i>
    </div>

    <!-- Progress Bar -->
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <!-- Playback Controls -->
    <div class="controls">
        <i class="bi bi-shuffle" title="Shuffle"></i>
        <i class="bi bi-skip-backward-fill" title="Previous"></i>
        <i class="bi bi-play-circle-fill" title="Play"></i>
        <i class="bi bi-skip-forward-fill" title="Next"></i>
    </div>

    <div class="controls">
        <i class="bi bi-arrows-angle-expand" title="Aggrandir" data-bs-toggle="offcanvas" data-bs-target="#bottomSidebar"></i>
    </div>
</div>

<!-- Sidebar (Offcanvas) qui s'ouvre depuis le bas -->
<div class="offcanvas offcanvas-bottom bg-dark text-white" tabindex="-1" id="bottomSidebar" aria-labelledby="bottomSidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="bottomSidebarLabel">Song Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <?php require_once("side/sidebot.php")?>; <!-- C'est le bottom sideBar qu'on doit modifier encore -->
</div>



</body>
</html>
