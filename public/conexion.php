<?php
//Servidor local y base de datos a usar
$link= 'mysql:host=localhost;dbname=og_laravel';
//usuario
$usuario= 'root';
//password
$pass = '';
//$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
try {
  $pdo = new PDO($link, $usuario, $pass);
    //foreach($pdo->query('SELECT * from carta') as $fila) {
       //print_r($fila);
       //print "<br>";
   //}
   //$pdo = null;
   //echo "Conectado";
} catch (PDOException $e) {
   print "¡Error!: " . $e->getMessage() . "<br/>";
   die();
}

//////$link= mysql_connect("localhost","root","");
//////if ($link){
//////	mysql_select_db("og_laravel",$link);
//////}