<?php get_header(); ?>


  <main class="sections">
    <!-- Search Form -->
    <section>

    <div class="container">

        <h1>AldiBnb</h1>
        <p>Retrouver tous nos biens</p>
        <hr>
    





        <div class="caroussel">
            <img src="https://i.picsum.photos/id/234/790/728.jpg" alt="">
            <div class="highlighted__body">
            <div class="highlighted__title">Maison 4 pièce(s)</div>
            <div class="highlighted__price">178 200€</div>
            <div class="highlighted__location">34 000 MONTPELLIER</div>
            <div class="highlighted__space">80m²</div>
            </div>
        </div>



        <div class="search-form">
  
        <form class="search-form">
            <div class="form-group">
            <label for="city">Destination</label>
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
            <div class="form-group">
            <label for="date-départ">Voyageurs</label>
            <input type="number" class="form-control"  placeholder="Qui ?">
            </div>
            <button type="submit">Rechercher</button>
        </form>



    <!-- Caroussel -->

      <div class="caroussel">
        
      <?php monsuperslider_show(); ?>
    
      </div>
    </section>

    
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

</main>


<?php get_footer(); ?>