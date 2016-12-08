<?php
session_start();
//if (!$_SESSION['logged']) {
//    exit(); //sistemare gestione sicurezza
//}
?>
<html>
    <head>
    </head>
    <body onload="getCentriCosto()">
        <div id="div_percorsi">
            <select id="lista_percorsi" size="5">

            </select>
        </div>
        <div id="div_item_percorso">
            <p>spero papera di non vedere a lungo questo testo.</p>
        </div>
        <div id="div_item_percorso1">
            <p>spero di non vedere a lungo questo testo.</p>
        </div>

        <script src="../js/custom/mainUtils.js"></script>
        <script src="../js/custom/select_percorso.js"></script>
        <script src="../js/jquery-3.1.1.min.js"></script>
    </body>


</html>
