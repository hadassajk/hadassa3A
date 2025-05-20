<?php
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $distancia = floatval($_POST["distancia"]);
    $combustivel = floatval($_POST["combustivel"]);

    if ($combustivel > 0) {
        $consumo = $distancia / $combustivel;
        $resultado = "<div style='margin-top: 20px; background-color: #fff0f7; padding: 15px; border-radius: 10px; text-align: center; font-size: 18px; color: #d63384;'>
            <strong>$nome</strong>, seu consumo médio foi de <strong>" . number_format($consumo, 2, ',', '.') . " km/l</strong>.
        </div>";
    } else {
        $resultado = "<div style='margin-top: 20px; color: red; text-align: center;'>O combustível gasto deve ser maior que zero.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Consumo</title>
</head>
<body>

<h1 style="color: #d63384; text-align: center;">Calculadora de Consumo de Combustível</h1>

<form method="post" style="background-color: #ffe9f3; padding: 20px; border-radius: 15px; max-width: 400px; margin: auto; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
    <label for="nome" style="display: block; margin-top: 10px; font-weight: bold;">Nome do Condutor:</label>
    <input type="text" id="nome" name="nome" required style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #d63384; font-size: 16px;">

    <label for="distancia" style="display: block; margin-top: 15px; font-weight: bold;">Distância Percorrida (km):</label>
    <input type="number" id="distancia" name="distancia" step="0.01" required style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #d63384; font-size: 16px;">

    <label for="combustivel" style="display: block; margin-top: 15px; font-weight: bold;">Combustível Gasto (litros):</label>
    <input type="number" id="combustivel" name="combustivel" step="0.01" required style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #d63384; font-size: 16px;">

    <input type="submit" value="Calcular" style="margin-top: 20px; padding: 12px; background-color: #ff69b4; color: white; font-weight: bold; border: none; border-radius: 10px; width: 100%; font-size: 16px; cursor: pointer;">
</form>

<div style="max-width: 700px; margin: auto;">
    <?php echo $resultado; ?>
</div>

</body>
</html>
