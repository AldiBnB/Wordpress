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

                <?php

                echo do_shortcode('[carrousel limite=' . 4 . ']');
                ?>



                <!-- <div class="container">
                        <div class="view-content">
                            
                            <div class="caroussel"> 
                                <img src="https://www.shbarcelona.fr/blog/fr/wp-content/uploads/2016/03/appartement-photo-810x540.jpg"> 
                            </div>
                            <div class="mini-contain">
                                <div class="mini-contain1"> 
                                    <img style="height : 50px; width: 50px;"src="https://www.appartcity.com/uploads/media/image_hotel/0001/22/image_hotel_big/21673_t1db-nior-niort-centre-studio-double-03.06.19-2.jpg">
                                </div>
                                <div class="mini-contain2">
                                    <img style="height : 50px; width: 50px;"src="https://www.appartcity.com/uploads/media/image_hotel/0001/22/image_hotel_big/21673_t1db-nior-niort-centre-studio-double-03.06.19-2.jpg">
                                </div>
                                <div class="mini-contain3">
                                    <img style="height : 50px; width: 50px;"src="https://www.appartcity.com/uploads/media/image_hotel/0001/22/image_hotel_big/21673_t1db-nior-niort-centre-studio-double-03.06.19-2.jpg">
                                </div>
                            </div>
                        </div>

                    </div> -->


                <form class="search-form" action="/articles" method="post">

                    <h3><strong>Trouvez votre hebergement adaptés à votre séjour sur AldiB’n’B </strong></h3>
                    <p class="txt">Découvrez des chambres privées ou des logements entiers, parfaitement adaptés à tout type de séjour.</p>
                    <input type="text" name="post_location" class="form-control" id="post_location" placeholder="  Location :"><br>
                    <input type="text" name="post_arrivée" class="form-control" id="post_arrivée" placeholder="  Arrivée "><input type="text" name="post_depart" class="form-control" id="post_depart" placeholder="  Départ"><br>
                    <input type="text" name="post_nb" class="form-control" id="post_nb" placeholder="  Nombres de personnes : "><br>


                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </form>







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




</body>

</html>



<style>
    img {
        width: 250px;
        height: 250px;
    }

    body {

        background: linear-gradient(#FCECC099, white);
        width: 100%;
        height: 100%;

    }

    .sections {
        margin: 50px 50px;
        /* display: grid; */
        grid-template-columns: 1fr;
        grid-template-rows: repeat(3, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .txt,
    h3 {
        color: #13334C;
    }

    .main_search {
        grid-area: 1 / 1 / 2 / 3;
    }

    .newsletter {
        grid-area: 2 / 1 / 3 / 3;
    }

    .footer_container {
        grid-area: 3 / 1 / 4 / 3;
    }


    .main_search {
        /* display: grid; */
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        text-align: center;
    }

    .view-content {
        grid-area: 1 / 1 / 2 / 2;
    }

    .search-form {
        grid-area: 1 / 2 / 2 / 3;
        margin: 20px 0;
        border-radius: 5px;
    }

    .newsletter_body {
        margin: 45px 0;
    }

    .view-content {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .caroussel {
        grid-area: 1 / 1 / 2 / 2;
    }

    .mini-contain {
        grid-area: 2 / 1 / 3 / 2;
    }

    input {
        opacity: 1px;
        border: none;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        ;
    }

    button {
        border-radius: 5px;
        border: none;
        display: inline-block;
        background-color: #008CBA;
        color: white;
        transition-duration: 0.4s;
        padding: 5px 20px;
        /* margin-top: 10px; */
        margin-bottom: 10px;
    }

    button:hover {
        background-color: white;
        color: #008CBA;
        border: 2px solid #008CBA;
    }

    .btn-primary {
        padding: 10px 20px;
    }

    .newsletter_title {
        margin-top: 10px;

    }

    hr {
        opacity: 50%;
    }

    .mini-contain {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        height: 500px;
        width: 1000px
    }

    .mini-contain1 {
        grid-area: 1 / 1 / 2 / 2;
    }

    .mini-contain2 {
        grid-area: 1 / 2 / 2 / 3;
    }

    .mini-contain3 {
        grid-area: 1 / 3 / 2 / 4;
    }

    .view-content {
        border: solid 1px black;
    }

    .search-form {
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        padding: 10px 0;
    }

    #post_location,
    #post_arrivée,
    #post_depart,
    #post_nb {
        font-size: 20pt;
        margin-bottom: 50px;




    }

    #post_location,
    #post_nb {
        height: 60px;
        width: 500px;
    }

    #post_arrivée,
    #post_depart {
        height: 60px;
        width: 250px;
    }
</style>