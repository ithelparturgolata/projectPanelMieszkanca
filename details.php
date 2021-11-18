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

      <img src="<?= $vzdjecieBudynek; ?>" class="img-fluid" alt="">

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
            <div class="alert alert-primary" role="alert"><i class="fas fa-home"></i></i>&nbsp;&nbsp;Dokumentacja budynku</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Rok budowy: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vrokBudowy; ?></p>
              <h5 class="btn btn-secondary">Obręb: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vobrebBudynek; ?></p>
              <h5 class="btn btn-secondary">Działka: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vdzialkaBudynek; ?></p>
              <h5 class="btn btn-secondary">Łączna powierzchnia: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vdzialkaPowierzchnia; ?> m<sup>2</sup></p>
              <h5 class="btn btn-secondary">Powierzchnia wspólna: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vpowierzchniaWspolna; ?> m<sup>2</sup></p>
              <h5 class="btn btn-secondary">Rzut: </h5>&nbsp;&nbsp;<p class="card-text"><a href="<?= $vrzutBudynek; ?>" target="_blank">Pobierz</a></p>
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
            <div class="alert alert-primary" role="alert"><i class="fas fa-search"></i>&nbsp;&nbsp;Przeglądy - AKTUALNE</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Przegląd kominiarski (obowiązuje do): </h5>&nbsp;&nbsp;<p class="card-text"><?= $vakominyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd gazowy (obowiązuje do): </h5>&nbsp;&nbsp;<p class="card-text"><?= $vagazPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd roczny budynku (obowiązuje do): </h5>&nbsp;&nbsp;<p class="card-text"><?= $vatechnicznyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd pięcioletni budowlany (obowiązuje do): </h5>&nbsp;&nbsp;<p class="card-text"><?= $vaelektrykaPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd pięcioletni elektryczny (obowiązuje do): </h5>&nbsp;&nbsp;<p class="card-text"><?= $vaogolnyPrzeglady; ?></p>
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
            <div class="alert alert-danger" role="alert"><i class="fas fa-search"></i>&nbsp;&nbsp;Przeglądy - PLANOWANE</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Przegląd kominiarski: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vpkominyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd gazowy: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vpgazPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd roczny budynku: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vptechnicznyPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd pięcioletni budowlany: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vpelektrykaPrzeglady; ?></p>
              <h5 class="btn btn-secondary">Przegląd pięcioletni elektryczny: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vpogolnyPrzeglady; ?></p>
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
              <h5 class="btn btn-secondary">Wykonawca: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vwykonawcaRemonty; ?></p>
              <h5 class="btn btn-secondary">Planowane rozpoczęcie prac: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vstartRemonty; ?></p>
              <h5 class="btn btn-secondary">Planowane zakończenie prac: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vkoniecRemonty; ?></p>
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


        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="far fa-bell"></i>&nbsp;&nbsp;Energetyka</div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Termin legalizacji wodomierzy: : </h5>&nbsp;&nbsp;<p class="card-text"><?= $vterminLegalizacja; ?></p>
              <h5 class="btn btn-secondary">Uwagi: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vuwagiLegalizacja; ?></p>
              <h5 class="btn btn-secondary">Termin odczytu podzielników ciepła:: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vterminPodzielniki; ?></p>
              <h5 class="btn btn-secondary">Uwagi: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vuwagiPodzielniki; ?></p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Odczyty podzielników
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Odczyty podzielników</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="card-text">W większości budynków mieszkalnych stany wodomierzy i podzielniki są odczytywane radiowo. Tylko w jednym budynku tj. przy ul. Zamoyskiego 5 odczyty wymagają wejścia do mieszkania na przełomie stycznia i lutego (I termin 12.02.2019; II termin 19.02.2019). W pozostałych budynkach mieszkalnych odczyty są pobierane radiowo lub dostęp do liczników jest bezpośrednio z klatki schodowej.</p>

                      <p class="card-text">W przypadku podzielników Brunata Futura+ , których odczyty są pobierane online, mieszkańcy mogą po zarejestrowaniu w serwisie WebMon na bieżąco śledzić zużycie mediów za pomocą łącza internetowego. Do uzyskania dostępu/rejestracji potrzebny jest KOD AKTYWACYJNY. Kod aktywacyjny można uzyskać w Dziale Gospodarki Energetycznej Spółdzielni tel. 52 323 44 65. W przypadku zagubienia lub trudności z aktywacją prosimy się zwracać również pod ten numer.</p>

                      <p class="card-text">W budynkach wyróżnionych w harmonogramie niebieską czcionką wskazania mierników są pobierane drogą radiową lub są odczytywane z przyrządów umieszczonych na klatce schodowej, ale brak jest technicznych możliwości prezentacji odczytów przez internet.</p>

                      <p class="card-text">W harmonogramie oraz w danych umieszczonych w Panelu Mieszkańca jest podany dla danego budynku okres rozliczeniowy i termin odczytu podzielników i wodomierzy. Rozliczenia są dostarczane mieszkańcom w terminie do dwóch miesięcy od końca okresu rozliczeniowego.  Zwykle jest to trzecia dekada drugiego miesiąca.</p>
                      <!--Wykaz budynków z odczytem zdalnym oraz informacja o możliwości otrzymania KODU w poniższym pliku:-->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                    </div>
                  </div>
                </div>
              </div>

              <br><br>

              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                Wymiana baterii || Legalizacja
              </button>
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel1">Wymiana baterii w podzielnikach || Legalizacja wodomierzy</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Szanowni Państwo!

                      <p class="card-text">Prace w zakresie kompleksowej legalizacji wodomierzy oraz wymiany baterii w podzielnikach kosztów ogrzewania  są realizowane odpowiednio do komunikatów /ograniczeń związanych z pandemią. Natomiast awaryjne wymiany lub wymiany  umawiane indywidualnie są realizowane odpowiednio do potrzeb.</p>

                      <p class="card-text">Zgodnie z przepisami Urzędu Miar wymagana jest okresowa legalizacja wodomierzy. W związku z powyższym Spółdzielnia prowadzi wymianę wodomierzy na posiadające ważną cechę legalizacyjną. Jest to najmniej uciążliwa dla mieszkańców forma spełnienia wymagań legalizacyjnych. Ponadto montowane wodomierze są oczyszczone z osadów.</p>

                      <p class="card-text">W podzielnikach kosztów ogrzewania po 10 latach  wymagana jest wymiana baterii w celu zagwarantowania ciągłości pracy tych urządzeń.
                      O dokładnym terminie realizacji wyżej wymienionych prac zostaną Państwo powiadomieni, jak dotychczas, odrębnym komunikatem umieszczonym na tablicy informacyjnej lub drzwiach do budynku oraz  na stronie Spółdzielni.
                      Prosimy o życzliwe przyjęcie pracowników PERFEKT‘u i pomoc w sprawnym przebiegu poprzez odsunięcie mebli, lodówek itp. utrudniających dostęp, odpowiednio do realizowanych prac tj. do wodomierzy lub grzejników.
                      Prosimy również o wcześniejsze sprawdzenie zaworów przed wodomierzami. Niesprawne zawory przed wodomierzami należy zgłaszać do Administracji Osiedla opiekującej się Państwa budynkiem. Koszt wymiany jest pokrywany z funduszu remontowego i nie wiąże się z żadną dodatkową odpłatnością z Państwa strony ! Prace są realizowane w dwóch terminach wyznaczonych dla danej grupy mieszkań. Mieszkańcy, u których wymiana nastąpi poza wyznaczonymi terminami będą obowiązani pokryć dodatkowy koszt indywidualnego dojazdu w wysokości 35,00 zł + VAT.</p>

                      <p class="card-text">W trosce o bezpieczeństwo i zdrowie nas wszystkich prosimy, aby osoby przebywające na kwarantannie lub przechodzące infekcję z wyprzedzeniem przekazały pracownikom Spółdzielni niezbędne informacje
                      Osoby czasowo przebywające poza lokalem prosimy o przekazanie danych kontaktowych lub danych osoby mogącej udostępnić lokal do wykonania prac do Działu Gospodarki Energetycznej tel. 52 366 44 15 lub bezpośrednio do firmy PERFEKT tel. 52 360 81 21 lub 52 360 81 00.
                      Potwierdzenie wymiany jest wykonywane poprzez przenośny terminal danych. Osoby zainteresowane protokółem wymiany w formie pliku PDF lub dokumentu tradycyjnego prosimy o zgłaszanie wniosku do Spółdzielni.
                      W przypadku wątpliwości lub potrzeby uzyskania szerszych wyjaśnień prosimy się kontaktować z Kierownikiem Działu Gospodarki Energetycznej Spółdzielni tel. 52 366 44 65.</p>

                      <p class="card-text">Nie wykonanie legalizacji wodomierza w terminie podanym w wezwaniu spowoduje przejście na ryczałtowe (20 m3/m-c/osobę) obciążanie lokalu za korzystanie z wody. Czyli tak jak w lokalu bez wodomierzy.
                      Natomiast w przypadku utraty sprawności podzielnika wskutek braku zasilania (nie wymienienia baterii)  udział tego lokalu w kosztach ogrzewania budynku będzie obliczony tak jak dla mieszkania nie opomiarowanego.  </p>

                      <!--Wykaz budynków z odczytem zdalnym oraz informacja o możliwości otrzymania KODU w poniższym pliku:-->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                    </div>
                  </div>
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


        <div class="col">
          <div class="card shadow-sm">
            <div class="alert alert-primary" role="alert"><i class="fas fa-piggy-bank"></i></i>&nbsp;&nbsp;Finanse budynku na dzień 30.06.2021 </div>
            <div class="card-body">
              <h5 class="btn btn-secondary">Zadłużenie budynku: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vzadluzenieBudynek; ?> zł</p>
              <h5 class="btn btn-secondary">Fundusz remontowy: </h5>&nbsp;&nbsp;<p class="card-text"><?= $vfunduszBudynek; ?> zł</p>
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
            <div class="alert alert-primary" role="alert"><i class="fas fa-download"></i></i>&nbsp;&nbsp;Do pobrania</div>
            <div class="card-body">
                 <div class="list-group">
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
