<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta"><?php _e("Posteado", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("por", "bonestheme"); ?> <?php the_author_posts_link(); ?>  <?php _e("en", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<div class="social_share_bar">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style ">
							<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
							<a class="addthis_button_tweet" tw:via="JefeFinal"></a>
							<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
							<a class="addthis_counter addthis_pill_style"></a>
							</div>
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50dd43fe65e59342"></script>
							<!-- AddThis Button END -->
							</div>

							<?php the_content(); ?>
							
							<div class="social_share_bar">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style ">
							<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
							<a class="addthis_button_tweet" tw:via="JefeFinal"></a>
							<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
							<a class="addthis_counter addthis_pill_style"></a>
							</div>
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50dd43fe65e59342"></script>
							<!-- AddThis Button END -->
							</div>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Editar post","bonestheme"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template('',true); ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No encontrado", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Lo siento, pero lo solicitado no ha sido encontrado en el sitio.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>