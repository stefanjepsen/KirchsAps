<!DOCTYPE html>
<html <?php language_attributes(  ); ?> >
<head>
    <meta charset=" <?php bloginfo( 'charset' ); ?>" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="  https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
     <!-- Compiled and minified CSS -->
     <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.css">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link href=' <?php echo get_template_directory_uri();  ?>/css/materialize.css' type="text/css" rel="stylesheet" media="screen,projection" />
     
 
    <title><?php echo bloginfo('name'); ?> </title>
    <?php wp_head(  ) ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8NNJXQW5MW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8NNJXQW5MW');
</script>

</head>



<!-- style="margin-top: -32px;" -->

<div class="containerImg responsive-img" >
<?php if( get_field('billede_til_toppen_af_hjemmesiden') ): ?>
    <img src="<?php the_field('billede_til_toppen_af_hjemmesiden'); ?>" class="responsive-img" style="object-fit: cover; height:40vh;" width="100%"   alt=""/>
<?php endif; ?>
                 
                    <div class="bottom-left"> </div>
                    <div class="top-left"> </div>
                    <div class="top-right"> </div>
                    <div class="bottom-right"> </div>
                    <div class="centered">
                    
                    <?php if( get_field('logo_i_toppen_i_billedet') ): ?>
    <img src="<?php the_field('logo_i_toppen_i_billedet'); ?>" style="height:25vh;" alt="" />
<?php endif; ?>
                    
                    </div>
                  </div> 
  


                  <ul id="slide-out" class="sidenav  " style="text-transform: uppercase;">
    <li><div class="user-view">
      <div class="background">
    
      </div>
     
    
    <h5>MENU</h5>
    </div></li>
    <li><div class="divider"></div></li>
    <?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>


    
    <li><a class="sidenav-close  " style="background-color:#292C2F; color:white;" href="#!">LUK MENU</a></li>
  </ul>
  <a style="color: #292C2F; font-size:12vh" href="#" data-target="slide-out" class="sidenav-trigger  waves-effect hide-on-med-and-up"><i style="font-size:50px"  class="material-icons">menu</i> <span class="smalltextforside"> MENU</span></a>


                  
<header class="site-header ">

<div class="site-nav hide-on-small-and-down">
				
				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
      </div>
        
      </header>
      <div class="z-depth-1 abekat hide-on-small-and-down" style=""></div>
      

