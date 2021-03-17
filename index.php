<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="FORMUARIOPEDIDOS.css">
    <title>Pedidos Batataria Dipz</title>
</head>
<body>

    <div>
        <h1 id="titulo">Cadastro dos Pedidos</h1>
        <p id="subtitulo">Complete as informaçoes do pedido do Cliente</p>
        <br>
    </div>

    <form action="cadastrar.php" method="post">
        <fieldset id="campo">
            <div>
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" required>
            </div>



            <div id="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
         </fieldset>  
         
         
            

            <div id="campo">
                <label><strong>Qual o tamanho da batata?</strong></label>
                <div id="campo">
                    <input type="radio" name="tamanho" id="G" value="Grande" checked>
                    <label for="G">Grande</label>
                </div> 
                <div id="campo">
                    <input type="radio" name="tamanho" id="M" value="Média">
                    <label for="M">Média</label>
                </div>   
                <div id="campo"> 
                    <input type="radio" name="tamanho" id="P" value="Pequena">
                    <label for="P">Pequena</label>
                </div> 

                <div id="campo">
                    <label><strong>Opções de entrega</strong></label>
                    <div id="campo">
                        <input type="radio" name="entrega"id="E" value="Deivery"> 
                        <label for="E">Delivery</label>
                   </div>
                   <div id="campo">
                       <input type="radio" name="entrega"id="R" value="Retirar"> 
                       <label for="R">Retirar</label>
                   
                   
                       <input type="radio" name="entrega"id="L" value="Local"> 
                       <label for="L">Comer no Local</label>
                   </div> 
                
            </div>

         <fieldset class="grupo">
            <div id="campo">
                <label><strong>Qual forma de pagamento</strong></label>
                <select id="pagamento">
                    <option selected disabled value="">Selecione</option>
                    <option>Cartão de crédito</option> 
                    <option>Dinheiro</option>
                    <option>VA</option>
                    <option>VR</option>
                </select>    
            </div>        
            
        </fieldset>
         


        
        <fieldset class="grupo">
            <div id="campo">
                <label><strong>Selecione os tipos de molhos desejado pelo cliente</strong></label><br>
                <input type="checkbox" id="molho1" name="molho1" value="Catchup">
                <label for="molho1">Catchup</label>
                <input type="checkbox" id="molho2" name="molho2" value="Mostarda">
                <label for="molho2">Mostarda</label>
                <input type="checkbox" id="molho3" name="molho3" value="Cheddar">
                <label for="molho3">Cheddar</label>
                <input type="checkbox" id="molho4" name="molho4" value="Maionese">
                <label for="molho4">Maionese</label>
                <input type="checkbox" id="molho5" name="molho5" value="Catupiry">
                <label for="molho5">Catupiry</label>
                <input type="checkbox" id="molho6" name="molho6" value="Barbecue">
                <label for="molho6">Barbecue</label>

            </div>
         </fieldset>

         <fieldset>
             <div id="campo">
                <label><strong>Selecione os complementos</strong></label><br>
                <input type="checkbox" id="complemento1" name="complemento1" value="Bacon">
                <label for="complemento1">Bacon</label>
                <input type="checkbox" id="complemento2" name="complemento2" value="Linguiça">
                <label for="complemento2">Linguiça</label>
                <input type="checkbox" id="complemento3" name="complemento3" value= "Queijo Parmesão">
                <label for="complemento3">Queijo Parmesão </label>
             </div>
         </fieldset>

        <fieldset class="grupo">
            <div id="campo">
                <label><strong>Qual tipo de Bebida</strong></label>
                <select id="bebida">
                    <option selected disabled value="">Selecione</option>
                    <option>Coca-cola</option> 
                    <option>Fanta</option>
                    <option>Schweppes </option>
                    <option>Dell vale </option>
                    <option>Dolly </option>
                </select>    
            </div>         
        </fieldset>    
            
        
        <div>
            <button id="botão" type="submit">Realizar Pedido</button>
        </div>  

    </form>


    

</body>
</html>