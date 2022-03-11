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







                <form class="search-form">
                    <label for="city">Destination</label><br>
                    <div class="form-group">
                        <input type="text" class="form-control" id="city" placeholder="Où allez vous ?">
                    </div>
                    <label for="date-arrivée">Arrivée</label>
                    <div class="form-group">
                        <input type="date" class="form-control" id="budget" placeholder=" Quand ?">
                    </div>
                    <label for="date-départ">Départ</label>
                    <div class="form-group">
                        <input type="date" class="form-control" id="budget" placeholder=" Quand ?">
                    </div>
                    <label for="date-départ">Voyageurs</label>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Qui ?">
                    </div>

                    <button type="submit">Rechercher</button>
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

</body>

</html>