<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);

        if ($num1 > $num2) {
            echo "<p>El número major és: $num1</p>";
        } elseif ($num1 < $num2) {
            echo "<p>El número major és: $num2</p>";
        } else {
            echo "<p>Els dos números són iguals.</p>";
        }
    }
?>
