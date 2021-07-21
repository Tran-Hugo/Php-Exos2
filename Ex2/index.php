<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    session_start();
    echo "Hello ".$_SESSION['nom'].' '.$_SESSION['prénom'];
    ?>
    <form method="post" action="page1.php">
        <p>
        <label for="nom">Nom : </label><input type="text" name="nom" />
        </p>
        <p>
        <label for="nom">Prénom : </label><input type="text" name="prénom" />
        </p>
        <p>
        <input type="submit" value="Valider" />
        </p>
        <a href="logout.php">Disconnect</a>
    </form>
</body>
</html>