<!DOCTYPE html>
<html lang="pt-br">
<div class="titulo">Cadastro Cliente</div>
    <form method="POST">

        Nome: <input font-size="30px" type="text" name="nome" style="font-size: 16px" placeholder="Digite o Nome" autofocus required="required">
        Sobrenome: <input font-size="30px" type="text" name="sobrenome" style="font-size: 16px" size="50" placeholder="Digite o Sobrenome" required="required"><br>
        CPF: <input type="number" name="cpf" style="font-size: 16px" placeholder="XXX.XXX.XXX-XX" required="required" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}">
        CEP: <input type="number" name="cep" style="font-size: 16px" placeholder="XXXXX-XXX" required="required" pattern="[0-9]{5}-[0-9]{3}"><br>
        Endereço: <input type="text" name="endereco" style="font-size: 16px" size="50" placeholder="Digite o Endereço" required="required">
        Telefone: <input type="tel" name="telefone" style="font-size: 16px" placeholder="XX-XXXXX-XXXX" required="required" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"><br>
        E-Mail: <input type="email" name="email" style="font-size: 16px" size="30" placeholder="Digite o E-mail" required="required"><br>
        <input class="btn btn-success btn-lg float-right" type="submit" name="submit" value="Gravar" required="required">
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

            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, cpf, cep, endereco, telefone, email) 
                VALUES ('$nome', '$sobrenome', '$cpf', '$cep', '$endereco', '$telefone', '$email')");
            echo "<br>";
            echo "Dados salvo com sucesso!";
        }

    ?>
</body>
