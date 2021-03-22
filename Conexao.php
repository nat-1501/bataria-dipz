 <?php

try  {
    //faz conexao com o banco de dados

      $conectar = new PDO ("mysql:host=localhost;port=3306;dbname=batata;", "root", "");

}  catch (PDOException $e) {

    echo 'Falha:' . $e->getMessage();
} 