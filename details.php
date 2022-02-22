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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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

    </div>
  </div>
</section>

<?php if ($vinfoOgolne):?>
  <!-- Button trigger modal -->
<div class="album py-5 bg-light">
  <div class="container">
    <div class="col">
      <div class="card shadow-sm">
        <div class="alert alert-dark" role="alert"><i class="fas fa-bullhorn"></i></i><b>&nbsp;&nbsp;Komunikat</b></div>
        <div class="card-body"><?= $vinfoOgolne; ?></div>

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
<?php endif;?>

<main>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols -xl-2">
        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Budynek</div>
            <div class="container">
              <div class="row row-cols-2">
                <h5 class="btn btn-warning"><div class="col">Indeks budynku: </div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vindeksBudynek; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Ulica:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vulicaBudynek; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Administrator:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vnazwiskoAdministrator; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Telefon:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vtelefonAdministrator; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Email:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vemailAdministrator; ?></div></h5>
              </div>
            </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                  <hr>
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols -xl-2">
          <div class="col">
            <div class="card shadow-sm">
              <div class="alert alert-dark" role="alert"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Administracja</div>
              <div class="container">
                <div class="row row-cols-2">
                  <h5 class="btn btn-warning"><div class="col">Zarządca: </div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vnazwaOsiedla; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Adres:</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vadresOsiedla; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Telefon:</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vtelefonOsiedla; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Kierownik:</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vkierownikOsiedla; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Zastępca:</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vzastepcaOsiedla; ?></div></h5>
                </div>
              </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                    <hr>
                  </div>
                  <small class="text-muted">###</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols -xl-2">
            <div class="col">
              <div class="card shadow-sm">
                <div class="alert alert-dark" role="alert"><i class="fas fa-home"></i>&nbsp;&nbsp;Dokumentacja budynku</div>
                <div class="container">
                  <div class="row row-cols-2">
                    <h5 class="btn btn-warning"><div class="col">Rok budowy: </div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vrokBudowy; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Obręb:</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vobrebBudynek; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Działka:</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vdzialkaBudynek; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Łączna powierzchnia działki:</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vdzialkaPowierzchnia; ?> m<sup>2</sup></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Powierzchnia wspólna budynku:</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpowierzchniaWspolna; ?> m<sup>2</sup></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Rzut:</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><a href="<?= $vrzutBudynek; ?>" target="_blank">Pobierz</a></div></h5>
                  </div>
                </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                      <hr>
                    </div>
                    <small class="text-muted">###</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row row-cols-1 row-cols -xl-2">
              <div class="col">
                <div class="card shadow-sm">
                  <div class="alert alert-dark" role="alert"><i class="fas fa-piggy-bank"></i>&nbsp;&nbsp;Finanse budynku na dzień 31.12.2021 </div>
                  <div class="container">
                    <div class="row row-cols-2">
                      <h5 class="btn btn-warning"><div class="col">Zadłużenie budynku: </div></h5>
                      <h5 class="btn btn-outline-secondary"><div class="col"><?= $vzadluzenieBudynek; ?> zł</div></h5>
                      <h5 class="btn btn-warning"><div class="col">Fundusz remontowy:</div></h5>
                      <h5 class="btn btn-outline-secondary"><div class="col"><?= $vfunduszBudynek; ?> zł</div></h5>
                    </div>
                  </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                        <hr>
                      </div>
                      <small class="text-muted">###</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols -xl-2">
        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Energetyka </div>
            <div class="container">
              <div class="row row-cols-2">
                <h5 class="btn btn-warning"><div class="col">Termin odczytu podzielników ciepła:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vterminPodzielniki; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Termin legalizacji wodomierzy:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vterminLegalizacja; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Uwagi legalizacja:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vuwagiLegalizacja; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Wymiana baterii:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vwymianaBaterii; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Uwagi wymiana baterii:</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vuwagiWymianaBaterii; ?></div></h5>
              </div>
            </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                  <hr>
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php if ($vpracaRemonty):?>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols -xl-2">
        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Remonty - <?= $vpracaRemonty; ?></div>
            <div class="container">
              <div class="row row-cols-2">
                <h5 class="btn btn-warning"><div class="col">Rodzaj prac</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpracaRemonty; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Wykonawca</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vwykonawcaRemonty; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Planowane rozpoczęcie</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vstartRemonty; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Planowane zakończenie</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vkoniecRemonty; ?></div></h5>
                <h5 class="btn btn-warning"><div class="col">Uwagi</div></h5>
                <h5 class="btn btn-outline-secondary"><div class="col"><?= $vuwagiRemonty; ?></div></h5>
              </div>
            </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                  <hr>
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>

    <?php if ($vpracaRemonty1):?>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols -xl-2">
          <div class="col">
            <div class="card shadow-sm">
              <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Remonty - <?= $vpracaRemonty1; ?></div>
              <div class="container">
                <div class="row row-cols-2">
                  <h5 class="btn btn-warning"><div class="col">Rodzaj prac</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpracaRemonty1; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Wykonawca</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vwykonawcaRemonty1; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Planowane rozpoczęcie</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vstartRemonty1; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Planowane zakończenie</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vkoniecRemonty1; ?></div></h5>
                  <h5 class="btn btn-warning"><div class="col">Uwagi</div></h5>
                  <h5 class="btn btn-outline-secondary"><div class="col"><?= $vuwagiRemonty1; ?></div></h5>
                </div>
              </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                    <hr>
                  </div>
                  <small class="text-muted">###</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif;?>

      <?php if ($vpracaRemonty2):?>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols -xl-2">
            <div class="col">
              <div class="card shadow-sm">
                <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Remonty - <?= $vpracaRemonty2; ?></div>
                <div class="container">
                  <div class="row row-cols-2">
                    <h5 class="btn btn-warning"><div class="col">Rodzaj prac</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpracaRemonty2; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Wykonawca</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vwykonawcaRemonty2; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Planowane rozpoczęcie</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vstartRemonty2; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Planowane zakończenie</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vkoniecRemonty2; ?></div></h5>
                    <h5 class="btn btn-warning"><div class="col">Uwagi</div></h5>
                    <h5 class="btn btn-outline-secondary"><div class="col"><?= $vuwagiRemonty2; ?></div></h5>
                  </div>
                </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                      <hr>
                    </div>
                    <small class="text-muted">###</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif;?>

        <?php if ($vinfoDodatkowe):?>
          <!-- Button trigger modal -->
        <div class="album py-5 bg-light">
          <div class="container">
            <div class="col">
              <div class="card shadow-sm">
                <div class="alert alert-dark" role="alert"><i class="fas fa-bullhorn"></i></i><b>&nbsp;&nbsp;Przeglądy - komunikat</b></div>
                <div class="card-body"><?= $vinfoDodatkowe; ?></div>

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
        <?php endif;?>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols -xl-2">
        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Przeglądy </div>
            <div class="container">
              <div class="row row-cols-2">
                <h5 class="btn btn-warning"><div class="col">Aktualny</div></h5>
                <h5 class="btn btn-warning"><div class="col">Wykonany w :</div></h5>
              </div>
            <div class="row row-cols-2">
            </div>
            <!-- <?php if ($vinfoDodatkowe):?>
              <div class="alert alert-dark" role="alert"><b><?= $vinfoDodatkowe; ?></b></div>
            <?php endif;?> -->
            <div class="row row-cols-2">
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd kominiarski (wykonany w)</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vakominyPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd gazowy (wykonany w):</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vagazPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd roczny budynku (wykonany w):</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vatechnicznyPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd pięcioletni budowlany (wykonany w):</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vaogolnyPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd pięcioletni elektryczny (wykonany w):</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vaelektrykaPrzeglady; ?></div></h5>
            </div>
            <div class="row row-cols-2">
              <h5 class="btn btn-warning"><div class="col">Najbliższy</div></h5>
              <h5 class="btn btn-warning"><div class="col">Planowany w:</div></h5>
            </div>
            <div class="row row-cols-2">
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd kominiarski:</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpkominyPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd gazowy:</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpgazPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd roczny budynku:</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vptechnicznyPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd pięcioletni budowlany:</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpogolnyPrzeglady; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Przegląd pięcioletni elektryczny:</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vpelektrykaPrzeglady; ?></div></h5>
            </div>
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

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols -xl-2">
        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Śmieci wielkogabarytowe / elektryczne / elektroniczne</div>
            <div class="container">
              <div class="row row-cols-2">
                <h5 class="btn btn-warning"><div class="col">Miesiąc</div></h5>
                <h5 class="btn btn-warning"><div class="col">Dzień </div></h5>
              </div>
            <div class="row row-cols-2">
              <h5 class="btn btn-outline-secondary"><div class="col">Styczeń</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciStyczen; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Luty</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciLuty; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Marzec</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciMarzec; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Kwiecień</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciKwiecien; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Maj</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciMaj; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Czerwiec</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciCzerwiec; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Lipiec</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciLipiec; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Sierpień</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciSierpien; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Wrzesień</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciWrzesien; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Październik</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciPazdziernik; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Listopad</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciListopad; ?></div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col">Grudzień</div></h5>
              <h5 class="btn btn-outline-secondary"><div class="col"><?= $vsmieciGrudzien; ?></div></h5>
            </div>

            </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                </div>
                <small class="text-muted">###</small>
              </div>
            </div>
          </div>
        </div>

        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row row-cols-1 row-cols -xl-2">
              <div class="col">
                <div class="card shadow-sm">
                  <div class="alert alert-dark" role="alert"><i class="far fa-building"></i>&nbsp;&nbsp;Do pobrania </div>
                  <div class="container">
                    <div class="row row-cols-2">
                      <a href="assets/202007131007.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o wydanie zaświadczenia w celu założenia Księgi Wieczystej.</a></li>
                      <a href="assets/202007161225.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o ustanowienie odrębnej własności lokalu.</a></li>
                      <a href="assets/202007131008.docx" target="_blank" class="list-group-item list-group-item-action">Adres do korespondencji.</a></li>
                      <a href="assets/202007161215.docx" target="_blank" class="list-group-item list-group-item-action">Oświadczenie zmiana ilości wody lub osób do ustalenia zaliczek.</a></li>
                      <a href="assets/202007131009.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o dodatkowe przekazywanie kart opłat.</a></li>
                      <a href="assets/201910161254.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o wydanie warunków wymiany grzejnika.</a></li>
                      <a href="assets/201803191314.doc" target="_blank" class="list-group-item list-group-item-action">Warunki techniczne montażu klimatyzatorów.</a></li>
                      <a href="assets/20191008819.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o wydanie warunków przebudowy/zadaszenia balkonu.</a></li>
                      <a href="assets/202007161216.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o dofinansowanie wymiany okien.</a></li>
                      <a href="assets/201803191316.doc" target="_blank" class="list-group-item list-group-item-action">Warunki techniczne montażu indywidualnych anten odbiorczych.</a></li>
                      <a href="assets/202007131010.docx" target="_blank" class="list-group-item list-group-item-action">Wniosek o zwrot nadpłaty na konto.</a></li>
                    </div>
                  </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <!--<a href="details_2316.html" class="btn btn-outline-warning">Szczegóły</a>-->
                        <hr>
                      </div>
                      <small class="text-muted">###</small>
                    </div>
                  </div>
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
