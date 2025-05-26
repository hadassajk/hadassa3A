<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comparador de Combustível</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #fef9e7, #e8f5e9);
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #2e7d32;
            margin-bottom: 20px;
        }

        form {
            background: #ffffff;
            padding: 25px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-left: 8px solid #2e7d32;
            animation: slideIn 0.6s ease;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #145a32;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #f1c40f;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d4ac0d;
        }

        .resultado {
            margin-top: 25px;
            padding: 20px;
            background-color: #e8f5e9;
            border-left: 6px solid #2e7d32;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.6s ease;
        }

        .resultado p {
            margin: 8px 0;
            font-size: 16px;
        }

        .resultado strong {
            color: #1e8449;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(10px);}
            to {opacity: 1; transform: translateY(0);}
        }

        @keyframes slideIn {
            from {opacity: 0; transform: translateX(-30px);}
            to {opacity: 1; transform: translateX(0);}
        }
    </style>
</head>
<body>

    <h2><i class="fas fa-gas-pump"></i> Comparador de Combustível</h2>

    <form method="post">
        <label for="etanol"><i class="fas fa-leaf"></i> Preço do Etanol (R$):</label>
        <input type="number" name="etanol" step="0.01" required>

        <label for="gasolina"><i class="fas fa-burn"></i> Preço da Gasolina (R$):</label>
        <input type="number" name="gasolina" step="0.01" required>

        <input type="submit" value="Calcular Vantagem">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $etanol = floatval($_POST['etanol']);
        $gasolina = floatval($_POST['gasolina']);
        $limite = $gasolina * 0.7;

        echo "<div class='resultado'>";
        echo "<p><i class='fas fa-calculator'></i> 70% da gasolina: <strong>R$ " . number_format($limite, 2, ',', '.') . "</strong></p>";
        echo "<p><i class='fas fa-leaf'></i> Preço do etanol: <strong>R$ " . number_format($etanol, 2, ',', '.') . "</strong></p>";

        if ($etanol < $limite) {
            echo "<p><strong><i class='fas fa-thumbs-up'></i> Melhor opção: Etanol!</strong></p>";
        } else {
            echo "<p><strong><i class='fas fa-thumbs-up'></i> Melhor opção: Gasolina!</strong></p>";
        }

        echo "</div>";
    }
    ?>

</body>
</html>
