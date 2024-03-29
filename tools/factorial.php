<div>
    <h1>Factorial de un numero</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    function factorial($n){
        if ($n == 0){
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    if(!empty($numero)){
        $resultado = factorial($numero);
        }
        echo "<p>El resultado del factorial de $numero es $resultado.</p>";
    }else{
        echo "<p>Por favor, ingrese un numero</p>";
    }
?>