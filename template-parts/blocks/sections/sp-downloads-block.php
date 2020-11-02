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
$id = 'sp-downloads-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'sp-downloads-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title') ?: 'Your title here...';
$description = get_field('description') ?: 'Description goes here';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> bg-gray-200">
    <div class="relative md:py-16">
      <div class="hidden md:flex w-full h-full z-10 left-0 top-0">
        <div class="w-full md:w-1/3 mx-auto">
          <img src="http://localhost/turramurra/wp-content/uploads/2020/10/dst-white.svg" class="object-fit" />
        </div>
      </div>
      <div class="relative md:absolute z-20 top-0 left-0 w-full mt-0 md:mt-48">
        <div class="w-full md:w-1/2">
          <div class="bg-teal-700 py-10 shadow-innerBg">
            <div class="flex">
              <div class="w-1/4 hidden md:block"></div>
              <div class="w-full md:w-1/2 px-10 md:px-0 text-center md:text-left md:pr-4">
                <h2 class="text-white text-xl"><?php echo $title; ?></h2>
                <p class="text-white text-sm">
                <?php echo $description; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="hidden md:flex">
            <div class="w-1/4"></div>
            <div class="w-1/2 pr-4 flex">
              <div class="flex-none mt-3">
                <h2 class="text-white font-bold mt-4 text-teal-600">
                  Scroll
                  <svg
                    class="ml-2 float-right w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    ></path>
                  </svg>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="relative md:absolute z-40 top-0 left-0 w-full">
        <div class="flex justify-end justify-center py-10 md:py-32 w-3/4 mx-auto md:mx-0 md:ml-auto">
          <div class="w-full md:w-8/12">
            <div class="flex flex-wrap md:flex-no-wrap">
            <?php 
            while( have_rows('packs') ) : the_row(); ?>
            
            <div class="w-full md:w-1/3 mx-2">
                <div class="">
                  <img src="<?php echo get_sub_field('image'); ?>" class="shadow" />
                </div>
                <h2 class="mt-4 text-teal-700 text-center text-xl">
                <?php echo get_sub_field('title'); ?>
                </h2>
                <p class="text-xs text-gray-700 my-4">
                <?php echo get_sub_field('description'); ?>
                </p>
                <div
                  class="cursor-pointer hover:bg-teal-500 hover:text-white rounded p-4 text-teal-700 tracking-wide font-bold text-xs text-center"
                >
                  DOWNLOAD
                </div>
              </div>
           
            <?php endwhile ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>