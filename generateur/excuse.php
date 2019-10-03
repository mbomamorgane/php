<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generateur</title>
</head>

<body>
    <main>

        <form method="post" action="cible.php">
            <H1>Absence</H1>
            <div class="information">
                <div class="inf1">
                    <div class="inf2">
                        <div class="b1">
                            <input id="NE" type="text" name="nom" placeholder="Nom de l'enfant :">
                        </div>
                        <div class="b2">
                            <input id="PE" type="text" name="prenom" placeholder="Prenom de l'enfant: ">
                        </div>
                        <div class="b3">
                            <input id="CL" type="text" name="classe" placeholder="Classe:">
                        </div>
                        <div class="b4">
                            <input id="NI" type="text" name="instit" placeholder="Nom de l'institutrice :">
                        </div>
                        <div class="b5">
                            <input id="NP" type="text" name="nomp" placeholder="Nom du parent : ">
                        </div>
                        <div class="b6">
                            <input id="PP" type="text" name="prenomp" placeholder="Prenom du parent: ">
                        </div>
                    </div>
                    <div class="inf3">
                        <div class="b7">
                            <p>Date :<input type="date" id="start" name="date" value="jj-mois-année" min="02-18-2019" max="30-06-2020"></p>
                        </div>
                        <div class="b8">
                            <p>Date absence:<input type="date" id="start2" name="dateA" value="jj-mois-année" min="02-18-2019" max="30-06-2020"></p>
                        </div>
                        <div class="b8">
                            <p>Raison de l'absence</p>
                        </div>
                        <div class="absence">
                            <div class="malade">
                                <input type="radio" id="Malade" value="malade" name="drone" checked>
                                <label for="Malade">Maladie</label>
                            </div>
                            <div class="decef">
                                <input type="radio" id="Décès" name="drone" value="décès">
                                <label for="Décès">Décès d'un membre de la famille </label>
                            </div>
                            <div class="deceA">
                                <input type="radio" id="Décès" name="drone" value="décèsA">
                                <label for="Décès">Décès d'un animal de compagnie </label>
                            </div>
                            <div class="activite">

                                <input type="radio" id="Activité" name="drone" value="activité">
                                <label for="activité">activité extra-scolaire importante </label>
                            </div>
                            <div class="autre">
                                <input type="radio" id="Autre" name="drone" value="autre">
                                <label for="Autre">Autre excuse </label>
                            </div>

                        </div>

                    </div>
                </div>

                <img class="image" src="./image/logo.png">


                <input class="ok" type="submit" value="Envoyer">



        </form>

    </main>
</body>

</html>