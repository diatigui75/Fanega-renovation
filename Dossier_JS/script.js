// --- Défilement fluide pour les liens de navigation ---
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// --- Slideshow principal (arrière-plan) ---
let slideIndex = 0;
function showBackgroundSlides() {
    const slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.opacity = "0";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex - 1].style.opacity = "1";
    setTimeout(showBackgroundSlides, 5000);
}
showBackgroundSlides();

// --- Carrousel horizontal de cartes (scroll infini) ---
const track = document.getElementById("carousel-track");
if (track) {
    const cards = Array.from(track.children);
    cards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });
    track.addEventListener("mouseenter", () => {
        track.style.animationPlayState = "paused";
    });
    track.addEventListener("mouseleave", () => {
        track.style.animationPlayState = "running";
    });
}

// --- Gestion des modales de services ---
const buttons = document.querySelectorAll('.bouton-projet');
const modal = document.getElementById('modal');
const modalTitle = document.getElementById('modal-title');
const modalDescription = document.getElementById('modal-description');
const closeBtn = document.querySelector('.close');

// Définir les descriptions pour chaque service
const serviceDescriptions = {
    "Rénovation complète": "Nous proposons une rénovation complète de votre habitat, de la structure aux finitions, en passant par l’isolation et l’aménagement intérieur. Notre équipe s’occupe de tout, pour un résultat clé en main.",
    "Carrelage": "Pose de carrelage sur mesure, pour sols et murs, avec un large choix de matériaux et de motifs. Nous garantissons une finition impeccable et durable.",
    "Maçonnerie": "Travaux de maçonnerie pour la construction, la réparation ou l’aménagement de murs, fondations et structures en béton. Nous intervenons pour tous types de projets, petits ou grands.",
    "Menuiserie": "Fabrication et pose de menuiseries intérieures et extérieures : portes, fenêtres, escaliers, placards, etc. Nous travaillons le bois, l’aluminium et le PVC.",
    "Nettoyage": "Nettoyage professionnel après travaux ou en entretien régulier. Nous utilisons des produits adaptés et des techniques respectueuses de l’environnement.",
    "Plomberie": "Installation, réparation et entretien de vos réseaux d’eau, chauffage et sanitaires. Nous intervenons pour les particuliers et les professionnels.",
    "Électricité": "Mise aux normes, installation électrique complète, dépannage et domotique. Nos électriciens certifiés garantissent votre sécurité et votre confort.",
    "Peinture": "Peinture intérieure et extérieure, avec préparation des supports et finitions soignées. Nous vous conseillons sur les couleurs et les types de peinture adaptés à vos besoins."
};

// Ajouter un événement à chaque bouton de service
buttons.forEach(button => {
    button.addEventListener('click', () => {
        const title = button.parentElement.querySelector('h3').textContent;
        modalTitle.textContent = title;
        modalDescription.textContent = serviceDescriptions[title];
        modal.style.display = 'block';
    });
});

// Fermer la modale des services
closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Fermer la modale des services si on clique en dehors
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

// --- Gestion de la modale "Prendre Rendez-vous" ---
const prendreRendezVousBtn = document.getElementById('prendreRendezVousBtn');
const rendezVousModal = document.getElementById('rendezVousModal');
const closeRendezVousModalBtn = document.querySelector('#rendezVousModal .close-modal');

// Ouvrir la modale "Prendre Rendez-vous"
prendreRendezVousBtn.addEventListener('click', (e) => {
    e.preventDefault();
    rendezVousModal.style.display = 'block';
});

// Fermer la modale "Prendre Rendez-vous"
closeRendezVousModalBtn.addEventListener('click', () => {
    rendezVousModal.style.display = 'none';
});

// Fermer la modale si on clique en dehors
window.addEventListener('click', (event) => {
    if (event.target === rendezVousModal) {
        rendezVousModal.style.display = 'none';
    }
});

