<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bibliothèque en ligne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="biblioapp">
        <aside class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">BiblioApp</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="fa-solid fa-house"></i>
                        Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <i class="fa-solid fa-cubes"></i>
                        Bibliothèque
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <i class="fa-solid fa-list"></i>
                        Réservations
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <i class="fa-solid fa-users"></i>
                        Clients
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        <i class="fa-solid fa-book"></i>
                        Documentation
                    </a>
                </li>
            </ul>
            <!-- <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div> -->
        </aside>
        <main>
            <!-- <?= $content ?> -->