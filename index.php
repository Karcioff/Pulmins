<?php
session_start();// come sempre prima cosa, aprire la sessione 
include("connessione_db.php"); // includere la connessione al database
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" data-theme="a">
  <div data-role="header" data-theme="a">
    <h1>PULMINS</h1>
  </div>
<div align="center">
<a href="#registrazione" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all" >Registrati</a>
<div data-role="popup" id="registrazione" style="padding:10px 20px;">
	<h2>Registrazione</h2>   
	<form name="form_registration" method="post" action="registrazione.php" data-ajax="false">
		<label for="un" class="ui-hidden-accessible">Username:</label>
		<input type="text" name="username_reg" id="username_reg" placeholder="Username" data-theme="a">
		<label for="un" class="ui-hidden-accessible">Email:</label>
		<input type="text" name="email_reg" id="email_reg" placeholder="Email" data-theme="a">
		<label for="pw" class="ui-hidden-accessible">Password:</label>
        <input type="password" name="password_reg" id="password_reg" value="" placeholder="Password" data-theme="a">
		<button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Registrati</button>
	</form>
</div></br>
<a href="#loggati" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">Loggati</a>
<div data-role="popup" id="loggati" style="padding:10px 20px;">
	<h2>Log in</h2>
	<form name="form_login" method="post" action="login.php" data-ajax="false">
		<label for="un" class="ui-hidden-accessible">Username:</label>
		<input type="text" name="username" id="username" placeholder="Username" data-theme="a">
		<label for="pw" class="ui-hidden-accessible">Password:</label>
        <input type="password" name="password" id="password" value="" placeholder="Password" data-theme="a">
		<button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Accedi</button>
	</form>
</div>
</div>
</body>
</html>