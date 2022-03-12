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
                            <p> <?php  wppln_last_posts('1','1','true'); ?> <p>
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
        <?php get_footer(); ?>
    </main>
    

</body>

</html>

<style>
    .sections {
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(3, 1fr);
  grid-column-gap: 27px;
  grid-row-gap: 0px;
  }
  
  .main_search{ grid-area: 1 / 1 / 2 / 3; }
  .newsletter{ grid-area: 2 / 1 / 3 / 3; }
  .footer_container{ grid-area: 3 / 1 / 4 / 3; }

  
.main_search {
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 27px;
grid-row-gap: 0px;
}

.search-form{ grid-area: 1 / 1 / 2 / 2; }
.view-content { grid-area: 1 / 2 / 2 / 3; }


.footer_container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: 1fr;
  grid-column-gap: 27px;
  grid-row-gap: 0px;
  }
  
  .footer__col1 { grid-area: 1 / 1 / 2 / 2; }
  .footer__col2{ grid-area: 1 / 2 / 2 / 3; }
  .footer__col3{ grid-area: 1 / 3 / 2 / 4; }
  .footer__col4 { grid-area: 1 / 4 / 2 / 5; }


  .footer_social {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: 1fr;
    grid-column-gap: 27px;
    grid-row-gap: 0px;
    }
    
    .twitter { grid-area: 1 / 1 / 2 / 2; }
    .instagram{ grid-area: 1 / 2 / 2 / 3; }
    .facebook{ grid-area: 1 / 3 / 2 / 4; }
    


</style>