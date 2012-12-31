<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<article id="post-not-found" class="clearfix">
						
						<header>

							<div class="hero-unit">
							
								<h1>Epic 404 - Artículo no encontrado.</h1>
								<p>Vuelve al inicio o usa el botón de buscar para encontrar lo que querías.</p>
															
							</div>
													
						</header> <!-- end article header -->
					
						<section class="post_content">
							
							<p>Lo que estabas buscando no fue encontrado, intenta buscar nuevamente o utilizando el formulario a continuación.</p>

							<div class="row-fluid">
								<div class="span12">
									<?php get_search_form(); ?>
								</div>
							</div>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>