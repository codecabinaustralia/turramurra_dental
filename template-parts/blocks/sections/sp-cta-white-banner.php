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
$id = 'latestBlogPostFeature-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'latestBlogPostFeature';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

$title = get_field('title') ?: 'Title goes here';
$description = get_field('description') ?: 'Description here';
$phone = get_field('phone') ?: 'Phone number here';
$button_text = get_field('buttonText') ?: "Button text here";

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> w-full flex bg-white py-16 deepShadow">
        <div class="flex container">
            <div class="w-3/4 mx-auto">
                <div class="flex flex-wrap md:flex-no-wrap">
                    <div class="w-full md:w-5/12 text-center md:text-left">
                        <div class="text-teal-700 text-xl">
                            <?php echo $title ?>
                        </div>
                        <div class="text-xs text-gray-700 mt-3">
                          <?php echo $description ?>
                        </div>
                    </div>
                    <div class="w-full md:w-3/12 text-center mt-4 text-xl text-gray-800 tracking-tight">Call <span class="font-bold"><?php echo $phone ?></span></div>
                    <div class="hidden md:block w-1/12 mt-4 text-xl text-gray-800 tracking-tight">or</div>
                    <div class="w-full md:w-3/12"><div class="w-full mx-auto hover:bg-teal-700 hover:text-white cursor-pointer border-2 border-teal-700 text-teal-700 text-xs font-bold w-1/2 text-center py-1 mt-4">
                    <?php echo $button_text ?>
                    </div></div>
                </div>
            </div>
        </div>
    </div>