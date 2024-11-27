<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $cognom = htmlspecialchars($_POST['cognom']);
        $format = $_POST['format'];
        if ($format == "concatenat") {
            echo "<p>Nom complet: $nom $cognom</p>";
        } elseif ($format == "taula") {
            echo "<table border='1'>
                    <tr>
                        <td><strong>Nom</strong></td>
                        <td><strong>Cognoms</strong></td>
                    </tr>
                    <tr>
                        <td>$nom</td>
                        <td>$cognom</td>
                    </tr>
                  </table>";
        }
    } else {
        echo "<p>No s'han enviat dades correctament.</p>";
    }
?>