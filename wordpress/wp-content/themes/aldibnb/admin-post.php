<?php
// post via method post in a form

if (!is_user_logged_in()) {
    echo "Vous n'êtes pas connecté";
    do_action("admin_post_form");
} else {
    echo "Vous êtes connecté";
    do_action("admin_post_form");
}
