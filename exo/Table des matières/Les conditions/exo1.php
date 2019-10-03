<?php
/* exo 1 Change la condition pour qu'elle devienne: "si la température est plus grande ou égale à 15 degrés".
if( $temperature > 21 ) {
    // code à exécuter si la condition est TRUE
    $vetement_du_jour = "T-shirt";
   } else {
     // code à exécuter si la condition est FALSE
     $vetement_du_jour = "Pull-over";
   }
*/

if( $temperature >=15 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";
 } else {
   // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over";
 }

?>