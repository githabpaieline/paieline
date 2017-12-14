<?php
// Ici vous pouvez vérifier les droits de l'utilisateur, par exemple grâce aux sessions
// Utilisez la fonction de votre choix
if($this->userRejected())
{
    // Envoi du Json vide
    echo '{}';
}

// Si tout va bien
else
{
    // Toujours la même méthode qui varie sans doute chez vous pour récupérer le dossier des images
    // Moi j'ai toujours ma méthode
    $img_folder = $this->getImgFolder();

    // Si mon dossier n'existe pas, je le crée
    // Parce que oui il peut s'agir d'un nouvel article, contrairement aux previews...
    if(!is_dir('/dossier_images/'.$img_folder))
    {
        mkdir('/dossier_images/'.$img_folder);
    }

    // Déclaration des valeurs de retour
    $paths = $previews = [];

    // Boucle des fichiers envoyés
    // Rappelez vous, mon input s'appelle images
    for($i = 0; $i < count($_FILES['images']['name']); $i++)
    {
        // On place ici le contrôle qu'on souhaite dessus.
        // Je ne détaille pas, vous faites ce que vous voulez
        // Donc si l'image passe les contrôles
        if( $this->checkError($_FILES['images']['error'][$i]) && $this->checkSize($_FILES['images']['size'][$i]) && $this->checkExt($_FILES['images']['name'][$i]) )
        {
            // On renomme l'image avec un id unique et son extension
            // Là encore vous vous nommez comme vous voulez, moi je fais comme ça
            $file_ext = strtolower(substr(strrchr($_FILES['images']['name'][$i],'.'),1));
            $file_name = str_replace('.','',uniqid('',true)).'.'.$file_ext;

            // On déplace l'image où on veut sur le serveur
            // Si tout se passe bien on continue
            if( move_uploaded_file($_FILES['images']['tmp_name'][$i],'/dossier_images/'.$img_folder.'/'.$file_name) )
            {
                // Ici on peut faire un traitement supplémentaire du genre redimensionnement si nécessaire

                // On arrive à la construction du tableau de retour

                $key = $file_name; // ici la key est le nouveau nom du fichier
                $url = "/ajax_del.php?id=$key"; // même url de suppression que tout à l'heure

                // Comme tout à l'heure, on ajoute un bouton pour copier le nom de l'image
                $paths[$i] = '<button data-clipboard-text="[img]'.$key.'[/img]" class="btn btn-default" type="button" id="copy-button" data-toggle="tooltip" data-placement="button" title="Copier"> Copier</button>';
                
                // Suivi de l'image en elle-même et de son chemin
                $paths[$i] .= '<br /><img id="'.$key.'" class="file-preview-image" src="/dossier_images/'.$img_folder.'/'.$key.'">';
                
                // Enfin, les paramètres de preview, avec notamment l'url de suppression
                $previews[$i] = ['caption' => "$key", 'url' => $url, 'key' => $i+1];
            }
        }
    }

    // Fin de la boucle for, on peut maintenant envoyer le Json
    // Si aucune image envoyée n'a passé vos contrôles, le tableau sera vide
    echo json_encode([
        'initialPreview' => $paths, 
        'initialPreviewConfig' => $previews,   
        'append' => true // modification des preview
    ]);
}
?>
