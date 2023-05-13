<?php
    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $categoria = $_POST['categoria'];
        $data = $_POST['data_vencimento'];

        $result = mysqli_query($conexao, "INSERT INTO produtos
        VALUES ('','$nome','$quantidade','$categoria','$data')");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(255, 255, 255),rgb(0, 217, 255));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            padding: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid rgb(0, 217, 255);
        }
        legend{
            border: 1px solid rgb(0, 217, 255) ;
            padding: 10px;
            text-align: center;
            background-color: rgb(0, 217, 255);
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
            color:white;
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
        #data_vencimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(255, 255, 255),rgb(0, 217, 255));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(255, 255, 255),rgb(20, 142, 163));
        }

    </style>
</head>
<body>

    <a href = "home.php"> <button class="btn btn-primary"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
                </a>
                </button> 

    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="nome" class="labelInput">Quantidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="categoria" id="categoria" class="inputUser" required>
                    <label for="nome" class="labelInput">Categoria</label>
                </div>
                <br><br>
                <label for="data_vencimento"><b>Data Vencimento:</b></label>
                <input type="date" name="data_vencimento" id="data_vencimento" required>                
                <br><br>
                <input type="submit" name="submit" id="submit" value="Inserir">
            </fieldset>
        </form>
    </div>
</body>
</html>