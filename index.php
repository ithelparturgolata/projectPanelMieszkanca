<?php
  include 'action.php';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Panel Mieszkańca</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment-with-locales.min.js"></script>
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
        <a href="https://euslugi.smbudowlani.pl/euslugi/Account/UserLogOn?ReturnUrl=%2feuslugi" class="btn btn-outline-warning">eBOK</a>
          <a href="https://www.perfekt.com.pl/" class="btn btn-outline-warning">WebMon</a>
      </div>
    </div>


  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">

        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
        <p class="lead text-muted">Szanowny mieszkańcu Spółdzielni Mieszkaniowej "BUDOWLANI".</p>
        <p class="lead text-muted">Poniżej udostępniamy Panel Mieszkańca, czyli miejsce gdzie otrzymujesz dostęp do wielu informacji dotyczących budynku w którym mieszkasz.<p>
        <p class="lead text-muted">Szukanie budynku po Indeksie ( 4 cyfyr) lub adresie.</p>  
        </p>
      </div>
    </div>
  </section>

<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
      $query= "SELECT * FROM budynek ";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
      ?>
      <div class="col">
        <div class="card shadow-sm">
          <div class="alert alert-primary" role="alert">Budynki</div>
          <div class="card-body">
            <table class="table table-hover" id="data-table">
              <thead>
                <tr>
                  <th>Indeks Budynek</th>
                  <th>Ulica</th>
                  <th>Info</th>
                </tr>
              </thead>
              <tbody>
              <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?= $row['indeksBudynek']; ?></td>
                  <td><?= $row['ulicaBudynek']; ?></td>

                  <td><a href="details.php?details=<?= $row['idBudynek']; ?>" class="badge badge-primary p-2">Szczegóły</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
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
<!--<th>#</th>-->
<!--<th>Image</th>-->

          <!--</div>
        </div>-->
  <script type="text/javascript">
  $(document).ready(function() {
      $('#data-table').DataTable( {
          "language": {
    "decimal":        "",
    "emptyTable":     "Brak danych",
    "info":           "Pokaż _START_ do _END_ z _TOTAL_ budynków",
    "infoEmpty":      "Pokaż 0 to 0 of 0 budynków",
    "infoFiltered":   "(przeszukano w _MAX_ budynkach)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Pokaż _MENU_ budynków",
    "loadingRecords": "Ładowanie...",
    "processing":     "Przetwarzanie...",
    "search":         "Szukaj:",
    "zeroRecords":    "Nie ma takiego indeksu budynku",
    "paginate": {
        "first":      "Pierwszy",
        "last":       "Ostatni",
        "next":       "Następny",
        "previous":   "Poprzedni"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
}
      } );
  } );
  </script>


</body>

</html>
