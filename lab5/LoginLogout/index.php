<?php
ob_start();
session_start();

require_once ("functions.php");

if (checkLoggedin())
	echo "<H1>You are already logged in as $_SESSION[gdusername] - <A href = \"login.php?do=logout\">logout</A></h1>";
else
	echo "<H1>You are not logged in - <A href = \"login.php\">login</A></h1></h1>";