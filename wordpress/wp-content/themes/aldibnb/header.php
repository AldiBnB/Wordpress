<!doctype html>
<html lang="fr">

<header>
    <style>
        /* style for a navbar */
        body {
            margin: 0;
        }

        header {
            background: #FCECC099;
            margin: 0;
            padding-bottom: 15px;
            padding-top: 15px;
            /* black border and shadow effect */
            box-shadow: 0px 0px 10px black;
            border-bottom: 1px solid black;

        }

        nav>div {
            display: flex;
            justify-content: space-between;

        }

        /* nav>div>div:first-child {} */


        nav>div>div:nth-child(3) {
            display: flex;
            flex-direction: row;
            /* tout à droite de son parent */
            justify-content: flex-end;
            margin-right: 15px;
            height: 100%;
            /* centrer verticalement */
            align-items: center;
            /* upper case */
            text-transform: uppercase;

        }

        nav>div>div:nth-child(3)>* {
            margin-left: 15px;

        }

        nav>div>div:first-child>ul {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        ul>li {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-right: 15px;
            margin-left: 15px;
        }

        a {
            text-decoration: none;
        }
    </style>
    <nav>
        <div>
            <!-- si l'utilisateur n'est pas connecté -->
            
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'navbar-nav'
            ]); ?>

            <script>
                // dom menu class
                var menu = document.querySelector('.navbar-nav');
                var ul = menu.querySelector('ul');
                var li = document.createElement('li');
                var a = document.createElement('a');
                var text = document.createTextNode('Home');
                // href '/'
                a.href = '/';
                a.appendChild(text);
                li.appendChild(a);
                ul.appendChild(li);
            </script>

            <!-- si l'utilisateur est connecter on mets son username et un bouton logout et on enleve register et login -->
            <?php if (is_user_logged_in()) : ?>
                <div>

                    <div><?php echo wp_get_current_user()->user_login; ?></div>
                    <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>

                </div>
                <!-- on retire Register et  Login -->
                <script>
                    document.querySelectorAll('.page_item').forEach(function(page_item) {
                        // si le a est Register ou Login
                        if (page_item.querySelector('a').innerHTML === 'Register' || page_item.querySelector('a').innerHTML === 'Login') {
                            page_item.remove();
                        }

                    });
                </script>
                <!-- else -->
            <?php else : ?>
                <script>
                    document.querySelectorAll('.page_item').forEach(function(page_item) {
                        // si le a est Register ou Login
                        if (page_item.querySelector('a').innerHTML === 'Créez votre annonce') {
                            page_item.remove();
                        }

                    });
                </script>
            <?php endif; ?>
            <!-- si l'utilisateur n'est pas du role admin on retire Back-office  -->
            <?php if (!current_user_can('administrator')) : ?>
                <script>
                    document.querySelectorAll('.page_item').forEach(function(page_item) {
                        // si le a est Back-office
                        if (page_item.querySelector('a').innerHTML === 'Back-office') {
                            page_item.remove();
                        }

                    });
                </script>
            <?php endif; ?>

        </div>
        </div>
    </nav>
</header>