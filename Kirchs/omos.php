

<?php
/*
Template Name: Omos
*/
?>
<?php get_header(); ?>
<body>
  


    <br />

    <main>
      <br>

      <div class="container" style="margin-top: 20px;">
        <div class="row " >

        <div data-aos="fade-up" data-aos-duration="1500" class="col s12 l6  center"><h5 > <?php the_field('tekst_til_velkomst_om_os'); ?> </h5></div>
        <div data-aos="fade-up" data-aos-duration="1500" class="col s12 l6 center"><h5 > <?php the_field('tekst_til_velkomst_om_os_copy'); ?> </h5></div>
        <br>
        <br>
        </div>

        <br>
        <br>
        <br>
        <br>
        <div class="row " >
          <div data-aos="fade-up"
          data-aos-duration="2000" class="col  s6 l6 center tekststørrelsesmall ">
            <h4><?php the_field('kundetilfredshedsfeldt'); ?>
            </h4>
          </div>


   

          <div data-aos="fade-up"
          data-aos-duration="2000" class="col s6 l6 containerImg ">
          <?php if( get_field('billede_boks_1') ): ?>
    <img src="<?php the_field('billede_boks_1'); ?>" class="responsive-img imageboks"  />
<?php endif; ?>
            <div class="centered"><h2 class="resizeOverText" data-aos="fade-up"
          data-aos-duration="2000" > <?php the_field('tekst_til_over_billede_1'); ?></h2></div>
          </div>
        </div>


<div>  <br></div>

        <div class="row ">
          <div data-aos="fade-up"
          data-aos-duration="2000" class="col  s6 l6 containerImg ">
          <?php if( get_field('billede_boks_2') ): ?>
    <img src="<?php the_field('billede_boks_2'); ?>" class="responsive-img imageboks"  />
<?php endif; ?>
            <div class="centered"><h2></h2></div>
          </div>

          <div  data-aos="fade-up"
          data-aos-duration="2000" class="col  s6 l6 center ">
          <h4><?php the_field('kvalitetsbevidsthedsfeldt'); ?>
            </h4>
          </div>
        </div>
    </div>

     
              </div>
    </main>

   
      <?php get_footer(); ?>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src=" https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src='<?php echo get_template_directory_uri();  ?>/js/script.js'></script>
    <script> AOS.init();</script>
  </body>
</html>
