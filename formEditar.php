<?php

include_once "Conexao.php";

 $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 $query=$conectar->prepare("SELECT * FROM PEDIDOS where id = :id");
$query->bindParam(':id', $id);

$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
 


                




?>