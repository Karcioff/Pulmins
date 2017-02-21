<html>
    <head>
        <title>The Materialize Collapsible Example</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="../css/materialize.css">

    </head>
    <body>
        <div class="row">
            <div class="col s12 m6 l4" id="colonnaLista">
                <ul class="collapsible popout" id="listaAppalti" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First Section</div>
                        <div class="collapsible-body"><p>This is first section.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second Section</div>
                        <div class="collapsible-body"><p>This is second section.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third Section</div>
                        <div class="collapsible-body"><p>This is third section.</p></div>
                    </li>
                </ul>
            </div>
            <div class="col s12 m6 l8" id="panel">

            </div>
        </div>

        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>           
        <script src="../js/bin/materialize.min.js"></script>
        <script src="../js/custom/mainUtils.js"></script>
        <script>
            setListaAppalti(1);
        </script>
    </body>  
</html>