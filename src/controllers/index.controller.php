<?php

require_once __DIR__ . "/../../configs/database.php";

try {
$sql = "SELECT * FROM article ORDER BY published_at DESC LIMIT 12";
$stmt = $db->query($sql);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);


require __DIR__ . "/../views/index.view.php";

} catch (PDOException $e) {
  echo "Erreur PDO : " . $e->getMessage();
  exit; 
}