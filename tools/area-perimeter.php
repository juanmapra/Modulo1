<div><h1>Calcular area y perimetro de figuras geometricas simples</h1></div>

<div>
    <h1>Cuadrado</h1>
    <form method="post">
        <input type="hidden" name="figura" value="cuadrado">
        <input type="text" name="base" placeholder="Ingrese el valor de uno de sus lados">
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Rectangulo</h1>
    <form method="post">
        <input type="hidden" name="figura" value="rectangulo">
        <input type="text" name="base" placeholder="Ingrese el valor de la base">
        <input type="text" name="altura" placeholder="Ingrese el valor de la altura">
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Triangulo</h1>
    <form method="post">
        <input type="hidden" name="figura" value="triangulo">
        <input type="text" name="lado_a" placeholder="Ingrese el valor del primer lado">
        <input type="text" name="lado_b" placeholder="Ingrese el valor del segundo lado">
        <input type="text" name="lado_c" placeholder="Ingrese el valor del tercer lado">
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Circulo</h1>
    <form method="post">
        <input type="hidden" name="figura" value="circulo">
        <input type="text" name="radio" placeholder="Ingrese el valor del radio">
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["figura"])) {
        $figura = $_POST["figura"];
        switch ($figura) {
            case 'cuadrado':
                $base = $_POST["base"];
                if (!empty($base)) {
                    $area = $base*$base;
                    $perimetro = $base*4;
                    echo "<p>El area de este cuadrado es de $area unindades cuadradas, y su perimetro es de $perimetro unidades.</p>";
                } else {
                    echo "<p>Por favor, ingrese un valor para realizar el calculo.</p>";
                }
                break;
            case 'rectangulo':
                $base = $_POST["base"];
                $altura = $_POST["altura"];
                if (!empty($base) && !empty($altura)) {
                    $area = $base*$altura;
                    $perimetro = ($base*2)+($altura*2);
                    echo "<p>El area de este rectangulo es de $area unidades cuadradas, y su perimetro es de $perimetro unidades.</p>";
                } else {
                    echo "<p>Por favor, ingrese ambos valores para realizar el calculo.</p>";
                }
                break;
            
                case 'triangulo':
                    $lado_a = $_POST["lado_a"];
                    $lado_b = $_POST["lado_b"];
                    $lado_c = $_POST["lado_c"];
                    if (!empty($lado_a) && !empty($lado_b) && !empty($lado_c)) {
                        $s = ($lado_a + $lado_b + $lado_c)/2;
                        $area = sqrt($s*($s-$lado_a)*($s-$lado_b)*($s-$lado_c));
                        $perimetro = $lado_a + $lado_b + $lado_c;
                        echo "<p>El area de este triangulo es de " . round($area, 2) . " unidades cuadradas, y su perimetro es de $perimetro unidades.</p>";
                    } else {
                        echo "<p>Por favor, ingrese los valores para realizar el calculo.</p>";
                    }
                    break;

                    case 'circulo':
                        $radio = $_POST["radio"];
                        if (!empty($radio)) {
                            $area = M_PI*pow($radio,2);
                            $perimetro = 2*M_PI*$radio;
                            echo "<p>El area de este circulo es de " . round($area,2) . " unidades cuadradas, y su perimetro es de " . round($perimetro,2) . " unidades.</p>";
                        } else {
                            echo "<p>Por favor, ingrese un valor para realizar el calculo.</p>";
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