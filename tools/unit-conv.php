<div>
    <h1>Conversor de unidades</h1>
</div>

<div>
    <h1>Longitud</h1>
    <form method="post">
        <input type="hidden" name="tipo" value="longitud">
        <select name="convertir_de" id="">
            <option value="" disabled selected>Tipo de unidad</option>
            <option value="cm">Centimetros</option>
            <option value="inch">Pulgadas</option>
            <option value="ft">Pies</option>
        </select>
        <input type="number" name="value" placeholder="Ingrese el valor que desea convertir" step="0.01">
        <select name="convertir_a" id="">
            <option value="" disabled selected>Convertir a</option>
            <option value="cm">Centimetros</option>
            <option value="inch">Pulgadas</option>
            <option value="ft">Pies</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Volumen</h1>
    <form method="post">
        <input type="hidden" name="tipo" value="volumen">
        <select name="convertir_de" id="">
            <option value="" disabled selected>Tipo de unidad</option>
            <option value="ml">Mililitro</option>
            <option value="gal">Galon</option>
            <option value="floz">Onza liquida</option>
        </select>
        <input type="number" name="value" placeholder="Ingrese el valor que desea convertir" step="0.01">
        <select name="convertir_a" id="">
            <option value="" disabled selected>Convertir a</option>
            <option value="ml">Mililitro</option>
            <option value="gal">Galon</option>
            <option value="floz">Onza liquida</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Masa</h1>
    <form method="post">
        <input type="hidden" name="tipo" value="masa">
        <select name="convertir_de" id="">
            <option value="" disabled selected>Tipo de unidad</option>
            <option value="g">Gramo</option>
            <option value="lb">Libra</option>
            <option value="oz">Onza</option>
        </select>
        <input type="number" name="value" placeholder="Ingrese el valor que desea convertir" step="0.01">
        <select name="convertir_a" id="">
            <option value="" disabled selected>Convertir a</option>
            <option value="g">Gramo</option>
            <option value="lb">Libra</option>
            <option value="oz">Onza</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>

<div>
    <h1>Temperatura</h1>
    <form method="post">
        <input type="hidden" name="tipo" value="temp">
        <select name="convertir_de" id="">
            <option value="" disabled selected>Tipo de unidad</option>
            <option value="cel">Celsius</option>
            <option value="fah">Fahrenheit</option>
            <option value="kel">Kelvin</option>
        </select>
        <input type="number" name="value" placeholder="Ingrese el valor que desea convertir" step="0.01">
        <select name="convertir_a" id="">
            <option value="" disabled selected>Convertir a</option>
            <option value="cel">Celsius</option>
            <option value="fah">Fahrenheit</option>
            <option value="kel">Kelvin</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tipo"])) {
        $operacion = $_POST["tipo"];
        switch ($operacion){
            case "longitud":
                $value = $_POST["value"];
                $convertir_de = $_POST["convertir_de"];
                $convertir_a = $_POST["convertir_a"];
                switch($convertir_a){
                    case "cm":
                        if ($convertir_de == "inch"){
                            $resultado = $value * 2.54;
                            echo "<p>$value pulgadas es igual a " . round($resultado,2) . " centimetros.</p>";
                        } elseif ($convertir_de == "ft"){
                            $resultado = $value * 30.48;
                            echo "<p>$value pies es igual a " . round($resultado,2) . " centimetros.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "inch":
                        if ($convertir_de == "cm"){
                            $resultado = $value / 2.54;
                            echo "<p>$value centimetros es igual a " . round($resultado,2) . " pulgadas.</p>";
                        } elseif ($convertir_de == "ft"){
                            $resultado = $value * 12;
                            echo "<p>$value pies es igual a " . round($resultado,2) . " pulgadas.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "ft":
                        if ($convertir_de == "cm"){
                            $resultado = $value / 30.48;
                            echo "<p>$value centimetros es igual a " . round($resultado,2) . " pies.</p>";
                        } elseif ($convertir_de == "inch"){
                            $resultado = $value / 12;
                            echo "<p>$value pulgadas es igual a " . round($resultado,2) . " pies.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    default:
                        echo "<p>Selecciona una unidad a convertir.</p>";
                        break;
                }
            break;
            case "volumen":
                $value = $_POST["value"];
                $convertir_de = $_POST["convertir_de"];
                $convertir_a = $_POST["convertir_a"];
                switch($convertir_a){
                    case "ml":
                        if ($convertir_de == "gal"){
                            $resultado = $value * 3785.41;
                            echo "<p>$value galones es igual a " . round($resultado,2) . " mililitros.</p>";
                        } elseif ($convertir_de == "floz") {
                            $resultado = $value * 29.574;
                            echo "<p>$value onzas liquidas es igual a " . round($resultado,2) . " mililitros.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "gal":
                        if ($convertir_de == "ml"){
                            $resultado = $value / 3785.41;
                            echo "<p>$value mililitros es igual a " . round($resultado,2) . " galones.</p>";
                        } elseif ($convertir_de == "floz") {
                            $resultado = $value / 128;
                            echo "<p>$value onzas liquidas es igual a " . round($resultado,2) . " galones.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "floz":
                        if ($convertir_de == "ml"){
                            $resultado = $value / 29.574;
                            echo "<p>$value mililitros es igual a " . round($resultado,2) . " onzas liquidas.</p>";
                        } elseif ($convertir_de == "gal") {
                            $resultado = $value * 128;
                            echo "<p>$value galones es igual a " . round($resultado,2) . " onzas liquidas.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    default:
                        echo "<p>Selecciona una unidad a convertir.</p>";
                        break;
                }
            break;
            case "masa":
                $value = $_POST["value"];
                $convertir_de = $_POST["convertir_de"];
                $convertir_a = $_POST["convertir_a"];
                switch($convertir_a){
                    case "g":
                        if ($convertir_de == "lb"){
                            $resultado = $value * 453.6;
                            echo "<p>$value libras es igual a " . round($resultado,2) . " gramos.</p>";
                        } elseif ($convertir_de == "oz"){
                            $resultado = $value * 28.35;
                            echo "<p>$value onzas es igual a " . round($resultado,2) . " gramos.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "lb":
                        if ($convertir_de == "g"){
                            $resultado = $value / 453.6;
                            echo "<p>$value gramos es igual a " . round($resultado,2) . " libras.</p>";
                        } elseif ($convertir_de == "oz"){
                            $resultado = $value / 16;
                            echo "<p>$value onzas es igual a " . round($resultado,2) . " libras.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "oz":
                        if ($convertir_de == "g"){
                            $resultado = $value / 28.35;
                            echo "<p>$value gramos es igual a " . round($resultado,2) . " onzas.</p>";
                        } elseif ($convertir_de == "lb"){
                            $resultado = $value * 16;
                            echo "<p>$value libras es igual a " . round($resultado,2) . " onzas.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    default:
                    echo "<p>Selecciona una unidad a convertir.</p>";
                    break;
                }
            break;
            case "temp":
                $value = $_POST["value"];
                $convertir_de = $_POST["convertir_de"];
                $convertir_a = $_POST["convertir_a"];
                switch($convertir_a){
                    case "cel":
                        if ($convertir_de == "fah"){
                            $resultado = ($value - 32) * (5/9);
                            echo "<p>$value ℉  es igual a " . round($resultado,2) . "℃.</p>";
                        } elseif ($convertir_de == "kel"){
                            $resultado = $value - 273.15;
                            echo "<p>$value K es igual a " . round($resultado,2) . "℃.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "fah":
                        if ($convertir_de == "cel"){
                            $resultado = ($value * (9/5)) + 32;
                            echo "<p>$value ℃ es igual a " . round($resultado,2) . "℉.</p>";
                        } elseif ($convertir_de == "kel"){
                            $resultado = ($value - 273.15) * (9/5) + 32;
                            echo "<p>$value K es igual a " . round($resultado,2) . "℉.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    case "kel":
                        if ($convertir_de == "cel"){
                            $resultado = $value + 273.15;
                            echo "<p>$value ℃ es igual a " . round($resultado,2) . "K.</p>";
                        } elseif ($convertir_de == "fah"){
                            $resultado = ($value - 32) * (5/9) + 273.15;
                            echo "<p>$value ℉ es igual a " . round($resultado,2) . "K.</p>";
                        } else {
                            echo "<p>Seleccione una opcion a convertir.</p>";
                            break;
                        }
                    break;
                    default:
                    echo "<p>Selecciona una unidad a convertir.</p>";
                    break;
            }
            break;
            default:
            echo "<p>Selecciona una unidad a convertir.</p>";
            break;
        }
    } else {
        echo "<p>Seleccione una operación.</p>";
    }
}
?>