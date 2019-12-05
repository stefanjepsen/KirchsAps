<?php
/*
Template Name: Hjem
*/
?>

<?php get_header(); ?>

    

<br>


    <main>
      

<div class="container" >
        <div class="carousel reziceCarousel  carousel-slider center">
                <div   class="carousel-fixed-item ">
     <div class="left pile">
      <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
     </div>
     <div class="right pile">
     <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
     </div>
                        <img data-aos="fade-up"
     data-aos-duration="3000" src=" <?php echo get_template_directory_uri(); ?> /img/logo.png" class="left hide-on-med-and-down imgResize" style="height:15vh; margin-left: 5%;    margin-bottom: -3%" alt="">
                </div>



                <div class="carousel-item white-text" href="#one!" >
                <?php if( get_field('billede_1_i_slideren') ): ?>
    <img src="<?php the_field('billede_1_i_slideren'); ?>" class="" style="object-fit:cover;"  width="100%" height="400"  alt=""/>
<?php endif; ?>
<span data-aos="fade-up"
     data-aos-duration="3000" >
                  <h1  style="margin-top:-10%" class="centered" ><?php the_field('tekst_til_karussel_overskrift_1st_billede'); ?></h1>
                  
                  </span>
                </div>

                <div class="carousel-item white-text" href="#two!" >
                <?php if( get_field('billede_2_i_slideren_copy') ): ?>
    <img src="<?php the_field('billede_2_i_slideren_copy'); ?>" class="" style="object-fit:cover;" width="100%" height="400"  alt=""/>
<?php endif; ?>
<span data-aos="fade-up"
     data-aos-duration="3000" >
                  <h1  style="margin-top:-10%" class="centered" ><?php the_field('tekst_til_karussel_overskrift_2st_billede_copy'); ?></h1>
                  
                  </span>
                </div>

                <div class="carousel-item white-text" href="#Three!" >
                <?php if( get_field('billede_3_i_slideren_copy3') ): ?>
    <img src="<?php the_field('billede_3_i_slideren_copy3'); ?>"class="" style="object-fit:cover;" width="100%" height="400"  alt=""/>
<?php endif; ?>
<span data-aos="fade-up"
     data-aos-duration="3000" >
                  <h1  style="margin-top:-10%" class="centered" ><?php the_field('tekst_til_karussel_overskrift_3st_billede_copy'); ?></h1>
                  
                  </span>
                </div>

                <div class="carousel-item white-text" href="#four!" >
                <?php if( get_field('billede_4_i_slideren_copy4') ): ?>
    <img src="<?php the_field('billede_4_i_slideren_copy4'); ?>" class="" style="object-fit:cover;" width="100%" height="400"  alt=""/>
<?php endif; ?>
<span data-aos="fade-up"
     data-aos-duration="3000" >
                  <h1  style="margin-top:-10%" class="centered" ><?php the_field('tekst_til_karussel_overskrift_3st_billede_copy'); ?></h1>
                  
                  </span>
                </div>

              </div>
                  

            
              <div class="row">
                    <div data-aos="fade-up" data-aos-duration="1500" class="col s12  center"><h1 class="hovedtekst"> <?php the_field('overskrift_velkomstside'); ?> </h1></div>

                    <br>
                   
                    <div data-aos="fade-up" data-aos-duration="1500" class="col s12 l6 ">
                        <h5><?php the_field('text_til_forside'); ?> </h5>
                    </div>
              
                    <div data-aos="fade-up" data-aos-duration="1500" class="col s12 l6 ">
                            <h5><?php the_field('text_til_forside_copy'); ?> </h5>
                        </div>
                       
                    <div data-aos="fade-up" data-aos-duration="1500" class="col s12 l6    ">
                    <h5><?php the_field('text_til_forside_copy2'); ?> </h5>

                    </div>


                    <div data-aos="fade-up" data-aos-duration="1500" class="col offset-l6 s12 l8 ">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6wQ7tVr0Yxo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>

<br>
<br>
    </main>

</div>
 



<?php get_footer(); ?>

  <!--  Scripts-->
  
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src=" https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   

    <script src='<?php echo get_template_directory_uri();  ?>/js/materialize.js'></script>
  <script src='<?php echo get_template_directory_uri();  ?>/js/script.js'></script>



</html>