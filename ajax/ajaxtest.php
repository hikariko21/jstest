<?php
//$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
//'ginzo', 'Wert3333-');

$pdo=new PDO('mysql:host=localhost;dbname=mh_shop;charset=utf8','muto_hiroko','Asdf3333-');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // PDOのエラーモードを追加してください


$sql = 'select * from product where id ='. $_POST['shohin_id'];
$stmt = $pdo->query($sql);
$p = '';
foreach ( $stmt as $row) {
  $p .= $row['id']. ':';
  $p .= $row['name']. ':';
  $p .= $row['price'];
}
echo json_encode($p);