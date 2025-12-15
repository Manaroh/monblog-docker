<?php require
'Modele.php'; 
try {
    $billets = getBillets();
     require 'vueAccueil.php';
} catch (Exception $e) {
    require 'vueErreur.php';
}
?>