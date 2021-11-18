<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', 'Savakiran03', 'panelmieszkanca');

// connect to database

$sql = "SELECT * FROM budynek";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Downloads files
if (isset($_GET['idBudynek'])) {
    $id = $_GET['idBudynek'];

    // fetch file to download from database
    $sql = "SELECT * FROM budynek WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'download/' . $file['rzutBudynek'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('download/' . $file['rzutBudynek']));
        readfile('download/' . $file['rzutBudynek']);

        // Now update downloads count
        $newCount = $file['downloadd'] + 1;
        $updateQuery = "UPDATE files SET downloadd=$newCount WHERE idBudynek=$idBudynek";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>
