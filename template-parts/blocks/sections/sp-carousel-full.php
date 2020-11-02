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
$title = get_field('title') ?: 'Your title here...';
$description = get_field('description') ?: 'Description goes here';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> relative flex flex-wrap bg-teal-500 w-full mt-64">
<div class="-mt-64 mx-auto">
<?php
echo do_shortcode('[smartslider3 slider="7"]');
?>
</div>    

<div class="w-full hidden md:block absolute z-10 p-24 left-0 top-0">
      <div class="flex">
        <div class="mt-16 w-1/3 mx-auto">
        
          <img
            src="../assets/images/dst-white.svg"
            class="object-fit"
            style="opacity: .1;"
          />
        </div>
      </div>
    </div>

 


    <div class="z-20 w-3/4 mx-auto text-white text-center text-lg mt-10 mb-20">
      <h2>Welcome to Dental Specialists Turramurra</h2>
      <div class="text-xs text-justify mt-4">
        The Dental Specialists Turramurra are regarded as one of the leading
        providers of exceptional high-quality dental care on Sydney’s North
        Shore. The difference we offer at DST is a comprehensive, holistic
        approach to dental care. While most dental specialists are only equipped
        to supply a very particular skillset, we offer high-quality restorative,
        orthodontic and aesthetic dental care. Our versatility ensures that our
        patients always receive the most suitable treatment and desired outcome.
        When you visit DST, you will experience first-hand our standards of
        professionalism and excellence, matched with state-of-the-art equipment
        and professional procedures. Most importantly, our customer-focused
        philosophy allows our patients to improve their smiles within a friendly
        and relaxed environment.
      </div>
    </div>
  </div>