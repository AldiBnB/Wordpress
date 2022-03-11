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
    height: 100vh;
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
    display:flex;
    flex-direction: column;
    text-align: center;
    width: 450px;
    padding: 0px 20px;
    box-sizing: border-box;
    border-radius: 4px;
    background: white;
    margin: 150px auto;
    box-shadow: 0px 0px 30px 10px rgba(0,0,0,0.4);
}

.input {
    margin-bottom: 20px;
}

.boxinput {
    padding: 6px 10px;
    font-family: "Monaco";
    font-size: 18px;
    border:1px solid gray;
    border-radius: 8px;
    width: 200px;
}

.sometext {
    font-family: "Monaco";
    font-size: 18px;
}

.checkbox {
    font-size: 14px;
    background: #3E65BE;
    color: white;
    padding: 3px 40px;
}

</style>
</head>


<body>
    <?php get_header(); ?>
    <div class="form"><p class="title">Bienvenue sur AldiBnB</p>
    <!-- <?php wp_login_form(); ?></div> -->

    <form action="<?php echo home_url('wp-login.php')  ?>" method="post">
            <input type="hidden" name="action" value="login_user">
            <div class="input">
                <input class="boxinput" type="text" placeholrder="Username ou Adresse Email" name="log" id="log" placeholder="Username" />
            </div>
            <div class="input">
                <input class="boxinput" type="password" placeholder="Mot de passe" name="pwd" id="pwd" placeholder="Password" />
            </div>
            <div class="input">
                <input type="checkbox" name="rememberme" id="rememberme" />
                <label class="sometext" for="rememberme">Se souvenir</label>
            </div>
            <input type="hidden" name="redirect_to" value="/" />
            <div class="input">
                <input class="checkbox" type="submit" name="wp-submit" value="Se connecter" />
                <?php if(isset($_GET['create']) && $_GET['create'] == 'success'){ ?>
                <?php } ?>
            </div>
        </form>

</body>

</html>