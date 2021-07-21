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
    $_SESSION['prénom']=$_POST['prénom'];
    $_SESSION['nom']=$_POST['nom'];
    echo $_POST['prénom'];
    echo '<br>';
    echo $_SESSION['prénom'];
    echo '<br>';
    echo $_SESSION['nom'];
    ?>
</body>
</html>