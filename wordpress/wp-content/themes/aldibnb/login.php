<?php
/*
    Template name: Login
*/
// if login redirect to home
if (is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
}
?>

<!doctype html>
<html>


<head>
    <title>Connexion</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>


<body>
    <?php get_header(); ?>
    <?php wp_login_form(); ?>
</body>
<script>
    document.querySelectorAll('label').forEach(function(l) {

        if (l.innerText == 'Identifiant ou adresse e-mail') {

            l.innerText = 'ton Text bg';

        }
        elseif(l.innerText == 'Mot de passe') {

            l.innerText = 'ton Text bg';
        }
    });
</script>


</html>