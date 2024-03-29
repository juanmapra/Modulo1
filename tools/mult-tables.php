<div>
    <h1>Tablas de multiplicacion</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if(!empty($numero)){
        for ($i = 1; $i <= 20;){
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado</p>";
            $i++;
        }
    } else {
        echo "<p>Por favor, ingrese un numero</p>";
    }
}
?>