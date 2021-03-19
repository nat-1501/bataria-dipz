<?php   //  exit (print_r ($_POST));
include_once "Conexao.php";

try   {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $tamanho = $_POST['tamanho'];
    $entrega = $_POST['entrega'];
    $pagamento = $_POST['pagamento'];
    $catchup = isset($_POST['catchup'])  ?  true : false;
    $mostarda =  isset($_POST['mostarda']) ?  true : false;
    $barbecue = isset($_POST['barbecue']) ?  true : false;
    $cheddar = isset($_POST['cheddar']) ?  true : false;
    $catupiry = isset($_POST['catupiry']) ?  true : false;
    $maionese = isset($_POST['maionese']) ?  true : false;
    $bacon = isset($_POST['bacon'])? true : false;
    $linguica = isset( $_POST['linguica'])? true : false;
    $queijo_parmesao = isset( $_POST['queijo_parmesao'])? true : false;
    $bebida = $_POST['bebida'];


    $insert = $conectar->prepare('INSERT INTO pedidos (nome, sobrenome, entrega, tamanho, pagamento, catchup, mostarda, barbecue, cheddar, catupiry, maionese, bacon, linguica, queijo_parmesao, bebida)
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

    //  header("location: formCadastro.php");
    echo 'cadastrado com sucesso';



}  catch (PDOException $e) {

  
    echo 'Erro: ' . $e->getMessage();

}

?>