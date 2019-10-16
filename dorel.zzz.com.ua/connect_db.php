<?php
try {
  $pdo = new PDO ('mysql:host=localhost;dbname=dorel','dorel','Qq1234567','');
  echo "connection OK";
}
catch (PDOExeption $e) {
  echo "Невозможно соеденится";
}
?>
