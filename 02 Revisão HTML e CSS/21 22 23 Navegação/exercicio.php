<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/styles.css">
    <title>Exercício</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <!-- Obtém o diretório do arquivo e o arquivo através de
            queries passadas na URL. Posteriormente, com o "include"
            é carregada a página solicitada -->
            <?php
                $dir = $_GET['dir'];
                $file = $_GET['file'];
                include("{$dir}/{$file}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS - <?= date("Y") ?>
    </footer>
</body>
</html>