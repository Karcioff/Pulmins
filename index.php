<?php
session_start(); // come sempre prima cosa, aprire la sessione 
include("connessione_db.php"); // includere la connessione al database
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <title>Login Page | Pulmins</title>

        <!-- CORE CSS-->

        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Custome CSS-->    
        <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- CSS style Horizontal Nav (Layout 03)-->    
        <link href="css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

    </head>

    <body class="yellow lighten-2">
        <!-- Start Page Loading -->
        <div id="loader-wrapper">
            <div id="loader"></div>        
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- End Page Loading -->


        
        <div id="login-page" class="row">
            <!--PANNELLO LOGIN-->
            <div class="col s12 m8 offset-m2 l4 offset-l4 z-depth-4 card-panel">
                <!--FORM-->
                <form class="login-form" method="post" action="login.php" data-ajax="false">
                    <!--HEADER-->
                    <div class="row">
                        <div class="input-field col s12 center">
                            <img src="images/pulmins_logo.png" alt="" class="circle responsive-img valign profile-image-login">
                            <p class="center login-form-text">PULMINS LOGIN</p>
                        </div>
                    </div>
                    <!--END HEADER-->
                    
                    <!--START USERNAME-->
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="username" name="username" type="text">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <!--END USERNAME-->
                    
                    <!--START PASSWORD-->
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="password" name="password" type="password">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <!--END PASSWORD-->
                    
                    <!--REMEMBER ME-->
                    <div class="row">          
                        <div class="input-field col s12 m12 l12  login-text">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Remember me</label>
                        </div>
                    </div>
                    
                    <!--BUTTON LOGIN-->
                    <div class="row">
                        <div class="col s12 m8 l4 offset-m4 offset-l8">
                             <button class="btn waves-effect waves-light horizontal" type="submit" name="action">Login</button>
                        </div>
                    </div>
                    
                    <!--ALTRO-->
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="registrazione_page.php">Registrati ora!</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="page-forgot-password.html">Password dimenticata?</a></p>
                        </div>          
                    </div>

                </form>
            </div>
        </div>
        <!--PANNELLO LOGIN-->



        <!-- ================================================
          Scripts
          ================================================ -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <!--materialize js-->
        <script type="text/javascript" src="js/materialize.js"></script>
        <!--prism-->
        <script type="text/javascript" src="js/prism.js"></script>

        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="js/plugins.js"></script>

    </body>
</html>