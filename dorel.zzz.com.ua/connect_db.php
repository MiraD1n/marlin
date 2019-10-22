<?php

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=dorel','dorel','Qq1234567');
}
catch (PDOExeption $e) {
  echo "Невозможно соеденится";
}

?>
