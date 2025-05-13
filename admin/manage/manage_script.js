// Attendre que le DOM soit complètement chargé
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner tous les liens avec la classe "load-content"
    const links = document.querySelectorAll('.load-content');
    const dynamicContent = document.getElementById('dynamic-content');

    // Vérifier si le conteneur dynamique existe
    if (!dynamicContent) {
        console.error('Dynamic content container not found!');
        return;
    }

    // Ajouter un gestionnaire d'événements pour chaque lien
    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault(); // Empêcher le comportement par défaut du lien

            dynamicContent.innerHTML = '<p class="text-center"><i class="fa fa-spinner fa-spin"></i> Loading...</p>'; // Afficher un message de chargement

            // console.log('Loading content for:', this); // Debugging

            const target = this.getAttribute('data-target'); // Récupérer le fichier cible

            if (!target) {
                console.error('No target specified for this link.');
                return;
            }

            // Effectuer une requête fetch pour charger le contenu
            fetch(target)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text();
                })
                .then(data => {
                    dynamicContent.innerHTML = data; // Insérer le contenu dans le conteneur
                    // suprimer la classe active de tous les liens
                    links.forEach(link => link.classList.remove('active'));
                    // Ajouter la classe active au lien cliqué
                    this.classList.add('active');
                })
                .catch(error => {
                    console.error('Error loading content:', error);
                    dynamicContent.innerHTML = '<p class="text-danger">Failed to load content. Please try again later.</p>';
                });
        });
    });
});