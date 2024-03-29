<?php include('header.php'); ?>

<article>
        <nav class="nav-tools">
            <ul>
                <li><a href="tools.php?tool=calculator">Calculadora básica</a></li>
                <li><a href="tools.php?tool=divisor">Divisores</a></li>
                <li><a href="tools.php?tool=prime">Números primos</a></li>
                <li><a href="tools.php?tool=factoring">Factorización</a></li>
                <li><a href="tools.php?tool=pair-odd">Pares e impares</a></li>
                <li><a href="tools.php?tool=mult-tables">Tablas de multiplicar</a></li>
                <li><a href="tools.php?tool=unit-conv">Convertidor de unidades</a></li>
                <li><a href="tools.php?tool=area-perimeter">Área y perímetro</a></li>
                <li><a href="tools.php?tool=factorial">Factorial</a></li>
                <li><a href="tools.php?tool=series">Series numéricas</a></li>
                <li><a href="tools.php?tool=power-root">Potencias y raices</a></li>
            </ul>
        </nav>

        <?php
        if (isset ($_GET['tool'])){
            switch ($_GET['tool']){
                case 'calculator':
                    include('tools/calculator.php');
                    break;
                case 'divisor':
                    include('tools/divisor.php');
                    break;
                case 'prime':
                    include('tools/prime.php');
                    break;
                case 'factoring':
                    include('tools/factoring.php');
                    break;
                case 'pair-odd':
                    include('tools/pair-odd.php');
                    break;
                case 'mult-tables':
                    include('tools/mult-tables.php');
                    break;
                case 'unit-conv':
                    include('tools/unit-conv.php');
                    break;
                case 'area-perimeter':
                    include('tools/area-perimeter.php');
                    break;
                case 'factorial':
                    include('tools/factorial.php');
                    break;
                case 'series':
                    include('tools/series.php');
                    break;
                case 'power-root':
                    include('tools/power-root.php');
                    break;
                default:
                    echo "Selecciona una herramienta";
                    break;
                }
            } ?>
</article>

<?php include('footer.php'); ?>