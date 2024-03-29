<div>
    <h1>Calcular potencia</h1>
    <form method="post">
        <input type="hidden" name="operacion" value="potencia">
        <input type="number" name="base" placeholder="Ingrese el número base">
        <input type="number" name="exponente" placeholder="Ingrese el exponente">
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Calcular raíz</h1>
    <form method="post">
        <input type="hidden" name="operacion" value="raiz">
        <input type="number" name="numero" placeholder="Ingrese el número">
        <input type="number" name="indice" placeholder="Ingrese el índice">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["operacion"])) {
        $operacion = $_POST["operacion"];
        switch ($operacion) {
            case 'potencia':
                $base = $_POST["base"];
                $exponente = $_POST["exponente"];
                if (!empty($base) && !empty($exponente)) {
                    $resultado = pow($base, $exponente);
                    echo "<p>El resultado de $base elevado a la potencia de $exponente es: $resultado</p>";
                } else {
                    echo "<p>Por favor, ingrese ambos valores para calcular la potencia.</p>";
                }
                break;
            case 'raiz':
                $numero = $_POST["numero"];
                $indice = $_POST["indice"];
                if (!empty($numero) && !empty($indice)) {
                    $resultado = pow($numero, 1/$indice);
                    echo "<p>La raíz $indice-ésima de $numero es: $resultado</p>";
                } else {
                    echo "<p>Por favor, ingrese ambos valores para calcular la raíz.</p>";
                }
                break;
            default:
                echo "<p>Operación no válida.</p>";
                break;
        }
    } else {
        echo "<p>Seleccione una operación.</p>";
    }
}
?>