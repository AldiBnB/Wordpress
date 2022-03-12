<!-- enctype="multipart/form-data" -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php get_header(); ?>
    <main class="sections">
        <!-- Search Form -->
        <section>
            <div class="main_search">

                <form class="search-form" action="/articles" method="post">
                    <label for="post_location">Destination</label>
                    <input type="text" name="post_location" class="form-control" id="post_location" placeholder="Où allez vous ?">
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </form>
                <div>
                    <div class="container">
                        <div class="view-content">
                            <!-- Caroussel -->
                            <p> <img src="https://www.shbarcelona.fr/blog/fr/wp-content/uploads/2016/03/appartement-photo-810x540.jpg"> </p>
                        </div>

                    </div>
                </div>


                <hr>
                <!-- Newsletter -->

                <section class="newsletter">
                    <div>
                        <form class="newsletter_body">
                            <div class="newsletter_title">Restez connecté</div>
                            <p>Recevez les dernières nouveautés concernant AldiBnb en vous inscrivant à notre newsletter</p>
                            <div class="form-group">
                                <label for="email">Votre email</label>
                                <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                                <button type="submit">S'inscrire</button>
                            </div>
                        </form>
                    </div>

                </section>

                <hr>
    </main>

    <!-- echo do_shortcode '[carrousel]'  with 2 in parameters-->
    <?php

    echo do_shortcode('[carrousel limite=' . 4 . ']');
    ?>



</body>

</html>