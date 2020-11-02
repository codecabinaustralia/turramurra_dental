<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SurfPacific
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

  <style>


.menu-primary-container ul .sub-menu #menu-primary a{
 border-radius: 0 !important;
 width: 100% !important;
 background-color: #000 !important;
}
.menu-primary-container ul .sub-menu {
  display: none;
  width: 200%;
  background-color: black;
  color: white;
  position: absolute;
  padding-top: 60px;
  margin-top: -40px;
}

.menu-primary-container li:hover .sub-menu{
  display: block;
}

.menu-primary-container li:hover .sub-menu li{
  float:left
}


.menu-primary-container ul {
  
  position: relative;
    margin:26px 0px 20px 0px;
    list-style-type: none;
    list-style: none;
    list-style-image: none;
    text-align:right;
}




.menu-primary-container li {
    padding: 0px 20px 0px 0px;
    display: inline;
} 
#menu-primary a { 
  font-size:0.9em;
  color: #048DAF;
  background-color: #fff;
  padding:20px 10px;
}

#menu-primary a:hover { 
  border-radius:10px;
  background-color: #f5f5f5;
  padding:20px 10px;
}

.ctaside-input input[type=text], .ctaside-input input[type=email], .ctaside-input input[type=phone]{
  width:100% !important;
 color: #718096 !important;
 padding: 18px 10px !important;
 border-bottom: 1px solid #718096;
 background-color: rgba(0,0,0,0); 
 margin-top: 0px;
 font-size: 1em;
}

.ctaside-input input::placeholder, .ctaside-input textarea::placeholder{
  color: #718096 !important;
  text-transform: capitalize !important;

}

.ctaside-input input:focus, .ctaside-input textarea:focus, .ctaside-input select:focus{
  outline: none !important;
  border: none;
  color: #048daf !important;
  border-bottom: 1px solid #048daf;
  background-color: rgba(0,0,0,0); 

}


.ctaside-input textarea{
  width:100% !important;
 color: #718096 !important;
 font-size: 1em;
 text-transform: capitalize;
 padding: 8px 10px !important;
 background-color: rgba(0,0,0,0); 
 /* border-bottom: 1px solid white; */
 height: 80px !important;
}

.ctaside-input input[type=submit]{
  border: 2px solid #718096 !important;
  text-align:center !important;
  color: #718096 !important;
  width: 100% !important;
  padding: 10px 0;
  background-color: rgba(0,0,0,0)
}

.ctaside-input input[type=submit]:hover{
  background-color: #048daf !important;
  color: white !important;
  border: 2px solid #048daf !important;
  cursor:pointer
}

.ctaside-input label{
  font-weight: normal !important;
}

/* CTA Inputs */

.cta-dropDown select{
  width:100% !important;
  text-align: center !important;
 background-color: #81B0C9 !important;
 color: #fff !important;
 font-size: 1em;
 padding: 8px 10px !important;
 border-radius: 50px;
 font-size: 0.8em;
}

.cta-input input[type=text], .cta-input input[type=email], .cta-input input[type=phone]{
  width:100% !important;
 color: #fff !important;
 padding: 8px 10px !important;
 border-bottom: 1px solid white;
 background-color: rgba(0,0,0,0); 
 margin-top: 0px;
 font-size: 0.8em;
}

.cta-input input::placeholder, textarea::placeholder{
  color: white !important;
  text-transform: capitalize !important;

}

.cta-input input:focus, .cta-input textarea:focus, select:focus{
  outline: none !important;
  border: none;
  border-bottom: 1px solid white;
  background-color: rgba(0,0,0,0); 

}


.cta-input textarea{
  width:100% !important;
 color: #fff !important;
 font-size: 0.8em;
 text-transform: capitalize;
 padding: 8px 10px !important;
 background-color: rgba(0,0,0,0); 
 /* border-bottom: 1px solid white; */
 height: 100px !important;
}

.cta-input input[type=submit]{
  border: 2px solid white !important;
  text-align:center !important;
  color: white !important;
  width: 100% !important;
  background-color: rgba(0,0,0,0)
}

.cta-input input[type=submit]:hover{
  background-color: rgba(255,255,255,0.3);
  cursor:pointer
}

.cta-input label{
  font-weight: normal !important;
}

.sp-body-copy ul li {
      /* font-family: "Font Awesome 5 Brands";
      content: "\f0a9"; */
      padding: 0 10px 0 0;
}

.sp-body-copy h1{
  color: #718096 !important;
  font-size: 1.2em !important;
  margin: 16px 0;
}

.sp-body-copy h2{
  color: #8DB0C9 !important;
  font-size: 1.6em !important;
  margin: 16px 0;
}

.sp-body-copy h2 strong{
  color: #048DAF !important;
  font-size: 1.3em !important;
  margin: 16px 0;
}

.sp-body-copy h3{
  color: #048DAF !important;
  font-size: 1.6em !important;
  /* font-weight:bold; */
  margin: 16px 0;
}

.sp-body-copy h4{
  color: #8DB0C9 !important;
  font-size: 1.2em !important;
  margin: 16px 0;
}

.sp-body-copy blockquote{
  color: #8DB0C9 !important;
  font-size: 1.1em !important;
  font-weight:bold;
  margin: 16px 0;
}

.sp-body-copy p{
  color: #718096 !important;
  font-size: 1em !important;
  margin: 16px 0;
}

.breadcrumb_last{
    color: rgb(20,142,176) !important;
}


.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.logo-image{
	height:60px;
}
.text-primary{
	color:#048DAF
}
.bg-primary{
	background-color:#048DAF
}
.border-primary{
	border-color:#048DAF;
}
header nav ul li a{
	font-size:16px;
	font-weight:500;
}
/*right block2 */
.block2{
	height:500px;
}

.block2-row{
	height:100%;
}
/*left  block */
.block2 .left-block{
	height:100%;
	width:63%;
	float:left;
}
.block2 .left-block .content{
	    width: 82%;
    margin: 0 auto;
    position: absolute;
    left: 0px;
    right: 0px;
    /* top: 50%; */
    /* transform: translateY(-50%); */
	
} 

.block-title1{
	/* font-size:24px; */
}
/*right block */
.block2 .right-block{
	
    background-position: center center;
    background-size: initial;
    height: 100%;
    width: 37%;
    float: left;
	position:relative;
}

.block2 .right-block .overlay{
	position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(4, 141, 175,.9);
	left:0px;
	top:0px;
}
.block2 .right-block .content{
	    width:80%;
    margin: 0 auto;
    position: absolute;
    left: 0px;
    right: 0px;
    top: 50%;
    transform: translateY(-50%);
	
} 
.select-opt-bg{
	background:#81B0C9;
	-webkit-appearance:none;
-moz-appearance:none;
appearance:none;
}
label.select-box {position:relative;display:block;}
label.select-box:after {
    content:'<>';
    font:14px "Consolas", monospace;
    color:#000;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right: 15px;
    top: 11px;
    padding:0 0 2px;
    position:absolute;
    pointer-events:none;
}

.breadcrumbs a.active{
	color:#048DAF
}
.our-services a:hover{
	color:#048DAF;
	border-bottom:1px solid;
}
.our-services a.active{
	color:#048DAF;
	border-bottom:1px solid;
}
.rollover-links a:hover{
	color:#048DAF;
	border-bottom:1px solid;
	  font-weight: 600;
}
.rollover-links a.active{
	color:#048DAF;
	border-bottom:1px solid;
	  font-weight: 600;
}
.faqs .show {
	border-bottom:1px solid #048DAF;;
}
.faqs .show .faq-header{
	color:#048DAF;
	font-weight: 600;
}
.faqs .show .faq-header i{
	transform: rotate(90deg);
}
.block4{
    background-size: cover;
	padding-bottom:60px;
}
.faq-item .faq-body{

}
button:focus{
	outline:none;
}
.block6{
	height:500px;
}

.block6-row{
	height:100%;
}
.block6 .left-block{
    background-position: right center;
    background-size: initial;
	position:relative;
}

.block6 .left-block .overlay{
	position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(4, 141, 175,.9);
	left:0px;
	top:0px;
}
.block6 .left-block .content{
	    width:75%;
    margin-left:auto;
    position: absolute;
    left: 0px;
    right:50px;
    top: 50%;
    transform: translateY(-50%);
	
} 

/*left  block */
.block6 .right-block{
    background-size: cover;
}
.block6 .right-block .content{
	    width: 82%;
    margin: 0 auto;
    position: absolute;
    left: 0px;
    right: 0px;
    top: 50%;
    /* transform: translateY(-50%); */
	
} 










			@media (min-width: 1200px){
.container {
	max-width:1180px !Important;
	
}
			}
			@media (max-width: 992px){
				.block4{
				padding: 30px 0px;
			}
			}
			
			@media (min-width:768px) and (max-width:900px){
				.block2 .left-block .content {
    width: 92%;
				}
			}
			@media (max-width:768px){
.block2 .left-block{
	width:100%;
	float:none;
}
.block2{
	height:350px;
}
.block2 .left-block .content{
	top: 25%;
    transform: translateY(0%);
}
.block2 .right-block{
	width:100%;
	float:none;
}
.block4{
	    padding: 0px;
}
.block6{
	height:auto;
}
.block6 .left-block {
	padding:30px 0px;
}
.block6 .left-block .content{
	position: static;
    width: 100%;
    transform: translateY(0%);
    padding-left: 2.5rem;
    padding-right: 2.5rem;
}
.block6 .right-block{
	    padding: 150px 0px;
}

      }

      
      </style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		
		<div>
    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <nav class="bg-white shadow fixed top-0 z-50 w-full">
      <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex justify-between p-2">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button -->
            <button
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
              aria-label="Main menu"
              aria-expanded="false"
            >
              <!-- Icon when menu is closed. -->
              <!--
            Heroicon name: menu

            Menu open: "hidden", Menu closed: "block"
          -->
              <svg
                class="block h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
              <!-- Icon when menu is open. -->
              <!--
            Heroicon name: x

            Menu open: "block", Menu closed: "hidden"
          -->
              <svg
                class="hidden h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
          <div class="flex-1 flex">
            <div class="flex-shrink-0 flex items-center w-full ">
			
			<?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
<a href="/"><img src="<?php echo $image[0]; ?>" alt="Turramurra Dental" width="143" class="block lg:hidden mx-auto flex-none"></a>
<a href="/"><img src="<?php echo $image[0]; ?>" alt="Turramurra Dental" width="183" class="hidden lg:block"></a>


            </div>
          </div>
          <div
            class="flex-2 flex items-center justify-end sm:items-stretch sm:justify-start"
          >
            <div class="hidden sm:ml-6 sm:flex">
            <?php wp_nav_menu('Primary'); ?>
              
              <span
                class="inline-flex items-center px-4 pt-1 text-sm font-medium leading-5 text-teal-700 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out"
              >
                <svg
                  class="w-4 h-4 mt-1 ml-2"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                  ></path>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
      <div class="hidden sm:hidden">
        <div class="pt-2 pb-4">
          <a
            href="#"
            class="block pl-3 pr-4 py-2 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-teal-700 transition duration-150 ease-in-out"
            >Home</a
          >
        </div>
      </div>
    </nav>
  </div>

		
	</header><!-- #masthead -->
