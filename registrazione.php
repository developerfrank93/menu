<?php
  include('config.php');

  $string_dsn = 'mysql:host=' . $HOST . ';dbname=' . $DATABASE . ';';
	$connection1 = new PDO($string_dsn, $USERNAME, $PASSWORD, $CHARSET);


  $QUERY1 = $connection1->exec("INSERT INTO utenti_registrati (username, password, email) VALUES ('" . $_POST['username'] . "', '"  . $_POST['password'] . "', '" . $_POST['email']. "')");

  echo 'Data uploaded correctly';

  $connection1 = null;
?>
