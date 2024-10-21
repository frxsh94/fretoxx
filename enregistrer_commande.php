<?php
// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php
// Récupérer les données POST envoyées depuis le formulaire
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$video_url = $_POST['video_url'];

// Format de la commande à enregistrer
$order = "Catégorie: $category, Quantité: $quantity, Prix: $price €, Lien: $video_url\n";

// Vérifier que les données ont bien été reçues
if ($category && $quantity && $price && $video_url) {
    // Enregistrer la commande dans le fichier commandes.txt
    file_put_contents('commandes.txt', $order, FILE_APPEND);
    echo "Commande enregistrée avec succès.";
} else {
    echo "Erreur : Données manquantes.";
}
?>