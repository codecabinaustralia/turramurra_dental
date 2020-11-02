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



		<section class="block5 text-gray-600 text-xs">
			<div class="block5-row grid grid-cols-12 ">
				<div class="col-span-12 lg:col-start-2 lg:col-span-10 px-10 lg:px-0">
					<div class="grid grid-cols-12 my-20 gap-4 lg:gap-12">
						<div class="col-span-12 md:col-span-8 order-2 md:order-1">
							<h3 class="mb-6  text-xl text-primary">
								[H3] Lorem ipsum dolor sit amet
							</h3>
							<ul>
								<li class="flex">
									<i class="mr-5 mt-1 fa fa-arrow-circle-right"></i>
									<span>
										Suspendisse efficitur, elit id porta hendrerit, turpis felis mollis tortor, a
										consectetur est ante vitae
									</span>
								</li>
								<li class="flex">
									<i class="mr-5 mt-1  fa fa-arrow-circle-right"></i>
									<span>
										Maecenas ut vehicula erat, quis hendrerit felis. Nulla at leo malesuada,
										fermentum velit non
									</span>
								</li>
								<li class="flex">
									<i class="mr-5 mt-1  fa fa-arrow-circle-right"></i>
									<span>
										Aliquam pellentesque dictum tristique
									</span>
								</li>
								<li class="flex">
									<i class="mr-5 mt-1  fa fa-arrow-circle-right"></i>
									<span>
										Suspendisse elementum congue arcu, id luctus lorem pulvinar nec
									</span>
								</li>
								<li class="flex">
									<i class="mr-5 mt-1  fa fa-arrow-circle-right"></i>
									<span>
										Nulla ac nulla nec ex scelerisque laoreet. Praesent sollicitudin fermentum
										gravida
									</span>
								</li>
							</ul>
							<div class="content-box text-justify">
								<p class="mt-12 mb-5">
									[Body Copy] Lorem ipsum dolor sit amet, vel congue ipsum. Duis libero dolor,
									vulputate eu suscipit et, pretium ut quam. Quisque consectetur pellentesque
									consectetur. Donec at dictum ipsum. Vestibulum nec libero lectus. Suspendisse magna
									lacus, porttitor quis quam sed, malesuada posuere ex. Cras facilisis dictum
									interdum.
								</p>
								<p class="mb-5">
									Lorem ipsum dolor sit amet, consectetur Duis libero dolor, vulputate eu suscipit et,
									pretium ut quam. Quisque consectetur pellentesque consectetur. Donec at dictum
									ipsum. Vestibulum nec libero lectus. Suspendisse magna lacus, porttitor quis quam
									sed, malesuada posuere ex.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur consectetur pellentesque consectetur. Donec
									at dictum ipsum. Vestibulum nec libero lectus. Suspendisse magna lacus, porttitor
									quis quam sed, malesuada posuere ex.
								</p>
							</div>
							<div class="rollover-links mt-5">
								<ul class="capitalize ">
									<li class="mb-1"><a href="#"
											class="block py-3 border-0 border-b transition duration-300 ease-in-out delay-150">block
											Link<i class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
									<li class="mb-1"><a href="#"
											class=" active block py-3 border-0 border-b transition duration-300 ease-in-out delay-150">block
											Link [rollover]<i class="fa fa-arrow-circle-right mr-2 float-right"></i></a>
									</li>
									<li class="mb-1"><a href="#"
											class="block py-3 border-0 border-b transition duration-300 ease-in-out delay-150">block
											Link<i class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
									<li class="mb-1"><a href="#"
											class="block py-3 border-0 border-b transition duration-300 ease-in-out delay-150">block
											Link<i class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
								</ul>
							</div>
							<h3 class="mt-12 mb-5  text-xl font-bold text-primary">
								[H3] Lorem ipsum dolor sit amet
							</h3>
							<p class="text-justify">
								[Body Copy] Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit a In sit
								amet turpis dictum, tincidunt enim id, sodales lorem. Pellentesque lectus ligula, congue
								volutpat porttitor nec, convallis eget elit. Class aptent taciti society
							</p>
							<div class="faqs mt-5 text-justify">
								<div
									class="faq-item py-3  border-0 border-b transition duration-300 ease-in-out delay-150">
									<div class="faq-header cursor-pointer">
										<a class="block ">
											Lorem ipsum dolor sit amet <i
												class="fa fa-arrow-circle-right mr-2 float-right"></i>
										</a>
									</div>
									<div class="faq-body mt-5 hidden">
										[Body Copy] Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet
										turpis dictum, tincidunt enim id
									</div>
								</div>
								<div
									class="faq-item py-3 border-0 border-b show transition duration-300 ease-in-out delay-150">
									<div class="faq-header cursor-pointer">
										<a class="block ">
											Lorem ipsum dolor sit amet <i
												class="fa fa-arrow-circle-right mr-2 float-right"></i>
										</a>
									</div>
									<div class="faq-body mt-5 ">
										[Body Copy] Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet
										turpis dictum, tincidunt enim id
									</div>
								</div>
								<div
									class="faq-item py-3 border-0 border-b transition duration-300 ease-in-out delay-150">
									<div class="faq-header cursor-pointer">
										<a class="block ">
											Lorem ipsum dolor sit amet <i
												class="fa fa-arrow-circle-right mr-2 float-right"></i>
										</a>
									</div>
									<div class="faq-body mt-5 hidden">
										[Body Copy] Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet
										turpis dictum, tincidunt enim id
									</div>
								</div>
								<div
									class="faq-item py-3 border-0 border-b transition duration-300 ease-in-out delay-150">
									<div class="faq-header cursor-pointer">
										<a class="block ">
											Lorem ipsum dolor sit amet <i
												class="fa fa-arrow-circle-right mr-2 float-right"></i>
										</a>
									</div>
									<div class="faq-body mt-5 hidden">
										[Body Copy] Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet
										turpis dictum, tincidunt enim id
									</div>
								</div>
							</div>
						</div>
						<div class="col-span-12 md:col-span-4 order-1 md:order-2">
							<div class="right-sidebar our-services">
								<h3 class=" mb-6  text-xl font-bold text-primary">
									Our Services
								</h3>
								<ul class="uppercase ">
									<li class="mb-3"><a href="#" class="block py-3 border-0 border-b">estimates<i
												class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
									<li class="mb-3"><a href="#"
											class=" active block py-3 border-0 border-b">settlements<i
												class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
									<li class="mb-3"><a href="#" class="block py-3 border-0 border-b">compliance
											advice<i class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
									<li class="mb-3"><a href="#" class="block py-3 border-0 border-b">cost recovery<i
												class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
									<li class="mb-3"><a href="#" class="block py-3 border-0 border-b">assessments<i
												class="fa fa-arrow-circle-right mr-2 float-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="block6">
			<div class="block6-row grid grid-cols-12">
				<div class="col-span-12 md:col-span-5  left-block"
					style="background: #048DAF url(images/dst.svg) no-repeat 60% center;">
					<div class="overlay">
					</div>
					<div class="content text-white text-justify">
						<h2 class="block-title1 text-2xl font-bold">
							Get in Tocuh
						</h2>
						<p class="mt-4">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et dignissim quam. Phasellus
							vitae ligula in erat tincidunt ultricies malesuada eu ex.
						</p>
						<p class="font-medium my-3 text-white text-left flex"><i
								class="fa fa-phone mr-3 text-2xl"></i><span>(02) 9488 7455</span></p>
						<p class="font-medium my-3 text-white text-left flex"><i
								class="fa fa-fax mr-3 text-2xl"></i><span>(02) 9488 7455</span></p>
						<p class="font-medium my-3 text-white text-left flex"><i
								class="fa fa-envelope mr-3 text-2xl"></i><span>admin@dentalspecialists.com.au</span></p>
						<p class="font-medium my-3 text-white text-left flex"><i
								class="fa fa-map-marker mr-3 text-2xl"></i><span>Suite 2, 1335 Pacific Highway
								Turramurra NSW 2074</span></p>
						<p class="font-medium my-3 text-white text-left flex"><i
								class="fa fa-calendar-check-o mr-3 text-2xl"></i><span>Request an Appointment</span></p>
					</div>
				</div>
				<div class="col-span-12 md:col-span-7 right-block"
					style="background: url(images/map.jpg);background-size:cover;">
					<div class="content text-white">
					</div>
				</div>
			</div>
		</section>