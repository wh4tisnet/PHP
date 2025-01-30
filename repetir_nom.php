<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $vegades = intval($_POST['vegades']);

        if ($vegades > 0) {
            echo "<p>Nom repetit $vegades vegades:</p>";
            for ($i = 0; $i < $vegades; $i++) {
                echo "<p>$nom</p>";
            }
        } else {
            echo "<p>El número de vegades ha de ser major que 0.</p>";
        }
    } else {
        echo "<p>No s'han enviat dades correctament.</p>";
    }
?>
