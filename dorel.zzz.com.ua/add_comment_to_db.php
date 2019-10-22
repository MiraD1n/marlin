<?php
  require_once('connect_db.php');
  $username = $_POST['name'];
  $date = date("Y-m-j");
  echo $date;
  $text = $_POST['text'];
  $query = "INSERT INTO `coments` (`id`, `username`, `date`, `post`) VALUES (NULL, '$username', '$date', '$text')";
  $insert = $pdo->query($query);
  header('Location: /index.php')
?>
