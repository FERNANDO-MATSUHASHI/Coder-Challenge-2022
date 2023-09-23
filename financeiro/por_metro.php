<!DOCTYPE html>
<html lang="pt-br">
<style>
    input.largerCheckbox {
        width: 20px;
        height: 20px;
    }
</style>
<div class="titulo">Cálculo por M²</div>
    <form method="post">

        Valor por m² R$: <input font-size="30px" type="number" name="valor_m" style="font-size: 16px" placeholder="Digite o Valor" autofocus><br>
        Quantidade de m² da obra: <input font-size="30px" type="number" name="qnd_m" style="font-size: 16px" placeholder="Digite M² totais"><br>
        Quantidade de funcionários: <input type="number" name="qnd_func" style="font-size: 16px" placeholder="Digite Quantidade de Funcionários"><br>
        <input type = "radio" for="casa1" class="largerCheckbox" id = "terreo" name = "casa" value="Terreo" checked>Térreo    
        <input type = "radio" for="casa2" class="largerCheckbox" id = "sobrado" name = "casa" value="Sobrado">Sobrado<br>
        <button class="btn btn-success btn-lg float-right" type="submit">Calcular</button>

    </form>
 
    <?php 

        function apresenta($valor, $mes, $dia){
            echo "<br>";
            echo "<h3>A obra terá o valor de R$", number_format($valor, 2); 
            echo "<br>";
            echo "<h3>A obra levará ", number_format($mes, 0), " meses</h3>";
            echo "<br>";
            echo "<h3>A obra levará {$dia} dias</h3>";
        }

        function calculo($valor_m, $qnd_m, $qnd_func, $casa){
            $funcionario = 4;
            $metros = 150;
            $dias = 240;
            $resultado = ($dias * $funcionario) / $metros;
            $valor_obra = $valor_m * $qnd_m;

            $calculo = ($resultado * $qnd_m) / $qnd_func;
            
            if ($casa == "Sobrado"){
                $calculo = (($resultado * $qnd_m) / $qnd_func) * 1.3;
                $valor_obra = ($valor_m * $qnd_m) * 1.2;
            
            }
            $meses = ($calculo / 30);
            $dias = ($calculo % 30);
            apresenta($valor_obra, $meses, $dias);
        }
            
        if (isset($_POST['valor_m'])){
            if ($_POST["valor_m"] != "" && $_POST["qnd_m"] != "" && $_POST["qnd_func"] != ""){
                echo "<br>";
                echo "Valor por m²: R$ ", number_format($_POST["valor_m"], 2), "<br>";
                echo "Quantidade total de: ", $_POST["qnd_m"], "m²", "<br>";
                echo "Quantidade de funcionários para à obra: ", $_POST["qnd_func"], "<br>";
                echo "A obra será ", $_POST["casa"], "<br>";
                
                if ($_POST["valor_m"] <= 0){
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "O valor por m² deve ser maior que R$0,00!";
                }elseif ($_POST["qnd_m"] <= 0){
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "A metragem da obra deve ser maior que 0!";
                }elseif ($_POST["qnd_func"] <= 0){
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "O número de funcionário deverá ser maior que 0!";
                }else{
                    echo "<br>";
                    echo "<br>";
                    echo calculo($_POST["valor_m"], $_POST["qnd_m"], $_POST["qnd_func"], $_POST["casa"]);
                    echo "<br>";
                }
            }else{
                echo "<br>";
                echo "Digite alguma coisa!";
            }
        }
    ?>
</body>
