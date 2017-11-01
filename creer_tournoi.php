<!DOCTYPE = html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Création d'un tournoi</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <?php
    if (! isset($_POST['nb_equipes'])) { // Si pas encore choisi nombre d'équipes
    ?>
        <section> <!-- Formulaire pour envoyer nb_equipes -->
            <label for="nb_equipes">Combien d'équipes sont inscrites ?</label>
            <input type="number" name="nb_equipes" id="nb_equipes" min=4 max=40 />
            <br />
        </section>
    <?php
    }
    elseif (isset($_POST['nb_equipes'])) { // Si nombre d'équipes choisi
        $nb_equipes = (int) $_POST['nb_equipes'];
    ?>
        <section>
            <form method="post" action="a_faire.php">
                <fieldset>
                    <legend>Faites votre choix :</legend>
    <?php
        for ($i=0; $i<$nb_equipes; $i++) {
            echo '<label for="equipe_' . $i . '">Equipe ' . $i . ': </label>';
            echo '<input type="text" name="equipe_' . $i . '" id="equipe_' . $i . '" placeholder="Ex : JSPT" />';
            echo '<br />';
        }
    }
    ?>
                </fieldset>
            </form>
        </section>




</body>

</html>
