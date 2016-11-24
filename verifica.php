<?php

session_start();
include("./connessione_db.php");
include("./config.php");

$username = mysql_real_escape_string($_POST['username']); //faccio l'escape dei caratteri dannosi
$password = mysql_real_escape_string(sha1($_POST['password'])); //sha1 cifra la password anche qui in questo modo corrisponde con quella del db

$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
$ris = mysql_query($query, $connessione) or die(mysql_error());
$riga = mysql_fetch_array($ris);

/* Prelevo l'identificativo dell'utente */
$cod = $riga['username'];

/* Effettuo il controllo */
if ($cod == NULL)
    $trovato = 0;
else
    $trovato = 1;

/* Username e password corrette */
if ($trovato === 1) {

    /* Registro la sessione */
    session_register('autorizzato');

    $_SESSION["autorizzato"] = 1; //AUMENTARE SICUREZZA
    
    /* Registro il codice dell'utente */
    $_SESSION['cod'] = $cod;

    /* Redirect alla pagina riservata */
    echo '<script language=javascript>document.location.href="privato.php"</script>';
} else {

    /* Username e password errati, redirect alla pagina di login */
    echo '<script language=javascript>document.location.href="http://stackoverflow.com/questions/25174183/warning-mysqli-connect-hy000-1045-access-denied-for-user-usernameloca"</script>';
}
?>
