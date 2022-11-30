<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercies POO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Accueil
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <!-- Bouton -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo1</a>
                        <div class="dropdown-menu">
                            <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo1.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                    <!-- Bouton-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo2</a>
                        <div class="dropdown-menu">
                        <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo2.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                    <!-- Bouton -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo3</a>
                        <div class="dropdown-menu">
                        <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo3.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                    <!-- Bouton -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo4</a>
                        <div class="dropdown-menu">
                        <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo4.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                     <!-- Bouton -->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo5</a>
                        <div class="dropdown-menu">
                        <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo5.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                    <!-- Bouton -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo6</a>
                        <div class="dropdown-menu">
                        <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo6.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                    <!-- Bouton -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Exo7</a>
                        <div class="dropdown-menu">
                        <?php for ($i = 1; $i <= 1; $i++) : ?>
                                <a class="dropdown-item" href="../POO/Exo7.php">exercice<?=$i ?></a>
                            <?php endfor; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <h1 class="rounded border border-dark p-2 m-2 bg-info text-lig"> <?= $titre ?> </h1>
        <?= $content ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>