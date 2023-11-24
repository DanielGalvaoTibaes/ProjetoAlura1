<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 1px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $moeda = $valor;
        $nota5 = intdiv($valor, 5);
        $valor2 = $valor - $nota5 * 5;
        $nota10 = intdiv($nota5, 2);
        $nota5_2 = $nota5 - $nota10 * 2;
        $nota50 = intdiv($nota10, 5);
        $nota10_2 = $nota10 - $nota50 * 5;
        $nota100 = intdiv($nota50, 2);
        $nota50_2 = $nota50 - $nota100 * 2;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar?(R$)</label>
            <input type="text" name="valor" id="valor">
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php echo "<h2>Saque de R$ $valor realizado</h2>" ?>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="nota100_2.png" alt="nota de 100 reais" class="nota"> <?php echo ":$nota100";?></li>
            <br>
            <li><img src="nota50_2.png" alt="nota de 50 reais" class="nota"> <?php echo ": $nota50_2";?></li>
            <br>
            <li><img src="nota10_2.png" alt="nota de 10 reais" class="nota"> <?php echo ": $nota10_2";?></li>
            <br>
            <li><img src="nota5_2.png" alt="nota de 5 reais" class="nota"> <?php echo ": $nota5_2";?></li>
            <br>
            <li><img src="moeda1_2.png" alt="moeda de 1 real" class="nota"> <?php  echo ": $valor2";?></li>
        </ul>
    </section>
</body>
</html>