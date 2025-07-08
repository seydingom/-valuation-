<?php
$motDePasse = "MotDePasse123";

// Vérifications
$longueurValide = strlen($motDePasse) >= 8;
$contientChiffre = preg_match('/\d/', $motDePasse);
$contientMajuscule = preg_match('/[A-Z]/', $motDePasse);

// Conditions
if ($longueurValide && $contientChiffre && $contientMajuscule) {
    echo "✅ Mot de passe valide !";
} else {
    echo "❌ Mot de passe invalide. Vérifiez les critères suivants :\n";
    if (!$longueurValide) {
        echo "- Le mot de passe doit contenir au moins 8 caractères.\n";
    }
    

?>
