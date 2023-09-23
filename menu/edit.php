<?php     
    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome'];
                $cpf = $user_data['cpf'];
                $cep = $user_data['cep'];
                $endereco = $user_data['endereco'];
                $telefone = $user_data['telefone'];
                $email = $user_data['email'];
            }
        }
        else
        {
            header('Location: principal.php');
        }
    }    
?>


<!DOCTYPE html>
<html lang="pt-br">
<div class="titulo">Editar Cliente</div>
    <form method="POST">

        Nome: <input font-size="30px" type="text" name="nome" style="font-size: 16px" placeholder="Digite o Nome" value="<?php echo $nome?>" autofocus>
        Sobrenome: <input font-size="30px" type="text" name="sobrenome" style="font-size: 16px" size="50"  value="<?php echo $sobrenome?>"><br>
        CPF: <input type="number" name="cpf" style="font-size: 16px"  value="<?php echo $cpf?>">
        CEP: <input type="number" name="cep" style="font-size: 16px"  value="<?php echo $cep?>"><br>
        Endereço: <input type="text" name="endereco" style="font-size: 16px" size="50"  value="<?php echo $endereco?>">
        Telefone: <input type="tel" name="telefone" style="font-size: 16px" pattern="[0-9]{2}[0-9]{5}-[0-9]{4}" value="<?php echo $telefone?>"><br>
        E-Mail: <input type="email" name="email" style="font-size: 16px" size="30"  value="<?php echo $email?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input class="btn btn-success btn-lg float-right" type="submit" name="submit" id="submit" value="Gravar">
    </form>
 
    <?php 

        if(isset($_POST['submit']))
        {
            include_once('config.php');
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $cpf = $_POST['cpf'];
            $cep = $_POST['cep'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $sqlUpdate = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', cpf='$cpf', cep='$cep', endereco='$endereco', telefone='$telefone', email='$email' WHERE id='$id'";

            $result = $conexao->query($sqlUpdate);

            header('Location: principal.php');         
        }
        
    ?>
</body>
