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
$id = 'sp-forms-half-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sp-forms-half';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

$image = get_field('image') ?: 250;
$title = get_field('title') ?: 'Title goes here';
$description = get_field('description') ?: 'Description here';
$phone = get_field('phone') ?: 'Phone number here';
$button_text = get_field('buttonText') ?: "Button text here";

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> relative flex h-full">
    <div class="absolute z-10 flex w-full top-0 left-0 h-full">
      <img
                    class="object-cover object-top"
                    src='<?php echo $image; ?>'
                    />
    </div>

    <div class="flex z-20 w-full h-full md:mb-20">
      <div class="flex w-full md:w-3/4 mx-auto justify-end h-full">
        <div
          class="w-full md:w-5/12 flex justify-center"
          style="background-color:rgba(4,140,174,0.9)"
        >
          <div class="text-white text-center py-10">
            <h2 class="text-xl">
              <?php echo $title ?>
            </h2>
            <div class="text-xs my-4">
            <?php echo $description ?>
            </div>
            <div class="text-base font-bold flex">
              <div class="flex-none mx-auto my-4">
                <svg
                  class="w-6 h-6 float-left mr-2"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                  ></path>
                </svg>
                <?php echo $phone ?>
              </div>
            </div>


  
           
            <div class="px-10">
            <?php
echo do_shortcode('[gravityform id="1" title="false" description="false"]');
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>