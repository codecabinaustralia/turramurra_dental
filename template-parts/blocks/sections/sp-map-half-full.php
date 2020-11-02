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

$title = get_field('title') ?: 'Title goes here';
$description = get_field('description') ?: 'Description here';
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$request = get_field('request');
$phoneIcon = get_field('phoneIcon');
$emailIcon = get_field('emailIcon');
$addressIcon = get_field('addressIcon');
$requestIcon = get_field('requestIcon');


?>
<div style="background-image:url('<?php echo get_field('backgroundimage'); ?>')" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> flex w-full bg-teal-700 shadow-innerBgTop">
    <div class="flex container relative">
      <img src="http://localhost/turramurra/wp-content/uploads/2020/10/dst-white.svg" class="absolute top-0 left-0 mt-10" width="400" style="opacity: .1;">
      <div class="w-full md:w-3/4 mx-auto z-50">
        <div class="flex flex-wrap md:flex-no-wrap">
            <div class="w-full md:w-4/12 py-16 px-10 md:px-0">
                <h2 class="text-xl text-white"><?php echo $title ?></h2>
                <div class="text-white text-xs pr-10 my-4"><?php echo $description ?></div>
                <div class="my-4 text-white text-sm"><?php echo $phoneIcon ?> <?php echo $phone ?></div>
                <div class="my-4 text-white text-sm"><?php echo $faxIcon ?> <?php echo $fax ?></div>
                <div class="my-4 text-white text-sm"><?php echo $emailIcon ?> <?php echo $email ?></div>
                <div class="my-4 text-white text-sm"><?php echo $addressIcon ?> <?php echo $address ?></div>
                <div class="my-4 text-white text-sm"><?php echo $requestIcon ?> <?php echo $request ?></div>
            </div>
            <div class="w-8/12 bg-gray-100 relative">
                
            </div>
        </div>
        </div>
      </div>
    </div>