<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'sp-content-sidenav-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sp-content-sidenav';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('text') ?: 'Text goes here';


?>
<section class="block3 text-gray-600 text-xs sp-body-copy">
			<div class="block3-row grid grid-cols-12 ">
				<div class="col-start-2 col-span-10">
				
					<div class="grid grid-cols-12 my-10 gap-x-4 md:gap-x-10">
						<div class="col-span-12 lg:col-span-8">
							
							<?php echo $text; ?>
							
						</div>
						<div class="col-span-12 md:col-span-4 order-1 md:order-2">
							<div class="right-sidebar our-services">
								<h3 class=" mb-6  text-xl font-bold text-primary">
									Our Services
								</h3>

								<?php 
								$args = array(  
									'post_type' => 'services',
									'post_status' => 'publish',
									'orderby' => 'title', 
									'order' => 'ASC', 
								);
							
								$loop = new WP_Query( $args ); 
									
								while ( $loop->have_posts() ) : $loop->the_post(); 
									echo '<ul class="uppercase ">';
									echo '<li class="mb-3"><a href="#" class="block py-3 border-0 border-b">';
									echo the_title();
									echo '<i class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>';
									echo '</ul>';
								endwhile;
							
								wp_reset_postdata();
								?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>