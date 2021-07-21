<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
    
    //header("Location: http://localhost/Ex2/index.php");
    //header("Refresh:0");
    $_SESSION = array();   
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    };
    session_destroy();
    header("Location: http://localhost/Ex2/index.php");
    //echo $_SESSION['nom'];
    ?>
</body>
</html>