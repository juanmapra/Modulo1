<div>
    <h1>Es este numero par o impar</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if(!empty($numero)){
        $resultado = $numero%2;
        if ($resultado == 0){
            echo "<p>El numero es par.</p>";
        } else {
            echo "<p>El numero es impar.</p>";
        }
    }else{
        echo "<p>Por favor, ingrese un numero</p>";
    }
}
?>