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
$id = 'textLogo-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'textLogo';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$small_title = get_field('small_title') ?: 'Large title goes here...';
$large_title = get_field('large_title') ?: 'Large title goes here';
$description = get_field('description') ?: 'Description goes here';
$cta_title = get_field('cta_title') ?: 'CTA Title goes here';
$cta_description = get_field('cta_description') ?: 'CTA Description goes here';
$button_text = get_field('button_text') ?: 'Button Text goes here';
$image = get_field('image') ?: 250;

?>

<section class="block2">
    <div class="block2-row ">
        <div class="left-block"
            style="background: url(<?php echo $image; ?>);background-size: cover;">
            <div class="content text-white pt-40">
                <p >
                    <?php echo $small_title ?>
                </p>
                <h2 class="block-title1 text-2xl font-bold">
                <?php echo $large_title ?>
                </h2>
                <p class="mt-4">
                    <?php echo $description ?>
                </p>
            </div>
        </div>
        <div class=" hidden md:block right-block"
            style="background: #048DAF url(images/dst.svg) no-repeat center center;">
            <div class="overlay">
            </div>
            <div class="content text-white z-50">
                <h2 class="block-title1 text-2xl font-bold">
                <?php echo $cta_title ?>
                </h2>
                <p class="mt-4">
                <?php echo $cta_description ?>
                </p>
                <div class="form-control w-full  text-left mt-12">
                    <button
                        class="hover:bg-white hover:text-teal-600 bg-transparent py-1 px-16 uppercase text-white font-medium border-2 border-white border-solid outline-none transition duration-300 ease-in-out delay-75"><?php echo $button_text ?></button>
                </div>
            </div>

            
        </div>

        
    </div>
    
</section>

<section class="block3 text-gray-600 text-xs">
			<div class="block3-row grid grid-cols-12 ">
				<div class="col-start-2 col-span-10">
					<div class="flex uppercase font-medium my-4 breadcrumbs">
<?php
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
	<p id="breadcrumbs text-teal-700">','</p>');
}
?>
</div>
</div>
</div>
</section>


