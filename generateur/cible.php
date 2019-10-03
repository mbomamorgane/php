<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleC.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="text">
            <div class="cordonéEleve">
                <div class="nomE">
                    <?php echo htmlspecialchars($_POST['nom'] . " " . $_POST['prenom']) ?>
                </div>
                <div class="nomp">
                    <?php echo htmlspecialchars($_POST['instit'] . " " . $_POST['classe']) ?>
                </div>

            </div>
            <div class="cordonéecole">
                <P>Le <?php echo $_POST['date'] ?>,<P>
            </div>
            <div class="objet">
                <p> Objet : justification d’une absence . </p>
            </div>
            <div class="lettre">
                <p>Madame, Monsieur,</P>
                <p>Je vous prie de bien vouloir excuser l’absence de mon enfants en date du <?php echo $_POST['dateA'] ?> .</p>
                <p>En effet, il ne pourra se rendre en classe. <br /> Cause: <?php
                                                                                if ($_POST['drone'] == 'malade')
                                                                                    echo 'problèmes de santé';
                                                                                elseif ($_POST['drone'] == 'décès')
                                                                                    echo 'décès dans la famille';
                                                                                elseif ($_POST['drone'] == 'décèsA')
                                                                                    echo 'décès annimal';
                                                                                elseif ($_POST['drone'] == 'activité')
                                                                                    echo 'activité extra-scolaire importante';
                                                                                else {
                                                                                    echo 'Autre';
                                                                                }
                                                                                ?>
                    <p>Je vous saurais gré d’en prendre note et m’en remets à votre compréhension.</p>

                    <p>Je vous prie de croire, Madame, Monsieur, à l’assurance de mes salutations les plus sincères. </p>
            </div>
            <div class="signatur">
                <p> signatur <br /> <?php echo htmlspecialchars($_POST['nomp'] . " " . $_POST['prenomp']) ?> </p>

            </div>


        </div>
    </main>
</body>

</html>