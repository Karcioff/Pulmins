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
        <title>Registrazione | Pulmins</title>

        <!-- CORE CSS-->

        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

    </head>

    <body class="yellow lighten-2">


        <div id="registrazione-page" class="row">
            <div class="col s12 m10 offset-m1 l8 offset-l2 z-depth-4 card-panel">
                <form class="login-form" id="form" method="post" action="registrazione.php" novalidate="novalidate">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <img src="images/pulmins_logo.png" alt="" class="circle responsive-img valign profile-image-login"
                                 width="150" height="150">
                            <p class="center login-form-text">PULMINS REGISTRAZIONE</p>
                            <p>Inserisci i tuoi dati per accedere al servizio</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6 left">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="username_reg" name="username_reg" type="text" 
                                   class="validate">
                            <label for="username_reg">Username</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12 l6 left">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="password_reg" name="password_reg" type="password" class="validate">
                            <label for="password_reg">Password</label>
                        </div>
                        <br>
                        <p><i>*Si consiglia di inserire una password sicura ed affidabile</i></p>                            
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12 l6 left">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="conferma_psw" name="conferma_psw" type="password" class="validate">
                            <label for="conferma_psw">Conferma password</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12 left">
                            <i class="material-icons prefix">email</i>
                            <input id="mail_reg" name="mail_reg" type="email">
                            <label for="mail_reg">Indirizzo mail</label>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12 l6 left">
                            <select name="societa">
                                <option value="" disabled selected>Seleziona la società</option>
                                <?php
                                //fetch nurse name
                                $query = "SELECT societa FROM societa;";

                                $result = $connect->query($query) or die(mysql_error()); //note: use mysql_error() for development only
                                //print results
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value=\"' . $row['societa'] . '\">' . $row['societa'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-field col s12 l6 right">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="password_societa" name="password_societa" type="password">
                            <label for="password_societa">Password società</label>
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
    </div>



    <!-- ================================================
      Scripts
      ================================================ -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/validate.js"></script>
    <!--inizializza la tendina-->
    <script> $(document).ready(function () {
            $('select').material_select();
        });</script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
</body>

