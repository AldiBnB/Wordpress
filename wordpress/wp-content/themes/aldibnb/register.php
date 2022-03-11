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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];
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
    <!-- Create a register form -->
    <form action="<?php echo esc_url(site_url('/register')); ?>" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo (!empty($_POST['username'])) ? $_POST['username'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo (!empty($_POST['email'])) ? $_POST['email'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="form-control" value="<?php echo (!empty($_POST['password'])) ? $_POST['password'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirmer le mot de passe</label>
            <input type="password" name="confirm_password" class="form-control" value="<?php echo (!empty($_POST['confirm_password'])) ? $_POST['confirm_password'] : ''; ?>">
        </div>


        <div class="form-group">
            <label for="role">Role</label>
            <select name="role" id="role">
                <!-- role de wordpress -->
                <option value="administrator">Administrateur</option>
                <option value="author">Utilisateur</option>

            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="register" class="btn btn-primary" value="Register">
        </div>
    </form>
</body>

</html>