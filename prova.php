<?php
session_start();
$q = intval($_GET['q']);
include './connessione_db.php';
$query="SELECT * FROM percorso WHERE id_utente= $q";
$result=$connect->query($query) or die("caricamento percorsi non riuscito ". mysqli_error($connect));

echo '<select name=\"percorsi\" size=\"5\">';
while ($row = mysqli_fetch_array($result)) {
    echo '<option value=\"' . $row['id'] . '\">' . $row['nome'] . '</option>';
}
echo '</select>';
mysqli_close($connect);


