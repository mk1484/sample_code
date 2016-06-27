<?php

define('DB_DATABASE','news_db');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('PDO_DSN','mysql:dbhost=localhost;=' .DB_DATABASE);

try {
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
