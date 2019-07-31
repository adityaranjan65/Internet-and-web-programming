</table>
</form>
</body>
<table border="2">
 <thead>
 <tr>
 <th>id</th>
 <th>username</th>
 <th>firstname</th>
 <th>lastname</th>
 <th>pass</th>
 <th>email</th>
 <th>gender</th>
 
 </tr>
 </thead>
 <tbody>
 <?php

$link = mysqli_connect("localhost", "root", "", "registered_users");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query="Select * from registered_users";
$result = mysqli_query($link, $query);

 while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
#printf ("%s (%s) %s\n", $row[0], $row[1],$row[2]);
echo"<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td>{$row[4]}</td><td>{$row[5]}</td><td>{$row[6]}</td></tr>\n";
 }

 ?>
 </tbody>
</table>