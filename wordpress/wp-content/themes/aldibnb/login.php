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

<style>

body {
    height: 100%;
    background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,247,211,1) 100%);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.title {
    font-family: "Monaco", Times, serif;
    font-size: 30px;
    position: relative;
    text-align: center;
}

.form {
    font-family: "Georgia";
    font-size: 14px;
    /* position: relative; */
    text-align: center;
    width: 450px;
    padding: 0px 20px;
    box-sizing: border-box;
    border-radius: 4px;
    background: white;
    margin-left: auto;
    margin-right: auto;
    position: absolute;
    top: 45%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    box-shadow: 0px 0px 30px 10px rgba(0,0,0,0.4);
}

</style>
</head>


<body>
    <?php get_header(); ?>
    <div class="form"><p class="title">Bienvenue sur AldiBnB</p>
    <?php wp_login_form(); ?></div>
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

<script>
    document.querySelectorAll('label').forEach(function(label) {
        // si le a est Back-office
        if (label.innerHTML === 'Identifiant ou adresse e-mail') {
        // update le label avec 'Email'
        label.innerHTML = 'AHH';

        }
        elseif(label.innerHTML === 'Mot de passe') {
        // update le label avec 'Password'
        label.innerHTML = 'AAH';
        }
    });
</script>

</html>