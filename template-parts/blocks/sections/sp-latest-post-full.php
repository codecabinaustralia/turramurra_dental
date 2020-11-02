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

$latestpost = get_field('latestpost') ?: 'Latest Post';

$verticalTitle = get_field('verticalTitle') ?: 'Vertical title';

$button_text = get_field('buttonText') ?: "Button text here";

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> flex w-full bg-gray-200 shadow-innerBgTop">

    <div class="flex container">
      <div class="w-3/4 mx-auto">
        <div class="flex flex-wrap md:flex-no-wrap">
          <div class="w-full md:w-7/12 py-16 relative">
            <div style="transform: rotate(-90deg);
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);"
              class="mt-40 -ml-32 absolute top-0 left-0 tracking-wider rotate-90 text-teal-700 text-3xl flex-shrink"
            >
              <?php echo $verticalTitle; ?>
            </div>
            <div class="text-sm mb-4"><?php echo esc_html( explode(" ", $latestpost->post_date_gmt)[0] ); ?></div>
            <div class="text-teal-700 text-xl">
            <?php echo esc_html( $latestpost->post_title ); ?>
            </div>
            <div class="paragraph text-xs text-gray-700 pt-4">
            <?php echo $latestpost->post_excerpt ?>
            </div>
            <div
              class="uppercase hover:bg-teal-700 hover:text-white cursor-pointer border-2 border-teal-700 text-teal-700 text-xs font-bold w-1/2 text-center py-1 mt-4"
            >
            <?php echo $button_text; ?>
            </div>
          </div>
          <div class="w-5/12 pl-20 hidden md:block">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $latestpost->ID ), 'single-post-thumbnail' ); ?>
            <img src="<?php echo $image[0]; ?>" />
          </div>
        </div>
      </div>
    </div>
  </div>