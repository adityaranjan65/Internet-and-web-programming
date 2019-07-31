<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database </title>
<meta content="noindex, nofollow" name="robots">
<style>
.maindiv {
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-size:14px;
font-family:'Droid Serif',serif
}
.title {
width:100%;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center;
font-family:'Droid Serif',serif
}
.divA {
width:70%;
float:left;
margin-top:30px
}
.form {
width:400px;
float:left;
background-color:#fff;
font-family:'Droid Serif',serif;
padding-left:30px
}
.divB {
width:100%;
height:100%;
background-color:#fff;
border:dashed 1px #999
}
.divD {
width:200px;
height:480px;
padding:0 20px;
float:left;
background-color:#f0f8ff;
border-right:dashed 1px #999
}
p {
text-align:center;
font-weight:700;
color:#5678C0;
font-size:18px;
text-shadow:2px 2px 2px #cfcfcf
}
.form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
a {
text-decoration:none;
font-size:16px;
margin:2px 0 0 30px;
padding:3px;
color:#1F8DD6
}
a:hover {
text-shadow:2px 2px 2px #cfcfcf;
font-size:18px
}
.clear {
clear:both
}
span {
font-weight:700
}
</style>
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "","registered_users"); // Establishing Connection with Server
$db = mysql_select_db("registered_users", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from registered_users", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"readphp.php?id={$row['user_name']}\">{$row['user_name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from registered_users where userName=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Username</span> <?php echo $row1['userName']; ?>
<span>Firstname</span> <?php echo $row1['firstName']; ?>
<span>Lastname</span> <?php echo $row1['lastName']; ?>
<span>E-mail:</span> <?php echo $row1['userEmail']; ?>
<span>gender:</span> <?php echo $row1['gender']; ?>

</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>