<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Generateur</title>
</head>

<body>
    <div class="information">

    <p>Nom de l'enfant: <input type="text" name="nom" /></p>
    <p>Classe: <input type="text" name="classe" /></p>
    <p>Nom de l'institutrice : <input type="text" name="instit" /></p>
    <p>Date :<input type="date" id="start" name="trip-start"
       value="jj-mois-année"
       min="02-18-2019" max="30-06-2020"></p>
</div>
<form action="" >
    <p>Raison de l'absence</p>
    <input type="radio" id="Malade"  value="huey" checked>
    <label for="Malade">Maladie</label>

    <input type="radio" id="Décès"  value="huey">
    <label for="Décès">Décès d'un membre de la famille /Animal de compagnie </label>

    <input type="radio" id="activité"  value="huey">
    <label for="activité">activité extra-scolaire importante </label>

    <input type="radio" id="Autre"  value="huey">
    <label for="Autre">Autre excuse </label>

    <p><input type="submit" value="OK"></p>



</form>


</body>

</html>