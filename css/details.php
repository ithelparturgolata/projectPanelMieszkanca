<?php
  include 'action.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Panel Mieszkańca SM Budowlani</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <!--<h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>-->
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <!--<h4 class="text-white">Kontakt</h4>-->
          <ul class="list-unstyled">
            <li><a href="https://pl-pl.facebook.com/pages/category/Community/Sp%C3%B3%C5%82dzielnia-Mieszkaniowa-Budowlani-1458778117748667/" class="btn btn-outline-primary">Facebook</a>
            <a href="https://www.smbudowlani.pl/" class="btn btn-outline-warning">Strona główna</a>
            <a href="https://www.smbudowlani.pl/inwestycja/" class="btn btn-outline-secondary">Nowa Inwestycja</a>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="https://www.smbudowlani.pl/" class="btn btn-outline-secondary">
        <strong>Strona główna</strong>
      </a>
      <a href="index.php" class="btn btn-outline-danger">
        <strong>Powrót</strong>
      </a>
      <a href="https://euslugi.smbudowlani.pl/euslugi/Account/UserLogOn?ReturnUrl=%2feuslugi" class="btn btn-outline-warning">eBOK</a>
      <a href="https://www.perfekt.com.pl/" class="btn btn-outline-warning">WebMon</a>
    </div>
  </div>
</header>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">

      <?php if (isset($_SESSION['response'])) { ?>
      <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <b><?= $_SESSION['response']; ?></b>
      </div>
      <?php } unset($_SESSION['response']); ?>
      <p class="lead text-muted">Budynek: <?= $vulicaBudynek; ?></p>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= $vfoto1; ?>" class="d-block w-100" alt="..."><?= $vfoto1; ?>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Następny</span>
        </button>
      </div>

    </div>
  </div>
</section>


<main>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Budynek</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Indeks budynku: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vindeksBudynek; ?></p>
              <h5 class="btn btn-secondary">Ulica: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vulicaBudynek; ?></p>
              <h5 class="btn btn-secondary">Administrator: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vnazwiskoAdministrator; ?></p>
              <h5 class="btn btn-secondary">Telefon: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vtelefonAdministrator; ?></p>
              <h5 class="btn btn-secondary">E-mail: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vemailAdministrator; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Administracja</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Zarządca: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vnazwaOsiedla; ?></p>
              <h5 class="btn btn-secondary">Adres: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vadresOsiedla; ?></p>
              <h5 class="btn btn-secondary">Telefon: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vtelefonOsiedla; ?></p>
              <h5 class="btn btn-secondary">Kierownik: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vkierownikOsiedla; ?></p>
              <h5 class="btn btn-secondary">Zastępca: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vzastepcaOsiedla; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="fas fa-search"></i>&nbsp;&nbsp;Przeglądy</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Roczny kominów: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vkominyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Roczny instalacji gazowej: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vgazPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Roczny stanu technicznego budynku: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vtechnicznyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">5 letni instalacji elektrycznej: </h5>&nbsp;&nbsp;<p class="card-text"><?= $velektrykaPrzeglady; ?></p>
              <h5 class="btn btn-secondary">5 letni ogólnobudowlany: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vogolnyPrzeglady; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="far fa-bell"></i>&nbsp;&nbsp;Inne</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Wywóz śmieci: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vsmieciPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Odczyty podzielników: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vgazPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Wymiana baterii w podzielnikach: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vtechnicznyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Legalizacja wodomierzy: </h5>&nbsp;&nbsp;<p class="card-text"><?= $velektrykaPrzeglady; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="fas fa-hammer"></i>&nbsp;&nbsp;Remonty</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Rodzaj prac: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vpracaRemonty; ?></p>
              <h5 class="btn btn-secondary">Data ankiety: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vankietaRemonty; ?></p>
              <h5 class="btn btn-secondary">Wyniki ankiety: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vwynikRemonty; ?></p>
              <h5 class="btn btn-secondary">Data przetargu: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vprzetargRemonty; ?></p>
              <h5 class="btn btn-secondary">Wykonawca: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vwykonawcaRemonty; ?></p>
              <h5 class="btn btn-secondary">Rozpoczęcie prac: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vstartRemonty; ?></p>
              <h5 class="btn btn-secondary">Zakończenie prac: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vkoniecRemonty; ?></p>
              <h5 class="btn btn-secondary">Uwagi: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vuwagiRemonty; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" class="btn btn-warning">Do góry</a>
    </p>

  </div>
</footer>

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
