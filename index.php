<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Meu Projeto PHP!</h1>
        <p>Data e hora atual: <?php echo date('d/m/Y H:i:s'); ?></p>
        
        <?php
        // Exemplo de código PHP
        $nome = "Visitante";
        if(isset($_GET['nome'])) {
            $nome = htmlspecialchars($_GET['nome']);
        }
        ?>
        
        <div class="welcome">
            <h2>Olé', <?php echo $nome; ?>!</h2>
        </div>
        
        <form method="GET" action="">
            <input type="text" name="nome" placeholder="Digite seu nome">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>