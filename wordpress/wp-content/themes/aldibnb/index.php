<!doctype html>
<html>
    <head>
        <title>Connexion</title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    </head>
    <body>
        <form action="wp-login.php" method="post">
            <h2>Connexion</h2>
            <?php if (isset($GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
            <label>Pseudo</label>
            <input type="text" name="log" id="user_login" placeholder="Pseudo"><br>
            <label>Mot de passe</label>
            <input type="password" name="pwd" id="user_pass" placeholder="Mot de passe"><br>
            <button type="submit">Se connecter</button>
        </form>
    </body>
</html>