<?php
session_start();
//if (!$_SESSION['logged']) {
//    exit(); //sistemare gestione sicurezza
//}
?>
<html>
    <head>
        <!-- CORE CSS-->

        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--tabs-->


    </head>
    <body onload="getCentriCosto()">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1">Test 1</a></li>
                    <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
                    <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
                    <li class="tab col s3"><a href="#test4">Test 4</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">Test 1</div>
            <div id="test2" class="col s12">Test 2</div>
            <div id="test3" class="col s12">Test 3</div>
            <div id="test4" class="col s12">Test 4</div>
        </div>
    </div>
    <div id="div_item_percorso">
        <p>spero papera di non vedere a lungo questo testo.</p>
    </div>
    <div id="div_item_percorso1">
        <p>spero di non vedere a lungo questo testo.</p>
    </div>

    <script src="../js/custom/mainUtils.js"></script>
    <script src="../js/bin/materialize.min.js"></script>
    <script src="../js/custom/select_percorso.js"></script>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/tabs.js"></script>
    <script> $(document).ready(function () {
            $('ul.tabs').tabs('select_tab', 'tab_id');
        });</script>
</body>


</html>
