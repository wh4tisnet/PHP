<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2) {
        echo "El número $num1 es mayor que el número $num2.";
    } elseif ($num1 < $num2) {
        echo "El número $num2 es mayor que el número $num1.";
    } else {
        echo "Los números $num1 y $num2 son iguales.";
    }
}
?>
