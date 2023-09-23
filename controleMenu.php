<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/estilo.css">
    <link rel="stylesheet" href="assets/CSS/exercicio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
    <title>Contrutora Duck</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Construtora Duck</h1>
    </header>
    <main class="principal">
       <nav class="navegacao">
            <a href="principal.php" class="vermelho" font-size="26px">Voltar</a>
        </nav>
        <div class="conteudo">
           <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}");
           ?>
        </div>
    </main>
    <footer class="rodape">
        ALUNOS UNIMAR © <?= date('Y'); ?>
    </footer>
</body>
</html>