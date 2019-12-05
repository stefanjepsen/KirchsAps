<footer  class="footer-distributed">
 
		<div class="footer-left">
 
		<img src=" <?php echo get_template_directory_uri(); ?> /img/Logo.png" style="height: 12vh;" alt="KirchS ApS Logo">

        
		<div  class="footer-links textFooter" >
        <?php
                    
                    $args = array(
                        'theme_location' => 'footer'
                    );
                    
                    ?>
                  <?php wp_nav_menu( $args ); ?>  



                </div>
 
		<p class="footer-company-name">LektieBanden &copy; 2019</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>Søborg Torv 11</span> 2860, Søborg </p>
		</div>
		
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+45 28 40 95 41</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:KirchSalling@gmail.dk">KirchSalling@gmail.dk</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>Din professionelle tømrerpartner </span>
	Vi engagerer os i det i professionelle miljø inden for B2B. 
		</p>
 
		<div class="footer-icons">
 
		<a href="https://www.facebook.com/KirchSaps/" target="_blank"><i class="fab fa-facebook"></i>	</a>
		
		
					
 
		</div>
		<div>
		
		<p style="color:white;">CVR: 38581686</p>
		</div>
		</div>
		
        </footer>
        
        <?php wp_footer(  ); ?>