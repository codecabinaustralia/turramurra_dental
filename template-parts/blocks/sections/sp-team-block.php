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
$id = 'sp-team-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sp-team-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title') ?: 'Your title here...';
$description = get_field('description') ?: 'Description goes here';


?>
<div style="background-image:url('<?php echo get_field('backgroundimage'); ?>')" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> relative w-full bg-no-repeat bg-left-top bgTeam">
        <div class="flex container">
            <div class=" w-full md:w-3/4 mx-auto flex flex-wrap md:flex-no-wrap">
            <?php 
            while( have_rows('people') ) : the_row(); ?>
                <div class="w-full md:w-1/2 md:mx-2 bg-white mt-40 p-16 shadow-lg">
                    <img src="<?php echo get_sub_field('image'); ?>" alt="kamini" class="-mt-56 shadow">
                    <div class="mt-10 text-teal-700 text-xl text-center"><?php echo get_sub_field('name'); ?></div>
                    <div class="text-gray-700 text-xs tracking-wide text-center"><?php echo get_sub_field('job_title'); ?></div>
                    <div class="text-xs text-gray-700 mt-4"><?php echo get_sub_field('bio'); ?></div>
                    <div class="mx-auto hover:bg-teal-700 hover:text-white cursor-pointer mt-2 border-2 border-teal-700 text-teal-700 text-xs font-bold w-1/2 text-center py-1 mt-6">
                        READ MORE
                    </div>
                </div>
            
            <?php endwhile ?>
            </div>
        </div>
    </div>