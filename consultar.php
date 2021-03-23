<?php   // exit (print_r ($_POST));
include_once "Conexao.php";

try {
    
    $query = $conectar->prepare('SELECT * FROM pedidos');

    $query->execute();

     //retornando o resultado da consulta

    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

   // print_r($resultados);
} catch (PDOException $e) {
    echo 'Falha:' . $e->getMessage();
}
?>

<!DOCTYPE html/>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="FORMUARIOPEDIDOS.css">

    <title>Pedidos Batataria Dipz</title>
</head>

<body>

    <div>
        <h1 id="titulo">Consulta dos Pedidos</h1>
        <p id="subtitulo">Veja os pedidos realizados</p>
        <br>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Entrega</th>
                <th scope="col">Tamanho</th>
                <th scope="col">Pagamento</th>
                <th scope="col">Catchup</th>
                <th scope="col">Mostarda</th>
                <th scope="col">Barbecue</th>
                <th scope="col">Cheddar</th>
                <th scope="col">Catupiry</th>
                <th scope="col">Maionese</th>
                <th scope="col">Bacon</th>
                <th scope="col">Liguiça</th>
                <th scope="col">Queijo Parmesão</th>
                <th scope="col">Bebida</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
    
        if(count($resultados) > 0){  
           
            foreach($resultados as $result){
                ?>
                <tr>
                    <th scope="row"><?php echo $result['id'] ?></th>
                    <td><?php echo $result['nome'] ?></td>
                    <td><?php echo $result['sobrenome'] ?></td>
                    <td><?php echo $result['entrega'] ?></td>
                    <td><?php echo $result['tamanho'] ?></td>
                    <td><?php echo $result['pagamento'] ?></td>
                    <td><?php echo $result['catchup'] == 1 ?'Sim':'Não'; ?></td>
                    <td><?php echo $result['mostarda'] == 1 ?'Sim':'Não'; ?></td>
                    <td><?php echo $result['barbecue'] == 1 ?'Sim':'Não'; ?></td>
                    <td><?php echo $result['cheddar'] == 1 ?'Sim':'Não';?></td>
                    <td><?php echo $result['catupiry'] == 1 ?'Sim':'Não';?></td>
                    <td><?php echo $result['maionese'] == 1 ?'Sim':'Não';?></td>
                    <td><?php echo $result['bacon'] == 1 ?'Sim':'Não';?></td>
                    <td><?php echo $result['linguica'] == 1 ?'Sim':'Não'; ?></td>
                    <td><?php echo $result['queijo_parmesao'] == 1 ?'Sim':'Não'; ?></td>
                    <td><?php echo $result['bebida'] ?></td>
                    
                </tr>
                <?php
                }
                ?>

                <?php
                }
                ?>
                </tbody>
                
        
                
    </table>




</body>

</html>