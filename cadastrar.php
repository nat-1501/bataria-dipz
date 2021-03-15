<?php  exit (print_r ($_POST));
include_once "Conexao.php";

try   {

    $nome = filter_var($_POST['nome']);
    $sobrenome = filter_var($_POST['sobrenome']);
    $tamanho = filter_var($_POST['tamanho']);
    $entrega = filter_var($_POST['entrega']);
    $pagamento = filter_var($_POST['pagamento']);
    $molhos = filter_var($_POST['molhos']);
    $complementos = filter_var($_POST['complementos']);
    $bebida = filter_var($_POST['bebida']);




    


    $insert = $conectar->prepare("INSERT INTO pedidos (name, sobrenome, tamanho, entrega, pagamento, molhos, complementos, bebida) 
    VALUES (:nome, :sobrenome, :tamanho, :entrega, :pagamento, :molhos, :complementos, :bebida);
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':sobrenome', $sobrenome);
    $insert->bindParam(':entrega', $entrega);
    $insert->bindParam(':pagamento', $pagamento);
    $insert->bindParam(':molhos', $molhos);
    $insert->bindParam(':complementos', $complementos);
    $insert->bindParam(':bebida', $bebida);
    $insert->execute(); 

    header("location: formCadastro.php");
    echo 'cadastrado com sucesso';



}  catch (PDOException $e) {

  
    echo 'Erro: ' . $e->getMessage();

}

?>