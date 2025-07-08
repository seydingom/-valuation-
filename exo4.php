<?php
function calculer($a, $b, $operateur) {
    switch ($operateur) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            } else {
                return $a / $b;
            }
        default:
            return "Erreur : opérateur non valide";
    }
}

// afficher
echo calculer(10, 5, '+');  
echo "\n";
echo calculer(10, 0, '/');  
?>
