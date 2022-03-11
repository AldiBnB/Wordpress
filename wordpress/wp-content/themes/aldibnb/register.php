<?php
/*
    Template name: Register
*/
// if login redirect to home
if (is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
}
// if register
if (isset($_POST['register'])) {
    // set username, hash password, email and role
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $role = htmlspecialchars($_POST['role']);
    // check if username already exist
    $user_id = username_exists($username);
    if (!$user_id and email_exists($email) == false) {

        $user_id = wp_create_user($username, $password, $email);

        wp_update_user(array(
            'ID' => $user_id,
            'role' => $role
        ));

        wp_set_current_user($user_id, $username);
        wp_set_auth_cookie($user_id);
        // redirect to home
        wp_redirect(home_url());
        exit();
    }
}

?>

<!doctype html>
<html>

<head>
    <title>S'inscrire</title>
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
    <!-- Create a register form -->
    <form class="form" action="<?php echo esc_url(site_url('/register')); ?>" method="post">
        <p class="title">Inscription</p>
        <div class="input">
            <input type="text" class="boxinput" name="username" placeholder="Username" class="form-control" value="<?php echo (!empty($_POST['username'])) ? $_POST['username'] : ''; ?>">
        </div>
        <div class="input">
            <input type="email" class="boxinput" name="email" placeholder="Adresse Email" class="form-control" value="<?php echo (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>">
        </div>
        <div class="input">
            <input type="password" class="boxinput" name="password" placeholder="Mot de passe" class="form-control" value="<?php echo (!empty($_POST['password'])) ? $_POST['password'] : ''; ?>">
        </div>
        <div class="input">
            <input type="password" class="boxinput" name="confirm_password" placeholder="Confirmer le mot de passe" class="form-control" value="<?php echo (!empty($_POST['confirm_password'])) ? $_POST['confirm_password'] : ''; ?>">
        </div>


        <div class="input">
            <select name="role" id="role">
                <!-- role de wordpress -->
                <option value="author">Utilisateur</option>
                <option value="administrator">Administrateur</option>

            </select>
        </div>
        <div class="input">
            <input type="submit" class="checkbox" name="register" class="btn btn-primary" value="S'inscrire">
        </div>
    </form>
</body>

</html>