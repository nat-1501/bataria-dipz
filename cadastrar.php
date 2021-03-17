<?php //  exit (print_r ($_POST));
include_once "Conexao.php";

try   {

    $nome = filter_var($_POST['nome']);
    $sobrenome = filter_var($_POST['sobrenome']);
    $tamanho = filter_var($_POST['tamanho']);
    $entrega = filter_var($_POST['entrega']);
    $pagamento = filter_var($_POST['pagamento']);
     // ajustar $molhos = filter_var($_POST['molhos']);
    //tbm  $complementos = filter_var($_POST['complementos']);
     $bebida = filter_var($_POST['bebida']);


    $insert = $conectar->prepare('INSERT INTO pedidos (nome, sobrenome, entrega, tamanho)
    VALUES (:nome, :sobrenome, :entrega, :tamanho)');
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':sobrenome', $sobrenome);
    $insert->bindParam(':entrega', $entrega);
    $insert->bindParam(':tamanho', $tamanho);

   // $insert->bindParam(':pagamento', $pagamento);
     // $insert->bindParam(':molhos', $molhos); 
     // $insert->bindParam(':complementos', $complementos);
    // $insert->bindParam(':bebida', $bebida); 
    // exit (print_r ($insert));
    $insert->execute(); 

    // header("location: formCadastro.php");
    echo 'cadastrado com sucesso';



}  catch (PDOException $e) {

  
    echo 'Erro: ' . $e->getMessage();

}

?>