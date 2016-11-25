<?php
session_start();
include("connessione_db.php");
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


        <div id="registrazione-page" class="row">
            <div class="col s12 m8 offset-m2 l4 offset-l4 z-depth-4 card-panel">
                <form class="login-form" method="post" action="registrazione.php" data-ajax="false">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <img src="images/pulmins_logo.png" alt="" class="circle responsive-img valign profile-image-login">
                            <p class="center login-form-text">PULMINS REGISTRAZIONE</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="username_reg" name="username_reg" type="text">
                            <label for="username_reg">Username</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="password_reg" name="password_reg" type="password">
                            <label for="password_reg">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m8 l6 offset-m4 offset-l6 right-align">
                            <button class="btn waves-effect waves-light" type="submit">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <!-- ================================================
          Scripts
          ================================================ -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bin/materialize.min.js"></script>
        <!--prism-->
        <script type="text/javascript" src="js/prism.js"></script>

        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
        <script type="text/javascript" src="js/plugins.js"></script>
    </body>

