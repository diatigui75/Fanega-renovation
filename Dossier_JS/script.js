document.addEventListener('DOMContentLoaded', function() {
    // 1. Effets de survol et défilement fluide pour la navigation
    const navLinks = document.querySelectorAll('nav ul li a');
    const colors = ['#FF5733', '#FF5733', '#FF5733', '#FF5733', '#FF5733'];

    navLinks.forEach((link, index) => {
        // Effet de survol
        link.addEventListener('mouseenter', function() {
            this.style.backgroundColor = colors[index];
            this.style.transform = 'scale(1.1)';
        });
        link.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '';
            this.style.transform = 'scale(1)';
        });
        // Défilement fluide vers la section ciblée
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // 2. Gestion des boutons "Découvrir notre menu" et "Réserver une table"
    const buttons = [
        { id: 'discoverMenuBtn', target: 'menu' },
        { id: 'reserveTableBtn', target: 'reservation' },
        { id: 'reserverBtn', target: 'reservation' }
    ];

    buttons.forEach(btn => {
        const button = document.getElementById(btn.id);
        if (button) {
            button.addEventListener('click', function() {
                const targetSection = document.getElementById(btn.target);
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    });

    // 3. Animation pour la vidéo d'arrière-plan
    const video = document.getElementById('background-video');
    if (video) {
        const adjustVideoSize = function() {
            video.style.width = window.innerWidth + 'px';
            video.style.height = window.innerHeight + 'px';
        };
        window.addEventListener('resize', adjustVideoSize);
        adjustVideoSize(); // Appel initial
    }

    // 4. Effets de survol sur les cartes du menu
    const menuCards = document.querySelectorAll('.menu-card');
    menuCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // 5. Validation du formulaire de réservation
    const reservationForm = document.querySelector('.reservation-form');
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(event) {
            const requiredFields = ['nom', 'email', 'date', 'heure', 'personnes', 'telephone'];
            let isValid = true;
            requiredFields.forEach(fieldId => {
                if (!document.getElementById(fieldId).value) {
                    isValid = false;
                }
            });
            if (!isValid) {
                alert('Veuillez remplir tous les champs requis.');
                event.preventDefault();
            }
        });
    }
});
