// Sélectionnez tous les boutons avec la classe "btn_like"
var boutonsLike = document.querySelectorAll('.btn_like');

// Parcourez tous les boutons sélectionnés
boutonsLike.forEach(function(bouton) {
    // Créez un nouvel élément SVG
    var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("id", "Calque_1");
    svg.setAttribute("data-name", "Calque 1");
    svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
    svg.setAttribute("viewBox", "0 0 790.38 781.29");
    svg.setAttribute("width","60px")
    svg.setAttribute("style", "margin: 0 4% 4% 0;");

    // Ajoutez le contenu SVG à l'élément SVG
    svg.innerHTML = `
      <defs>
        <style>
          .cls-1 {
            fill: none;
          }

          .cls-1, .cls-2 {
            stroke: #000;
            stroke-miterlimit: 10;
            stroke-width: 60px;
          }

          .cls-2 {
            fill: transparent;
          }
        </style>
      </defs>
      <path id="heart-like" class="cls-2" d="M583.66,397.24l-188.47,232.45-188.47-233.41c-22.54-32.37-31.41-54.24-31.41-84.18,0-55.83,38.56-106.08,94.24-106.55,45.8-.39,97.72,47.96,125.65,84.4,27.19-35.16,79.85-84.4,125.65-84.4,54.2,0,94.24,50.72,94.24,106.55,0,29.94-7.02,53.43-31.41,85.14h0Z"/>
      <ellipse class="cls-1" cx="395.19" cy="390.65" rx="365.19" ry="360.65"/>
    `;

    // Remplacez le bouton par le SVG
    bouton.parentNode.replaceChild(svg, bouton);

    // Mettez à jour l'événement onclick du bouton
    svg.addEventListener('click', function(event) {
        Toggle(event, this);
    });
});

function Toggle(event, svg) {
    event.preventDefault();
    event.stopPropagation();
    const fillColor = window.getComputedStyle(svg.querySelector('.cls-2')).getPropertyValue('fill');
    console.log(fillColor);

    // Convertir les couleurs en minuscules pour une comparaison insensible à la casse
    const lowercaseFillColor = fillColor.toLowerCase();

    // Comparer les couleurs
    if(lowercaseFillColor === 'rgb(255, 0, 0)' || lowercaseFillColor === '#ff0000'){
        svg.querySelector('.cls-2').style.fill = 'transparent';
    }
    else{
        svg.querySelector('.cls-2').style.fill = 'red';
    }
}
