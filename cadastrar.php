<?php //  exit (print_r ($_POST));
include_once "Conexao.php";

try   {

    $nome = filter_var($_POST['nome']);
    $sobrenome = filter_var($_POST['sobrenome']);
    $tamanho = filter_var($_POST['tamanho']);
    $entrega = filter_var($_POST['entrega']);
    $pagamento = filter_var($_POST['pagamento']);
    $catchup = filter_var($_POST['catchup']);
    $mostarda = filter_var($_POST['mostarda']);
    $barbecue = filter_var($_POST['barbecue']);
    $cheddar = filter_var($_POST['cheddar']);
    $catupiry = filter_var($_POST['catupiry']);
    $maionese = filter_var($_POST['maionese']);
    $bacon = filter_var($_POST['bacon']);
    $linguica = filter_var($_POST['linguica']);
    $queijo_parmesao = filter_var($_POST['queijo_parmesao']);
    $bebida = filter_var($_POST['bebida']);


    $insert = $conectar->prepare('INSERT INTO pedidos (nome, sobrenome, entrega, tamanho, entrega, pagamento, catchup, mostarda, barbecue, cheddar, catupiry, maionese, bacon, linguica, queijo_parmesao, bebida)
    VALUES (:nome, :sobrenome, :entrega, :tamanho, :pagamento, :catchup, :mostarda, :barbecue, :cheddar, :catupiry, :maionese, :bacon, :linguica, :queijo_parmesao, :bebida)');
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':sobrenome', $sobrenome);
    $insert->bindParam(':entrega', $entrega);
    $insert->bindParam(':tamanho', $tamanho);
    $insert->bindParam(':pagamento', $pagamento);
    $insert->bindParam(':catchup', $catchup); 
    $insert->bindParam(':mostarda', $mostarda);
    $insert->bindParam(':barbecue', $barbecue);
    $insert->bindParam(':cheddar', $cheddar);
    $insert->bindParam(':catupiry', $catupiry);
    $insert->bindParam(':maionese', $maionese);
    $insert->bindParam(':bacon', $bacon);
    $insert->bindParam(':linguica', $linguica);
    $insert->bindParam(':queijo_parmesao', $queijo_parmesao);
    $insert->bindParam(':bebida', $bebida); 
     exit (print_r ($insert));
    $insert->execute(); 

     header("location: formCadastro.php");
    echo 'cadastrado com sucesso';



}  catch (PDOException $e) {

  
    echo 'Erro: ' . $e->getMessage();

}

?>