<?php
// Comme d'hab, check des droits de l'utilisateur
if($this->userRejected())
{
    // Envoi du Json vide
    echo '{}';
}

// Si tout va bien
else
{
    // Comme d'hab, j'ai ma méthode pour récupérer le folder
    $img_folder = $this->getImgFolder();

    // Ici on récupère le nom de l'image à supprimer via l'id en GET
    $file_name = $request->getData('id');

    // Ou plus communément
    $file_name = $_GET['id']; // contrôles supplémentaires conseillés

    // Si l'image existe
    if(file_exists('/dossier_images/'.$img_folder.'/'.$file_name))
    {
        // On efface l'image
        unlink('/dossier_images/'.$img_folder.'/'.$file_name);
    }

    // Envoi du Json vide, rien à renvoyer ici
    echo '{}';
}
?>