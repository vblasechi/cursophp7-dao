<?php 

$conn = new PDO("pgsql:dbname=postgres;host=localhost", "postgres", "1234");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();

echo "Delete OK!";

 ?>