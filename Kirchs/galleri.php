<?php
/*
Template Name: Galleri
*/
?>

<?php get_header(); ?>

<body>
    

    <br />

    <main>
    <h1 class="center">
      <?php the_field('header_tekst');?> <br />
      <?php the_field('header_tekst2');?>
      </h1>
      <br />

      <div class="container">
        <div
          style="
                    box-shadow: none!important;
                "
          class="row card-panel hovb"
        >
          <div class="col s12 m6 l3">
            <img
            style="width: 100%; height: 30vh; object-fit: cover;"
              src="<?php the_field('billede1');?>"
              class="responsive-img card materialboxed"
            />
          </div>

          <div class="col s12 m6 l3">
            <img style="width: 100%; height: 30vh; object-fit: cover;"
              src="<?php the_field('billede1_copy2');?>"
              class="responsive-img card materialboxed"
            />
          </div>
          <div class="col s12 m6 l3">
            <img style="width: 100%; height: 30vh; object-fit: cover;"
              src="<?php the_field('billede1_copy3');?>"
              class="responsive-img card materialboxed"
            />
          </div>
          <div class="col s12 m6 l3">
            <img
            style="width: 100%; height: 30vh; "
              src="<?php the_field('billede1_copy4');?>"
              class="responsive-img card materialboxed"
            />
          </div>
          <div class="col s12 m6 l3">
                <img
                style="width: 100%; height: 30vh; object-fit: cover;"
                  src="<?php the_field('billede1_copy5');?>"
                  class="responsive-img card materialboxed"
                />
              </div>
    
              <div class="col s12 m6 l3">
                <img style="width: 100%; height: 30vh; object-fit: cover;"
                  src="<?php the_field('billede1_copy6');?>"
                  class="responsive-img card materialboxed"
                />
              </div>
              <div class="col s12 m6 l3">
                <img style="width: 100%; height: 30vh; object-fit: cover;"
                  src="<?php the_field('billede1_copy7');?>"
                  class="responsive-img card materialboxed"
                />
              </div>
              <div class="col s12 m6 l3">
                <img
                style="width: 100%; height: 30vh; "
                  src="<?php the_field('billede1_copy8');?>"
                  class="responsive-img card materialboxed"
                />
              </div>
     
        
           
  
        
    </main>

    <?php get_footer(); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src=" https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src='<?php echo get_template_directory_uri();  ?>/js/script.js'></script>
    <script> AOS.init();</script>
    <script>
      $(document).ready(function() {
        $(".materialboxed").materialbox();
      });

      
    </script>
    
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, );
  });
    </script>

    <style>
        div#modal1.modal.modal-fixed-footer.open {
          width: 80%;
         
        }
    </style>
  </body>
</html>
