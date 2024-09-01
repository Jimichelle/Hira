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
        <?php require_once ('php/components/header.php')?>
        <!-- Admin Dashboard -->
        <main class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <aside class="col-md-2">
                    <nav class="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="back.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="back.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="back.php">Songs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="back.php">Albums</a>
                            </li>
                        </ul>
                    </nav>
                </aside>
                <!-- Page -->
                <section class="col-md-10">
                    <h1 class="text-left">Dashboard</h1>
                    <div class="container my-5 mx-auto">
                        <h2 class="text-left">Utilisateurs</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>User1</td>
                                    <td>exemple@hira.ovh</td>
                                    <td>Admin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
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
