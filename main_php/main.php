<html>
    <head>
        <title>The Materialize Collapsible Example</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="../css/materialize.css">

    </head>
    <body>
        <div class="row">
            <div class="col s12 m6 l4" id="colonnaLista">
                <ul class="collapsible popout" id="listaAppalti" data-collapsible="accordion">
                   
                </ul>
            </div>
            <div class="col s12 m6 l8" id="panel">

            </div>
        </div>

        <script src="../js/jquery-3.1.1.min.js"></script>           
        <script src="../js/bin/materialize.min.js"></script>
        <script src="../js/custom/mainUtils.js"></script>
        <script>
            $(document).ready(function () {
                setListaAppalti(1);               
            });
        </script>
    </body>  
</html>