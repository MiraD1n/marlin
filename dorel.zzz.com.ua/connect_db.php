<?php
try {
  $pdo = new PDO ('mysql:host=127.0.0.1;dbname=dorel','dorel','Qq1234567',[PDO:ATTR_ERRMODE => PDO:ERRMODE_ECEPTION]);
  echo "OK"
}
catch (PDOExeption $e) {
  echo "Ошибка выполнения запроса: " . $e->getMessage();
}

?>
