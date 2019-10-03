<?php 

/*Ensuite, rendons le script un peu plus subtil en permettant une gradation. 
Ta chambre pourrait être soit "dégoutante", "sale", "en ordre", "immaculée",
 "maniaque". Utilise une structure if/ elseif / else pour cela. Invente les messages 
 à afficher en fonction de chaque cas de figure.  
 */

$chambre_est_sal=true;

if ($chambre_est_sal==false){
    echo'Range ta chambre,YIOOOO !';
}else if( $chambre_est_sal=='+/-') {
    echo 'tu peux mieux faire ';
}else if( $chambre_est_sal==true) {
    echo 'Bravo ! ';
}else  {
    echo 'oulalalalalaal tu as pas de vie';
}


?>
