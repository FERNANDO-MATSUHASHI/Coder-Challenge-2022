<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Construtora Duck</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Construtora Duck</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <a href="index.php"><button class="btn btn-success btn-lg float-right">Sair</button></a>
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>Menu</h3>
                    <ul>
                        <li>
                            <a href="controleMenu.php?dir=menu&file=cadastro.php">
                                Cadastro
                            </a>
                        </li>
                        <li>
                            <a href="controleMenu.php?dir=menu&file=pesquisa.php">
                                Pesquisa
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Financeiro</h3>
                    <ul>
                        <li>
                            <a href="controleMenu.php?dir=financeiro&file=calcular.php">
                                Calcular Orçamento
                            </a>
                        </li>
                        <li>
                            <a href="controleMenu.php?dir=financeiro&file=faturamento.php">
                                Faturamento
                            </a>
                        </li>
                        <li>
                            <a href="controleMenu.php?dir=financeiro&file=ranking.php">
                                Ranking de participação por projeto
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        ALUNOS UNIMAR © <?= date('Y'); ?>
    </footer>
</body>
</html>