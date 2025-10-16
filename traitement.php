<?php
// Récupère les données envoyées
$nom = $_POST["nom"];
$message = $_POST["message"];

// Enregistre dans un fichier texte
$fichier = fopen("donnees.txt", "a");
fwrite($fichier, "Nom: $nom | Message: $message\n");
fclose($fichier);

echo "Données enregistrées avec succès !";
?>

