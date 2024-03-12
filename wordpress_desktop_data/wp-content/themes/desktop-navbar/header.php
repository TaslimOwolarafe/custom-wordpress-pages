<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Desktop_Navbar
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
					<div class="navigation-container w-container">
						<div class="navigation-left">
							<a href="https://ibleducation.com" aria-current="page" class="brand current w-nav-brand w--current">
																	<img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/logo_v2.png" width="217" alt="" class="image-7">

								
							</a>
						</div>
						<nav role="navigation" class="nav-menu w-nav-menu">
							<div class="navigation-right">


								<div><a target="_blank" href="https://aws.amazon.com/marketplace/pp/prodview-bz6um4yt6m7ay" class="db_l h-menu-link">AI Mentor</a>
								</div>

								<div><a target="_blank" href="https://aws.amazon.com/marketplace/pp/prodview-3oqgyocy7qrf2" class="db_l h-menu-link">AI Analytics</a>
								</div>

								<div><a target="_blank" href="https://aws.amazon.com/marketplace/pp/prodview-ugkubjl4fgurm" class="db_l h-menu-link">AI Skills</a>
								</div>

								<div><a href="https://iblstudios.com" class="db_l h-menu-link">AI
										Studio</a>
								</div>


								<div data-hover="1" data-delay="0" class="menu-drop w-dropdown" style="">
									<div data-w-id="9826fc05-3381-3bf4-02d2-f3dad16a92e9" class="nav-link-3 w-dropdown-toggle" id="w-dropdown-toggle-0" aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0" style="color: rgb(187, 187, 188);">
										<div class="nav-link-3 i w-icon-dropdown-toggle" style="color: rgb(187, 187, 188);"></div>
										<div class="nav-link-3" style="color: rgb(187, 187, 188);">About</div>
									</div>
									<nav class="db_list w-dropdown-list" id="w-dropdown-list-0" aria-labelledby="w-dropdown-toggle-0">
										<a href="https://ibleducation.com/about" class="db_l w-dropdown-link" tabindex="0">About
											IBL</a>
										<a href="https://ibleducation.com/clients" class="db_l w-dropdown-link" tabindex="0">Testimonials</a>

									</nav>
								</div>

								<div><a target="_blank" href="https://github.com/ibleducation" class="db_l h-menu-link github-img"><img class="aws-logo grey-logo" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/github-1.png" alt=""></a>
								</div>

								<a href="https://cloud.google.com/blog/topics/public-sector/ibl-educations-genai-based-chat-mentor-google" target="_blank" class="aws-img"><img class="aws-logo grey-logo pos-r" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/Google_2015_logo.svg.png" alt=""></a>								

								<a href="https://ibleducation.com/aws" target="_blank" class="aws-img">
									<img class="aws-logo grey-logo pos-r" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/aws-logo-c.png" alt="">
								</a>



								<a href="https://ibleducation.com/contact-us" class="button-blue-2 register w-button">Contact
									Us</a>
							</div>
						</nav>
						<div data-w-id="9fce1b4f-d010-cdaf-2b31-8bdb19735b53" class="mobile_menu_btn"><img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/mob_menu.png" loading="lazy" sizes="(max-width: 767px) 12.986111640930176px, 100vw" srcset="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/mob_menu.png 500w, https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/mob_menu.png 512w" alt="" class="open_menu">
							<div class="dark_overlay" style="display: none;"></div>
						</div>
						<div class="mob_menu_wr" style="display: none;">
							<div class="mob_header">
								<div class="div-block-54">
									<a data-w-id="aa0cca57-51bb-6681-c9d1-7a08f4ac8e0b" href="#" class="close_mobile_menu w-inline-block"><img src="https://uploads-ssl.webflow.com/5f9968a99ac2b1a9f5952d15/5f9968a99ac2b176e8952e4d_cancel%20(1).png" loading="lazy" alt="" class="image-50"></a>
								</div>
							</div>
							<div class="submenu_div">
								<div class="foundation_submenu">

									<div class="u-menu">
										<a target="_blank" href="https://aws.amazon.com/marketplace/pp/prodview-bz6um4yt6m7ay">AI
											Mentor</a>
									</div>

									<div class="u-menu">
										<a target="_blank" href="https://aws.amazon.com/marketplace/pp/prodview-3oqgyocy7qrf2">AI
											Analytics</a>
									</div>

									<div class=" u-menu">
										<a target="_blank" href="https://aws.amazon.com/marketplace/pp/prodview-ugkubjl4fgurm">AI
											Skills</a>
									</div>

									<div class="u-menu">
										<a target="_blank" href="https://iblstudios.com/">AI
											Studio</a>
									</div>


									<div data-w-id="85cec46c-033b-8932-6db6-9ba35b59d3b4" class="mob_c_courses t">
										<div class="mob_menu_row">
											<div class="m_c_fb">
												<div class="res_text">About</div>
												<img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/5f29919565ec6c81b25782c3_down-arrow-1.png" width="14" sizes="100vw" srcset="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/5f29919565ec6c81b25782c3_down-arrow-1.png 500w, https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/5f29919565ec6c81b25782c3_down-arrow-1.png 512w" alt="" class="image-36h res"><img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/5f29919565ec6c81b25782c3_down-arrow-1.png" alt="" class="image-36 res">
											</div>
										</div>
									</div>
									<div class="submenu_div-2">
										<div class="about_sub">
											<a href="https://ibleducation.com/about" class="sub_menu_option w-inline-block">
												<div class="menu_title">About IBL</div>
											</a>
											<a href="https://ibleducation.com/clients" class="sub_menu_option w-inline-block">
												<div class="menu_title">Testimonials</div>
											</a>
										</div>
									</div>
								</div>


								<div><a target="_blank" href="https://github.com/ibleducation" class="db_l h-menu-link github-img mob-g"><img class="aws-logo grey-logo" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/github-1.png" alt=""></a>
								</div>

								<a href="https://cloud.google.com/blog/topics/public-sector/ibl-educations-genai-based-chat-mentor-google" target="_blank" class="aws-img mobile-aws">
									<img class="aws-logo grey-logo" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/Google_2015_logo.svg.png" alt="">
								</a>

								<a href="https://ibleducation.com/aws" target="_blank" class="aws-img mobile-aws">
									<img class="aws-logo grey-logo" src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/aws-logo-c.png" alt="">
								</a>



								<a href="https://ibleducation.com/contact-us" class="button-blue-2 register contact w-button">Contact Us</a>
							</div>
						</div>
					</div>
				<div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div></div>

