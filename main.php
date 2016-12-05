<?php
session_start();
include("connessione_db.php");
$percorsi;
?>
<html>
    <head>
    </head>
    <body onload="load('<?php echo $_SESSION['utente']?>')">
        <div id="div_percorsi">
            <select id="lista_percorsi" size="5">
                
            </select>
        </div>
        <script type="text/javascript" src="js/custom/prova.js"></script>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    </body>


</html>
