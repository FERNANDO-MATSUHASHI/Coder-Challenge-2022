<?php
include_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div class="titulo">Pesquisa</div>
        <form method="POST" action="">

            <input size="100px" type="text" name="busca" style="font-size: 16px" value="<?php if(isset($_POST['busca'] )) echo $_POST['busca']?>"
                placeholder="Digite os termos da pesquisa" autofocus>
            <input class="btn btn-success btn-lg float-right" type="submit" value="Pesquisar">

        </form>
        <br>
    <table width="1250px" border="1">
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>CPF</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th><center>...</center></th>
        </tr>

        <?php
        if(isset($_POST['submit'])){
            ?>
            <tr>
                <td colspan="7">Digite algo para pesquisar...</td>
            </tr>
        <?php
        
        }else{
            $pesquisa = isset($_POST['busca'])?$_POST['busca']:"";
            $sql_code = "SELECT * 
                FROM usuarios 
                WHERE nome LIKE '%$pesquisa%'
                OR sobrenome LIKE '%$pesquisa%'
                OR cpf LIKE '%$pesquisa%'
                OR cep LIKE '%$pesquisa%'
                OR endereco LIKE '%$pesquisa%'
                OR telefone LIKE '%$pesquisa%'
                OR email LIKE '%$pesquisa%'";

            $consulta = mysqli_query($conexao, $sql_code);

            if ($consulta->num_rows == 0){
                ?>
                <tr>
                    <td colspan="7">Nenhum resultado encontrado...</td>
                </tr>
                <?php
            }else{
                while ($dados = $consulta->fetch_array()){
                    
                    echo "<tr>";
                    echo "<td>".$dados['nome']."</td>";
                    echo "<td>".$dados['sobrenome']."</td>";
                    echo "<td>".$dados['cpf']."</td>";
                    echo "<td>".$dados['cep']."</td>";
                    echo "<td>".$dados['endereco']."</td>";
                    echo "<td>".$dados['telefone']."</td>";
                    echo "<td>".$dados['email']."</td>";
                    echo "<td><center> <a class='btn btn-sm btn-primary' href='controleMenu.php?dir=menu&file=edit.php&id=$dados[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a>";
                    echo "      ";
                    echo "<a class='btn btn-sm btn-danger' href='controleMenu.php?dir=menu&file=delete.php&id=$dados[id]'> 
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                          </svg>
                          </a></center>";
                }
            }
        }
        ?>
    </table>
</body>
