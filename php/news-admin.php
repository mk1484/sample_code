<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
  <body>
    <table border="1">
    <tr>
    <th>id</th>
    <th>タイトル</th>
    <th>記事</th>
    <th>カテゴリー</th>
    <th>投稿日</th>
    <th>削除日</th>
    <th>予約日</th>
    <th>更新日</th>
    </tr>
<?php

define('DB_DATABASE','news_admin');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('PDO_DSN','mysql:dbhost=localhost;dbname=' .DB_DATABASE);

try {
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->query("select * from news");
  $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($news['0']['id']);
//var_dump($news);
//var_dump($news['id']);

foreach ($news as $value) {
  echo "<tr>";
  echo "<td>{$value['id']}</td>";
  echo "<td>{$value['title']}</td>";
  echo "<td>{$value['article']}</td>";
  echo "<td>{$value['category']}</td>";
  echo "<td>{$value['created_at']}</td>";
  echo "<td>{$value['deleted_at']}</td>";
  echo "<td>{$value['appointment_at']}</td>";
  echo "<td>{$value['updated_at']}</td>";
  echo "</tr>";
  //echo $value['article'] ."\n";
  //abcecho $value['categry'] ."\n";
  //echo $value['created_at'] ."\n";
  //echo $value['deleted_at'] ."\n";
  //echo $value['appointment_at'] ."\n";
  //echo $value['updated_at'] ."\n";
}
echo "</table>";

echo $stmt->rowCount() . "records found.";

} catch (PDOException $e) {
    echo $e->getMessage();
  exit;
}
?>

aaaaa
</body>
</html>
