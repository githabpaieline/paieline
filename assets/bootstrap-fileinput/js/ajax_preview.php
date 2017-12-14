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
    // On définit le nom du dossier des images
    // Moi j'ai ma méthode
    $img_folder = $this->getImgFolder();

    // Mais si vous transmettez en get l'id de la news,
    // qui devrait permettre de récupérer le dossier d'images pour cette news,
    // vous pouvez faire ça directement :
    $id = (int) $_GET['id']; // Vérifications supplémentaires conseillées
    $img_folder = '/dossier_images/'.$id;


    // Selon le fonctionnement de votre site, vous pouvez aussi avoir besoin de faire appel à la bdd
    // pour retrouver le nom de toutes vos images.
    $folder_content = $this->checkBDD($id);

    // Voici comment je procède pour récupérer mes images
    // Perso je ne passe pas par la bdd

    // Si mon dossier existe
    if(is_dir('/dossier_images/'.$img_folder))
    {
        // On le scanne
        $folder_content = scandir('/dossier_images/'.$img_folder);

        // Notre tableau contient . et .. en 1ers éléments, plus nos images trouvées

        // Donc on dégage les deux entrées directory
        unset($folder_content[0]);
        unset($folder_content[1]);

        // Si après ça notre tableau n'est pas vide
        if(!empty($folder_content))
        {
            // On définit les futurs tableaux $paths et $previews à renvoyer
            $paths = [];
            $previews = [];

            // Pour chacune des images
            foreach($image_list as $key => $image)
            {
                // On remplit les deux tableaux

                // Paths représente les images et leur chemin.
                // Ici j'insère un bouton par-dessus mes images pour pouvoir copier leur nom plus tard, à l'aide d'un autre plugin. Je vous explique tout ça après.
                $paths[] = '<button data-clipboard-text="[img]'.$image.'[/img]" class="btn btn-default" type="button" id="copy-button" data-toggle="tooltip" data-placement="button" title="Copier"> Copier</button><br /><img id="'.$image.'" class="file-preview-image" src="/dossier_images/'.$img_folder.'/'.$image.'">';
                
                // Previews est là pour gérer le footer des images, en particulier le lien de suppression de celles-ci
                // Notez que cette fois, la suppression des images se fera via un GET, on n'a pas tellement le choix.
                // Il faudra bien sûr faire des contrôles utilisateur dans ajax_del.php
                $previews[] = ([
                    'caption' => $image, 
                    'url' => '/ajax_del.php?id='.$image,
                    'key' => $key
                ]);

                // Il suffit maintenant de renvoyer le tout sous forme de tableau Json
                echo json_encode([
                    'paths' => $paths,
                    'previews' => $previews 
                ]);
            }
        }

        // Si le tableau est vide, pas d'images à preview
        else
        {
            // Envoi du Json vide
            echo '{}';
        }
    }
}
?>