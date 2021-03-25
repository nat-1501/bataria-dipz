<?php

include_once "Conexao.php";

 $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 $consulta = $conectar->query("SELECT * FROM PEDIDOS where id = '$id'");




?>