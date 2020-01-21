<?php
/**
 * @package InsightCustom
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<a id="main-content" tabindex="-1"></a>
		<?php
		// check if the flexible content field has rows of data
		if( have_rows('flexible_fields') ):
	    // loop through the rows of data
	    while ( have_rows('flexible_fields') ) : the_row();
				///////////////////////////////////
				// Simple Two Column Block
				//////////////////////////////////
				if( get_row_layout() == 'two_column' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
						<?php
						$col_1 = get_sub_field('col_content_1');
						$col_2 = get_sub_field('col_content_2');
						?>
						<div class="pageWidth flexContainer centerAlignedContainer">
							<?php
							if( $col_1 ): ?>
								<div class="col50">
									<div class="blockText">
										<?php echo $col_1 ?>
									</div>
								</div>
							<?php endif;
							if( $col_2 ): ?>
								<div class="col50">
									<div class="blockText">
										<?php echo $col_2 ?>
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</section>
					<?php
					///////////////////////////////////
					// Simple Three Column Block
					//////////////////////////////////
					elseif( get_row_layout() == 'three_column' ):
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
					<?php
					if(get_sub_field('section_title')):
					?>
					<div class="pageWidth">
		        <?php echo get_sub_field('section_title'); ?>
		      </div>
					<?php endif; ?>
						<?php
							$col_1 = get_sub_field('col_content_1');
							$col_2 = get_sub_field('col_content_2');
							$col_3 = get_sub_field('col_content_3');
						?>
						<div class="pageWidth flexContainer">
						<?php
							if( $col_1 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_1 ?>
									</div>
								</div>
							<?php endif;
							if( $col_2 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_2 ?>
									</div>
								</div>
							<?php endif;
							if( $col_3 ): ?>
								<div class="col30">
									<div class="blockText">
										<?php echo $col_3 ?>
									</div>
								</div>
							<?php
							endif;
							?>
						</div>
					</section>
					<?php
					///////////////////////////////////
					// Testimonial
					//////////////////////////////////
					elseif( get_row_layout() == 'testimonial' ):
					$testimonial = get_sub_field('testimonial_contents');
					?>
					<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection testimonial">
					  <div class="limitWidth">
					    <div class="blockText greenBorder centerText">
								<?php echo $testimonial ?>
							</div>
					  </div>
					</section>
					<?php
				endif;
			endwhile;
		endif;
		?>
		<div class="navWidth">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
		</div>
	</main>
</div>
<?php
get_footer();
