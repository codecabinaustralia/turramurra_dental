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
$id = 'sp-text-logo-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sp-text-logo-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title') ?: 'Your title here...';
$description = get_field('description') ?: 'Description goes here';
$image = get_field('image') ?: 295;

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> flex container md:my-20">
    <div class="w-full md:w-3/4 mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4">
            <img
                    class="lg:block hidden mx-auto md:mx-0 mb-4 md:mb-0"
                    src='<?php echo $image; ?>'
                    alt="Turramurra Logo"
                    width="183"
                    />
            </div>
            <div class="w-full md:w-3/4 pl-0 md:pl-10 text-center md:text-left">
            <h2 class="text-xs text-teal-600 "><?php echo $title; ?></h2>
            <div class="text-gray-600 text-xs mt-3 px-10 md:px-0"><?php echo $description; ?></div>
            </div>
        </div>    
    </div>
</div>