var sections = document.querySelectorAll('.section_filtre');

sections.forEach(function(section) {
    section.addEventListener('click', function() {
        var computedStyle = window.getComputedStyle(section);

        var isBold = computedStyle.getPropertyValue('font-weight') === '700';

        if (isBold) {
            section.style.fontWeight = 'normal';
        } else {
            section.style.fontWeight = '700';
        }
    });
});



// Activer / Désactiver bloc filtre

let bloc_filtre_mobile = document.getElementById('bloc_filtrage_mobile');
let filtre_titre_mobile = document.getElementsByClassName('filtre_titre_mobile')[0];


filtre_titre_mobile.addEventListener('click',() =>{
    
    let titre_filtre = window.getComputedStyle(bloc_filtre_mobile);
    let display_bloc = titre_filtre.getPropertyValue('display');

    if(display_bloc === 'none'){
        bloc_filtre_mobile.style.display = 'inline';
    }

    else{
        bloc_filtre_mobile.style.display = 'none';
    }

})