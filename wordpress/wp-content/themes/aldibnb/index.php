<?php get_header(); ?>


  <main class="sections">
    <!-- Search Form -->
    <section>
      <div class="container">
        <div class="search-form">
  <h1>AldiBnb</h1>
  <p>Retrouver tous nos biens</p>
  <hr>
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
    <button type="submit"">Rechercher</button>
  </form>



<!-- Caroussel -->

      <div class="caroussel">
    
      </div>
    </section>

    
   
    <!-- Newsletter -->
    <section class="newsletter">
      <form class="newsletter__body">
        <div class="newsletter__title">Restez connecté</div>
        <p>
          Recevez les dernières nouveautés concernant AldiBnb en vous inscrivant à notre newsletter
        </p>
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
          <label for="email">Votre email</label>
        </div>
        <!--
        <input type="email" class="form-control" placeholder="Enter your email adress">
        -->
        <button type="submit" class="btn">S'inscrire</button>
      </form>
    </section>

  </main>


<?php get_footer(); ?>