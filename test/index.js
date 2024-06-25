
document.addEventListener("DOMContentLoaded", function() {
    let pathname = window.location.pathname;
    let searchParams = new URLSearchParams(window.location.search);
    let page = searchParams.get('page');

    if (pathname.includes('index.php') && page === 'catalogue') {
  

    }
    
    else if (pathname.includes('index.php') && page === 'cart') {
        initCart();
    }
});




console.log(ChaineLaPlusLongue('nulle'));



function ChaineLaPlusLongue(mot){

    let caractere1;
    let caractere2;
    let maxCaractere = mot.length; //Long mon mot
    let longueurMaximal = 0;
    let longueurActive = 0;


    for(let i = 0; i <= maxCaractere; ++i){
        caractere1 = mot.charAt(i);
        caractere2 = mot.charAt(i+1);

        if(caractere1 != caractere2){
            longueurActive +=1;

            console.log(caractere1);
            console.log(caractere2);


            console.log('Je passe dans le différenciel');
        }

        else{
            if(longueurActive > longueurMaximal){
                longueurMaximal = longueurActive;
            }
            
                        
        }

    }

    return longueurActive; 

}



