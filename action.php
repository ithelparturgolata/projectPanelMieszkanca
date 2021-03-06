<?php
	session_start();
	include 'config.php';

	$update=false;
	$idBudynek="";
	$indeksBudynek="";
	$ulicaBudynek="";
	$nazwaOsiedla="";
	$adresOsiedla="";
	$telefonOsiedla="";
	$kierownikOsiedla="";
	$zastepcaOsiedla="";
	$nazwiskoAdministrator="";
	$telefonAdministrator="";
	$emailAdministrator="";
	$pkominyPrzeglady;
	$pgazPrzeglady;
	$ptechnicznyPrzeglady;
	$pelektrykaPrzeglady;
	$pogolnyPrzeglady;
	$pracaRemonty;
	$infoDodatkowe;
	$ankietaRemonty;
	$wynikRemonty;
	$przetargRemonty;
	$wykonawcaRemonty;
	$startRemonty;
	$koniecRemonty;
	$uwagiRemonty;
	$smieciStyczen;
	$smieciLuty;
	$smieciMarzec;
	$smieciKwiecien;
	$smieciMaj;
	$smieciCzerwiec;
	$smieciLipiec;
	$smieciSierpien;
	$smieciWrzesien;
	$smieciPazdziernik;
	$smieciListopad;
	$smieciGrudzien;
	$terminPodzielniki;
	$terminLegalizacja;
	$uwagiLegalizacja;
	$wymianaBaterii;
	$uwagiWymianaBaterii;
	$zadluzenieBudynek;
	$funduszBudynek;
	$rokBudowy;
	$obrebBudynek;
	$dzialkaBudynek;
	$dzialkaPowierzchnia;
	$powierzchniaWspolna;
	$powierzchniaUdzial;
	$rzutBudynek;
	$zdjecieBudynek;
	$pracaRemonty1;
	$wykonawcaRemonty1;
	$startRemonty1;
	$koniecRemonty1;
	$uwagiRemonty1;
	$pracaRemonty2;
	$wykonawcaRemonty2;
	$startRemonty2;
	$koniecRemonty2;
	$uwagiRemonty2;
	$infoOgolne;

if(isset($_POST['add'])){
	$indeksBudynek=$_POST['indeksBudynek'];
	$ulicaBudynek=$_POST['ulicaBudynek'];
	$nazwaOsiedla=$_POST['nazwaOsiedla'];
	$adresOsiedla=$_POST['adresOsiedla'];
	$telefonOsiedla=$_POST['telefonOsiedla'];
	$kierownikOsiedla=$_POST['kierownikOsiedla'];
	$zastepcaOsiedla=$_POST['zastepcaOsiedla'];
	$nazwiskoAdministrator=$_POST['nazwiskoAdministrator'];
	$telefonAdministrator=$_POST['telefonAdministrator'];
	$emailAdministrator=$_POST['emailAdministrator'];


$query="INSERT INTO budynek(indeksBudynek, ulicaBudynek, nazwaOsiedla, adresOsiedla, telefonOsiedla, kierownikOsiedla, zastepcaOsiedla, nazwiskoAdministrator, telefonAdministrator, emailAdministrator)VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmt=$mysqli->prepare($query);
		$stmt->bind_param("ssssssss",$indeksBudynek, $ulicaBudynek, $nazwaOsiedla, $adresOsiedla, $telefonOsiedla, $kierownikOsiedla, $zastepcaOsiedla, $nazwiskoAdministrator, $telefonAdministrator, $emailAdministrator);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Pomy??lnie dodano!";
		$_SESSION['res_type']="Sukces";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$query="DELETE FROM budynek WHERE id=?";
		$stmt=$mysqli->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:index.php');
		$_SESSION['response']="Pomy??lnie skasowano!";
		$_SESSION['res_type']="Uwaga";
	}
	if(isset($_GET['edit'])){
		$idBudynek=$_GET['edit'];

		$query = "SELECT * FROM budynek WHERE idBudynek=?";
		$stmt=$mysqli->prepare($query);
		$stmt->bind_param("i",$idBudynek);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$idBudynek=$row['idBudynek'];
		$indeksBudynek=$row['indeksBudynek'];
		$ulicaBudynek=$row['ulicaBudynek'];
		$nazwaOsiedla=$row['nazwaOsiedla'];
		$adresOsiedla=$row['adresOsiedla'];
		$telefonOsiedla=$row['telefonOsiedla'];
		$kierownikOsiedla=$row['kierownikOsiedla'];
		$zastepcaOsiedla=$row['zastepcaOsiedla'];
		$nazwiskoAdministrator=$row['nazwiskoAdministrator'];
		$telefonAdministrator=$row['telefonAdministrator'];
		$emailAdministrator=$row['emailAdministrator'];
		$pkominyPrzeglady=$row['pkominyPrzeglady'];
		$pgazPrzeglady=$row['pgazPrzeglady'];
		$ptechnicznyPrzeglady=$row['ptechnicznyPrzeglady'];
		$pelektrykaPrzeglady=$row['pelektrykaPrzeglady'];
		$pogolnyPrzeglady=$row['pogolnyPrzeglady'];
		$smieciPrzeglady=$row['smieciPrzeglady'];
		$pracaRemonty=$row['pracaRemonty'];
		$infoDodatkowe=$row['infoDodatkowe'];
		$ankietaRemonty=$row['ankietaRemonty'];
		$wynikRemonty=$row['wynikRemonty'];
		$przetargRemonty=$row['przetargRemonty'];
		$wykonawcaRemonty=$row['wykonawcaRemonty'];
		$startRemonty=$row['startRemonty'];
		$koniecRemonty=$row['koniecRemonty'];
		$uwagiRemonty=$row['uwagiRemonty'];
		$smieciStyczen=$row['smieciStyczen'];
		$smieciLuty=$row['smieciLuty'];
		$smieciMarzec=$row['smieciMarzec'];
		$smieciKwiecien=$row['smieciKwiecien'];
		$smieciMaj=$row['smieciMaj'];
		$smieciCzerwiec=$row['smieciCzerwiec'];
		$smieciLipiec=$row['smieciLipiec'];
		$smieciSierpien=$row['smieciSierpien'];
		$smieciWrzesien=$row['smieciWrzesien'];
		$smieciPazdziernik=$row['smieciPazdziernik'];
		$smieciListopad=$row['smieciListopad'];
		$smieciGrudzien=$row['smieciGrudzien'];
		$terminPodzielniki=$row['smieciGrudzien'];
		$terminLegalizacja=$row['smieciGrudzien'];
		$uwagiLegalizacja=$row['smieciGrudzien'];
		$wymianaBaterii=$row['wymianaBaterii'];
		$uwagiWymianaBaterii=$row['uwagiWymianaBaterii'];
		$zadluzenieBudynek=$row['zadluzenieBudynek'];
		$funduszBudynek=$row['funduszBudynek'];
		$rokBudowy=$row['rokBudowy'];
		$obrebBudynek=$row['obrebBudynek'];
		$dzialkaBudynek=$row['dzialkaBudynek'];
		$dzialkaPowierzchnia=$row['dzialkaPowierzchnia'];
		$powierzchniaWspolna=$row['powierzchniaWspolna'];
		$powierzchniaUdzial=$row['powierzchniaUdzial'];
		$rzutBudynek=$row['rzutBudynek'];
		$zdjecieBudynek=$row['zdjecieBudynek'];
		$pracaRemonty1=$row['pracaRemonty1'];
		$wykonawcaRemonty1=$row['wykonawcaRemonty1'];
		$startRemonty1=$row['startRemonty1'];
		$koniecRemonty1=$row['koniecRemonty1'];
		$uwagiRemonty1=$row['uwagiRemonty1'];
		$pracaRemonty2=$row['pracaRemonty2'];
		$wykonawcaRemonty2=$row['wykonawcaRemonty2'];
		$startRemonty2=$row['startRemonty2'];
		$koniecRemonty2=$row['koniecRemonty2'];
		$uwagiRemonty2=$row['uwagiRemonty2'];
		$infoOgolne=$row['infoOgolne'];


		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$kodkontrahenta=$_POST['kodkontrahenta'];
		$idlokatora=$_POST['idlokatora'];
		$nazwa=$_POST['nazwa'];
		$nrtelefonu=$_POST['nrtelefonu'];
		$nrtelefonukom=$_POST['nrtelefonukom'];
		$adresemail=$_POST['adresemail'];
		$pesel=$_POST['pesel'];
		$adres=$_POST['adres'];

		$query="UPDATE kontrahenci SET kodkontrahenta=?,idlokatora=?,nazwa=?,nrtelefonu=?,nrtelefonukom=?,adresemail=?,pesel=?,adres=? WHERE id=?";
		$stmt=$mysqli->prepare($query);
		$stmt->bind_param("ssssssssi",$kodkontrahenta,$idlokatora,$nazwa,$nrtelefonu,$nrtelefonukom,$adresemail,$pesel,$adres,$id);
		$stmt->execute();

		$_SESSION['response']="Pomy??lnie zaktualizowano!";
		$_SESSION['res_type']="G????wny";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$idBudynek=$_GET['details'];
		$query= "SELECT * FROM budynek WHERE idBudynek=?";
		$stmt=$mysqli->prepare($query);
		$stmt->bind_param("i",$idBudynek);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vidBudynek=$row['idBudynek'];
		$vindeksBudynek=$row['indeksBudynek'];
		$vulicaBudynek=$row['ulicaBudynek'];
		$vnazwaOsiedla=$row['nazwaOsiedla'];
		$vadresOsiedla=$row['adresOsiedla'];
		$vtelefonOsiedla=$row['telefonOsiedla'];
		$vkierownikOsiedla=$row['kierownikOsiedla'];
		$vzastepcaOsiedla=$row['zastepcaOsiedla'];
		$vnazwiskoAdministrator=$row['nazwiskoAdministrator'];
		$vtelefonAdministrator=$row['telefonAdministrator'];
		$vemailAdministrator=$row['emailAdministrator'];
		$vpkominyPrzeglady=$row['pkominyPrzeglady'];
		$vpgazPrzeglady=$row['pgazPrzeglady'];
		$vptechnicznyPrzeglady=$row['ptechnicznyPrzeglady'];
		$vpelektrykaPrzeglady=$row['pelektrykaPrzeglady'];
		$vpogolnyPrzeglady=$row['pogolnyPrzeglady'];
		$vakominyPrzeglady=$row['akominyPrzeglady'];
		$vagazPrzeglady=$row['agazPrzeglady'];
		$vatechnicznyPrzeglady=$row['atechnicznyPrzeglady'];
		$vaelektrykaPrzeglady=$row['aelektrykaPrzeglady'];
		$vaogolnyPrzeglady=$row['aogolnyPrzeglady'];
		$vpracaRemonty=$row['pracaRemonty'];
		$vinfoDodatkowe=$row['infoDodatkowe'];
		$vwykonawcaRemonty=$row['wykonawcaRemonty'];
		$vstartRemonty=$row['startRemonty'];
		$vkoniecRemonty=$row['koniecRemonty'];
		$vuwagiRemonty=$row['uwagiRemonty'];
		$vsmieciStyczen=$row['smieciStyczen'];
		$vsmieciLuty=$row['smieciLuty'];
		$vsmieciMarzec=$row['smieciMarzec'];
		$vsmieciKwiecien=$row['smieciKwiecien'];
		$vsmieciMaj=$row['smieciMaj'];
		$vsmieciCzerwiec=$row['smieciCzerwiec'];
		$vsmieciLipiec=$row['smieciLipiec'];
		$vsmieciSierpien=$row['smieciSierpien'];
		$vsmieciWrzesien=$row['smieciWrzesien'];
		$vsmieciPazdziernik=$row['smieciPazdziernik'];
		$vsmieciListopad=$row['smieciListopad'];
		$vsmieciGrudzien=$row['smieciGrudzien'];
		$vterminPodzielniki=$row['terminPodzielniki'];
		$vterminLegalizacja=$row['terminLegalizacja'];
		$vuwagiLegalizacja=$row['uwagiLegalizacja'];
		$vwymianaBaterii=$row['wymianaBaterii'];
		$vuwagiWymianaBaterii=$row['uwagiWymianaBaterii'];
		$vzadluzenieBudynek=$row['zadluzenieBudynek'];
		$vfunduszBudynek=$row['funduszBudynek'];
		$vrokBudowy=$row['rokBudowy'];
		$vobrebBudynek=$row['obrebBudynek'];
		$vdzialkaBudynek=$row['dzialkaBudynek'];
		$vdzialkaPowierzchnia=$row['dzialkaPowierzchnia'];
		$vpowierzchniaWspolna=$row['powierzchniaWspolna'];
		$vpowierzchniaUdzial=$row['powierzchniaUdzial'];
		$vrzutBudynek=$row['rzutBudynek'];
		$vzdjecieBudynek=$row['zdjecieBudynek'];
		$vpracaRemonty1=$row['pracaRemonty1'];
		$vwykonawcaRemonty1=$row['wykonawcaRemonty1'];
		$vstartRemonty1=$row['startRemonty1'];
		$vkoniecRemonty1=$row['koniecRemonty1'];
		$vuwagiRemonty1=$row['uwagiRemonty1'];
		$vpracaRemonty2=$row['pracaRemonty2'];
		$vwykonawcaRemonty2=$row['wykonawcaRemonty2'];
		$vstartRemonty2=$row['startRemonty2'];
		$vkoniecRemonty2=$row['koniecRemonty2'];
		$vuwagiRemonty2=$row['uwagiRemonty2'];
		$vinfoOgolne=$row['infoOgolne'];

	}
?>
