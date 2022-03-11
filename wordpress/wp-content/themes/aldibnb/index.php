<?php get_header(); ?>


  <main class="sections">
    <!-- Search Form -->
    <section>

    <div class="container">

        <h1>AldiBnb</h1>
        <p>Retrouver tous nos biens</p>
        <hr>
    





        



        
  
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
                <input type="number" class="form-control"  placeholder="Qui ?">
            </div>

            <button type="submit">Rechercher</button>
        </form>



    <!-- Caroussel -->


    
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
                        <button type="submit" >S'inscrire</button>
                    </div>
                </form>
                </div>
                
            </section>
        
    <hr>
    <?php get_footer(); ?>
</main>


        