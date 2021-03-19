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
                    <input type="radio" name="tamanho" id="Grande" value="Grande" checked>
                    <label for="Grande">Grande</label>
                </div> 
                <div id="campo">
                    <input type="radio" name="tamanho" id="Media" value="Media">
                    <label for="Media">Média</label>
                </div>   
                <div id="campo"> 
                    <input type="radio" name="tamanho" id="Pequena" value="Pequena">
                    <label for="Pequena">Pequena</label>
                </div> 

                <div id="campo">
                    <label><strong>Opções de entrega</strong></label>
                    <div id="campo">
                        <input type="radio" name="entrega"id="Delivery" value="Delivery"> 
                        <label for="Delivery">Delivery</label>
                   </div>
                   <div id="campo">
                       <input type="radio" name="entrega"id="Retirar" value="Retirar"> 
                       <label for="Retirar">Retirar</label>
                   
                   
                       <input type="radio" name="entrega"id="Local" value="Local"> 
                       <label for="Local">Comer no Local</label>
                   </div> 
                
            </div>

         <fieldset class="grupo">
            <div id="campo">
                <label><strong>Qual forma de pagamento</strong></label>
                <select name="pagamento" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="cartao_credito">Cartão de crédito</option> 
                    <option value="dinheiro">Dinheiro</option>
                    <option value="cartao_debito">Débito</option>
                     <option value="vale_alimentacao">VA</option>
                    <option value="vale_refeicao">VR</option>
                </select>    
            </div>        
            
        </fieldset>
         


        
        <fieldset class="grupo">
            <div id="campo">
                <label><strong>Selecione os tipos de molhos desejado pelo cliente</strong></label><br>
                <input type="checkbox" id="catchup" name="catchup" value="Catchup">
                <label for="catchup">Catchup</label>
                <input type="checkbox" id="mostarda" name="mostarda" value="Mostarda">
                <label for="mostarda">Mostarda</label>
                <input type="checkbox" id="cheddar" name="cheddar" value="Cheddar">
                <label for="cheddar">Cheddar</label>
                <input type="checkbox" id="maionese" name="maionese" value="Maionese">
                <label for="maionese">Maionese</label>
                <input type="checkbox" id="catupiry" name="catupiry" value="Catupiry">
                <label for="catupiry">Catupiry</label>
                <input type="checkbox" id="barbecue" name="barbecue" value="Barbecue">
                <label for="barbecue">Barbecue</label>

            </div>
         </fieldset>

         <fieldset>
             <div id="campo">
                <label><strong>Selecione os complementos</strong></label><br>
                <input type="checkbox" id="bacon" name="bacon" value="Bacon">
                <label for="bacon">Bacon</label>
                <input type="checkbox" id="linguica" name="linguica" value="Linguiça">
                <label for="linguica">Linguiça</label>
                <input type="checkbox" id="queijo_parmesao" name="queijo_parmesao" value= "Queijo Parmesão">
                <label for="queijo_parmesao">Queijo Parmesão </label>
             </div>
         </fieldset>

        <fieldset class="grupo">
            <div id="campo">
                <label><strong>Qual tipo de Bebida</strong></label>
                <select name="bebida">
                    <option selected disabled value="">Selecione</option>
                    <option value="coca-cola">Coca-cola</option> 
                    <option value="fanta" >Fanta</option>
                    <option value="schwepps">Schweppes </option>
                    <option value="dell vale">Dell vale </option>
                    <option value= "dolly">Dolly </option>
                </select>    
            </div>         
        </fieldset>    
            
        
        <div>
            <button id="botão" type="submit">Realizar Pedido</button>
        </div>  

    </form>


    

</body>
</html>