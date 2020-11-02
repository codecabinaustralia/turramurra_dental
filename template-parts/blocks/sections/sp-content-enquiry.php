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
$id = 'sp-content-enquiry-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sp-content-enquiry';
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
						<div class="mt-10 md:mt-0 col-span-12 lg:col-span-4">
							<div class="enquiry py-12 px-6 shadow-xl">
								<h3 class="text-center text-xl font-bold text-primary">Make an Enquiry</h3>
								<p class="my-6">For more information, or to get in contact, please fill out the form
									below</p>
									<?php
echo do_shortcode('[gravityform id="3" title="false" description="false"]');
?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>