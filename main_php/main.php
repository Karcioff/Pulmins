<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Pulmins, al tuo servizio</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <style>
        .fermata {
            -webkit-column-count: 2;
            column-count: 2;
            -webkit-column-gap: 40px; 
            column-gap: 40px;
        }
    </style>
    <body>


        <nav class="white" role="navigation">	
            <div class="nav-wrapper container">

                <a id="logo-container" href="#" class="brand-logo">Pulmins</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Esci</a></li>
                </ul>

                <ul id="esci" class="side-nav">
                    <li><a href="#">Esci</a></li>
                </ul>
                <a href="#" data-activates="accedi" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row ">
                    <div class="col s12">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab col s3 "><a href="#tab1" class="blue-text text-darken-4">Test 1</a></li>
                            <li class="tab col s3"><a href="#tab2" class="active blue-text text-darken-4">Test 2</a></li>
                            <li class="tab col s3"><a href="#tab3" class="blue-text text-darken-4">Test 4</a></li>
                        </ul>
                    </div>
                    <div id="tab1" class="col s12">
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Murad</div>
                                <div class="fermata collapsible-body">
                                    Qui ci sono due colonne	
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Gino pasticcino</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>San Pietroburgo</div>
                                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab2" class="col s12">Test 2</div>
                    <div id="tab3" class="col s12">Test 4</div>
                </div>
            </div>
        </div>

        <footer class="page-footer blue darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s2">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>

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