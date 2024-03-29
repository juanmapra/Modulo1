<div>
    <h1>Divisores</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Ingrese un número">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if(!empty($numero)){
        if ($numero <= 1){
            echo "<p>Ingrese un numero mayor a 1.</p>";
        } else {
            $valor_ini = $numero;
            $resultado = "";
            for($i = 2; $i <= $numero / 2; $i++){
                if ($numero % $i == 0){
                    if($resultado == ""){
                        $resultado = $resultado . $i;
                    } else {
                        $resultado = $resultado . ", " . $i;
                    }
            }
        }
        echo "Los divisores de $valor_ini son $resultado.";
    }
    }else{
        echo "<p>Por favor, ingrese un numero</p>";
    }
}
?>