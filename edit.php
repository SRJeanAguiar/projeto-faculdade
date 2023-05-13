<?php
    if(!empty($_GET['id']))
    {
      
        include_once('config.php');
        
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM produtos WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $quantidade = $user_data['quantidade'];
                $categoria = $user_data['categoria'];
                $data = $user_data['data'];
               

            }

        }
        else
        {
            header('Location:cadastro.php');
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
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
        #update{
            background-image: linear-gradient(to right, rgb(255, 255, 255),rgb(0, 217, 255));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            
        }
        #update:hover{
            background-image: linear-gradient(to right, rgb(255, 255, 255),rgb(20, 142, 163));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome ?> required>
                    <label for="nome" class="labelInput">Nome do Produto</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" value=<?php echo $quantidade ?> required>
                    <label for="nome" class="labelInput">Quantidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="categoria" id="categoria" class="inputUser" value=<?php echo $categoria ?> required>
                    <label for="nome" class="labelInput">Categoria</label>
                </div>
                <br><br>
                <label for="data_vencimento"><b>Data Vencimento:</b></label>
                <input type="date" name="data_vencimento" id="data_vencimento" value=<?php echo $data ?> required>                
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update" value="Alterar">
            </fieldset>
        </form>
    </div>
</body>
</html>