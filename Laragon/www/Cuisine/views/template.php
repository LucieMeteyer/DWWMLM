<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <title>Cusine</title>
</head>



<body style="box-sizing: border-box; background-color: #F9D194;">
  <header>
    <div style="font-family: 'Eagle Lake', cursive; color : #2F2523;  min-height:100vh;">
      <nav class="navbar navbar-expand-lg fs-5" style="background-color: #97603E;">

        <div class="container-fluid ">
          <img style="width : 80px; " src="public/images/logo.png" alt="logo">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto p-3">
              <li class="nav-item">
                <a class="nav-link" href="<?= URL ?>accueil">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= URL ?>recettes">Recettes</a>
              </li>
            </ul>
            <button type="submit" style="background-color: #B79994; font-family: 'Eagle Lake',cursive;" class="btn my-2 my-sm-0 fs-5">connexion</button>

          </div>

        </div>

      </nav>

      <div class="container-fluid  d-flex  flex-column p-0 ">
        <?= $content ?>
      </div>

  </header>


  <footer class="mt-5">
    <div class="d-flex align-items-center justify-content-between" style="background-color: #97603E;">
      <a style=" font-family: 'Eagle Lake', cursive;" class="text-light" href="#"> <img src="public/images/shop.png" alt="shop"> LesUstensilesDeCalcifer </a>
      <img src="public/images/logo footer.png" alt="logo">
    </div>
  </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>