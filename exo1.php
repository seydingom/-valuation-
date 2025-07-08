<?php
// Année de naissance 
$anneeNaissance = 1990; 

// Fonction pour calculer l'âge
function calculerAge($annee) {
    return 2025 - $annee;
}

//  résultat
$age = calculerAge($anneeNaissance);
echo "En 2025, vous aurez $age ans.";
?>
