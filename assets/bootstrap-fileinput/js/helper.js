// File input d'images multiples
$(document).ready(function() {

    // Fonction pour déterminer le paths et le previews, puis charger le plugin
    function paths_preview_loader() {

        // Si on est sur la page d'édition/création d'articles
        // Note : vous pouvez utiliser des regex avec top.location.pathname.match('regex')
        if(top.location.pathname == '/index.php')
        {
            // On récupère les images existantes de l'article en Json
            $.getJSON( "/ajax_preview.php", function() {
            })

            // Une fois que c'est fait
            .done(function(data) {
                // On appelle images_loader pour charger le plugin avec les bons arguments
                images_loader(data.paths,data.previews);
            });
        }

        // Sinon
        else
        {
            // On appelle images_loader pour charger le plugin sans les arguments
            images_loader('','');
        }
    }

    // Fonction pour charger le plugin en fonction de paths et previews
    // Si les arguments sont vides, pas de preview
    function images_loader(paths,previews) {

        // On retrouve notre id #krajee-images
        // Le plugin modifiera notre champ grâce à cet id
        $("#krajee-images").fileinput({
            language: 'fr', // utilise le js de traduction
            uploadAsync: true,
            overwriteInitial: false, // conserve les preview si vous ajoutez d'autres images
            allowedFileTypes: ['image'], // type de fichiers autorisés
            allowedFileExtensions : ['jpeg','jpg','png'], // extensions autorisées
            previewSettings: {
                image: { width: "auto", height: "110px" }, // dimension des preview
            },
            uploadUrl: "/ajax_upload.php", // chemin d'upload des images
            initialPreview: paths, // le chemin des images à preview dès le chargement
            initialPreviewConfig: previews, // et leurs paramètres d'affichage
            initialPreviewAsData: true
        });

    }

    // Appel de l'enchainement des fonctions pour charger le plugin
    // Le plugin ne chargera que si on a un id images
    paths_preview_loader();

});

// Clipboard.js
$(document).ready(function() {

	// Initialisation du bouton
	var clipboard = new Clipboard('#copy-button');

	// Changement de valeur du bouton
	clipboard.on('success', function(event) {
	    event.clearSelection();
	    event.trigger.textContent = 'Copié';
	    window.setTimeout(function() {
	        event.trigger.textContent = 'Copier';
	    }, 2000);
    });

});