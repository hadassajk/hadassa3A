<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fdf6e3; /* fundo harmonioso com amarelo pastel */
            color: #333;
            text-align: center;
            padding: 50px;
        }

        h2 {
            color: #2c3e50;
            font-size: 32px;
            margin-bottom: 30px;
        }

        form {
            background: #fff8dc; /* amarelo pastel */
            padding: 30px 40px;
            display: inline-block;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            font-size: 18px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #4d4d4d;
        }

        input[type="number"] {
            padding: 10px;
            margin-top: 5px;
            width: 250px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #f1c40f;
            color: #333;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            margin-top: 25px;
        }

        input[type="submit"]:hover {
            background-color: #d4ac0d;
        }

        .resultado {
            margin-top: 30px;
            font-size: 20px;
            color: #2c3e50;
            background-color: #fff8dc;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }

        strong {
            color: #000;
        }
    </style>
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" step="0.1" required>

        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" step="0.01" required>

        <br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            $imcFormatado = number_format($imc, 2);

            echo "<div class='resultado'>";
            echo "<p><strong>Seu IMC é:</strong> $imcFormatado</p>";

            if ($imc < 18.5) {
                echo "<p>Classificação: <strong>Abaixo do peso</strong></p>";
            } elseif ($imc < 25) {
                echo "<p>Classificação: <strong>Peso normal</strong></p>";
            } elseif ($imc < 30) {
                echo "<p>Classificação: <strong>Sobrepeso</strong></p>";
            } elseif ($imc < 35) {
                echo "<p>Classificação: <strong>Obesidade grau 1</strong></p>";
            } elseif ($imc < 40) {
                echo "<p>Classificação: <strong>Obesidade grau 2</strong></p>";
            } else {
                echo "<p>Classificação: <strong>Obesidade grau 3 (mórbida)</strong></p>";
            }

            echo "</div>";
        }
    }
    ?>
</body>
</html>
