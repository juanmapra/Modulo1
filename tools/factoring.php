<div>
    <h1>Factorizacion de un numero.</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if(!empty($numero)){
        $numero_ini = $numero;
        if ($numero <= 1) {
            echo "<p>Ingrese un numero mayor a 1.</p>";
        } else {
            $resultado = "";
            for ($i = 2; $numero > 1;){
                if ($numero%$i == 0){
                    $numero = $numero/$i;
                    if($resultado == ""){
                        $resultado = $i;
                    } else {
                        $resultado = $resultado . " x " . $i;
                    }
                } else {
                    $i++;
                }
            }
            echo "<p>La factorizacion de $numero_ini es $resultado</p>";
        }
    } else {
        echo "<p>Por favor, ingrese un numero</p>";
    }
}
?>
