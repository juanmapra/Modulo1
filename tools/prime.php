<div>
    <h1>Verificacion de numeros primos</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if(!empty($numero)){
        if ($numero <= 1) {
            echo "<p>Ingrese un numero mayor a 1.</p>";
        } else {
            $es_primo = true;
            for ($i = 2; $i <= $numero / 2; $i++) {
                if ($numero % $i == 0) {
                    $es_primo = false;
                    break;
                }
            }
            if ($es_primo) {
                echo "<p>El numero $numero es primo.</p>";
            } else {
                echo "<p>El numero $numero no es primo.</p>";
            }
        }
    } else {
        echo "<p>Por favor, ingrese un numero</p>";
    }
}
?>
