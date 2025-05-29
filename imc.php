<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IMC Simples</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>

    <from method= "post">
        peso (kg): <input type="number" name="peso" 
        step="0.1" required><br><br>
        altura (m): <input type="number" name="altura"
        step="0.01" required><br><br>
        <input type="submit" value="Calcular IMC">
    </from>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST['altura'];
    }
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<p>Seu IMC é: . <strong>" . number_format
            (num: $imc, decimals: 2) . "</strong></p>";
        }
            if ($imc < 18.5) {
              echo "<p>Classificação: Abaixo do peso</p>";
              } elseif ($imc < 25) {
                echo "<p>Classificação: Peso normal</p>";
              } elseif ($imc < 30) {
                echo "<p>Classificação: Sobrepeso</p>";
              } else {
                

            }
    

        
    


    