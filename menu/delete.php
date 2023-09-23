    <?php
        if(!empty($_GET['id']))
        {
            ?>
            <!DOCTYPE html>
            <html>
                <script>
                    let text = "Deseja excluir o item: " + $_GET['nome'] + " ?";

                    if (confirm(text) == true)
                    {
                        alert("O item " + $_GET['nome'] + " será excluído da lista!");
                        
                        <?php
                        include_once('config.php');

                        $id = $_GET['id'];

                        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

                        $result = $conexao->query($sqlSelect);

                        if($result->num_rows > 0)
                        {
                            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";

                            $resultDelete = $conexao->query($sqlDelete);
                        }
                        //header('Location: principal.php');
                    }
                    else
                    {
                        ?>
                        alert("Você desistiu de excluir o item " + $_GET['nome'] + " da lista!");
                        <?php
                    }
                    ?>
                </script>
            </html>
