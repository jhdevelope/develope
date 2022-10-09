<?php

   if(isset($_POST['submit']))
   {
       // print_r('Numero Do Pedido:' . $_POST['numero_pedido']);
       // print_r('<br>');
       // print_r('Nome:' . $_POST['nome']);
       // print_r('<br>'); 
       // print_r('telefone: ' . $_POST['telefone']);
       // print_r('<br>'); 
       // print_r('Forma De Pagamento: ' . $_POST['genero']);
       // print_r('<br>'); 
       // print_r('Data do Pedido: ' . $_POST['data_pedido']);
       // print_r('<br>'); 
       // print_r('Rua: ' . $_POST['rua']);
       // print_r('<br>'); 
       // print_r('Bairro: ' . $_POST['bairro']);
       // print_r('<br>'); 
       // print_r('Numero: ' . $_POST['numero']);
       // print_r('<br>'); 
       // print_r('Observação: ' . $_POST['observacao']);
       // print_r('<br>'); 
       // print_r('Materiais: ' . $_POST['materiais']);
       // print_r('<br>'); 
       // print_r('Valor: ' . $_POST['valor']);

       
     

   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>MOTA</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(9, 97, 168), rgb(9, 97, 168));
        }
        .box{ 
            color: white;
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 35%;
        }
        fieldset{
            border: 3px solid rgb(255, 120, 30);
        }
        legend{
            border: 1px solid rgb(255, 120, 30);
            padding: 10px;
            text-align: center;
            background-color: rgb(255, 120, 30);
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 80, 200), rgb(0, 80, 200));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 200), rgb(0, 80, 200));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST" >
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br><br>
                
                <label for="numero_pedido"><b>Número do Pedido:</b></label>
                <input type="number" name="numero_pedido" id="numero_pedido" required>
                 <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Do Cliente</label>
                </div>
               
                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Forma de pagamento:</p>
                <input type="radio" id="vista" name="genero" value="vista" required>
                <label for="vista">Á Vista</label>
                <br>
                <input type="radio" id="pix" name="genero" value="pix" required>
                <label for="pix">Pix</label>
                <br>
                <input type="radio" id="credito" name="genero" value="credito" required>
                <label for="credito">Crédito</label>
                <br>
                <input type="radio" id="debito" name="genero" value="debito" required>
                <label for="debito">Dédito</label>
                <br>
                <input type="radio" id="orcamento" name="genero" value="orcamento" required>
                <label for="orcamento">Orçamento</label>
                <br>
                <input type="radio" id="pedido" name="genero" value="pedido" required>
                <label for="pedido">Pedido</label>
                <br><br>
                <label for="data_pedido"><b>Data do Pedido:</b></label>
                <input type="date" name="data_pedido" id="data_pedido" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser" required>
                    <label for="rua" class="labelInput">Rua</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="numero" id="numero" class="inputUser" required>
                    <label for="numero" class="labelInput">Número</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="observacao" id="observacao" class="inputUser" required>
                    <label for="observacao" class="labelInput">Observação</label>
                    <br><br><br>
                <div class="inputBox">
                    <input type="text" name="materiais" id="materiais" class="inputUser" required>
                    <label for="materiais" class="labelInput">Materiais</label>
                    <br><br><br>
                <div class="inputBox">
                    <input type="text" name="valor" id="valor" class="inputUser" required>
                    <label for="valor" class="labelInput">Valor</label>
                    <br><br><br>
                <div class="inputBox">
                    <input type="text" name="vendedor" id="vendedor" class="inputUser" required>
                    <label for="vendedor" class="labelInput">Vendedor</label>
                    <br><br>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
