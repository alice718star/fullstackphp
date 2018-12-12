<?php 
$n = $_POST['name'];
$e = $_POST['email'];
$u = $_POST['user'];
$p = $_POST['pw'];

echo $n . "<br>" .
    $e . "<br>" .
    $u . "<br>" .
    $p . "<br>";

//to connect to local db, put localhost, but put IP address for external db. localhost means sql db on this local server.
$cnt = mysqli_connect('localhost', 'root', 'root', 'dec 18');
//here root is user id and root is user name

//here we are saying into this specific table this specific columns, insert name column with values for example
$qry = "insert into d18user (name) values ('$n');";
//semicolon inside for sql statement and semicolon outside for php statement.

//stitches the two together, insert data
mysqli_query($cnt, $qry);

//log out. if you leave connection open, vulnerable to hacking
mysqli_close($cnt);

?>