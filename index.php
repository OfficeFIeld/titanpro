<?php
   $base_url = "http://localhost:91/titanpro/";
   $assets_url = $base_url."assets/";
   $css_url = $assets_url . "css/";
   $js_url = $assets_url . "js/";
   $img_url = $assets_url . "images/";
   
   ?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
   <!--<![endif]-->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
      <title>TitanPro</title>
      <link rel='stylesheet' id='wp-block-library-css' href='<?= $css_url ?>style.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='public-css' href='<?= $css_url ?>public.css' type='text/css' media='all' />
      <link rel='stylesheet' id='popular-posts-css' href='<?= $css_url ?>wpp.css?ver=5.3.5' type='text/css' media='all' />
      <link rel='stylesheet' id='swiper-css' href='<?= $css_url ?>swiper.css' type='text/css' media='all' />
      <link rel='stylesheet' id='fontawesome-css' href='<?= $css_url ?>fontawesome.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='font-css' href='<?= $css_url ?>fonts.css' type='text/css' media='all' />
      <link rel='stylesheet' id='plugin-css' href='<?= $css_url ?>plugin.css' type='text/css' media='all' />
      <link rel='stylesheet' id='thaw-grid-css' href='<?= $css_url ?>thaw-grid.css' type='text/css' media='all' />
      <link rel='stylesheet' id='style-css' href='<?= $css_url ?>style.css' type='text/css' media='all' />
      <link rel='stylesheet' id='style-responsive-css' href='<?= $css_url ?>responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-css' href='<?= $css_url ?>elementor-icons.min' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-animations-css' href='<?= $css_url ?>animations.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-frontend-css' href='<?= $css_url ?>frontend.min.css?ver=3.2.5' type='text/css' media='all' />
      <style id='elementor-frontend-inline-css' type='text/css'>
         @font-face{font-family:eicons;src:url(<?= $css_url ?>fonts/eicons.html?5.10.0);src:url(<?= $css_url ?>fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(<?= $css_url ?>fonts/eicons.woff2?5.10.0) format("woff2"),url(<?= $css_url ?>fonts/eicons.woff?5.10.0) format("woff"),url(<?= $css_url ?>fonts/eicons.ttf?5.10.0) format("truetype"),url(<?= $css_url ?>fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
      </style>
      <link rel='stylesheet' id='elementor-post-72-css' href='<?= $css_url ?>post.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-pro-css' href='<?= $css_url ?>elementor/frontend.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-global-css' href='<?= $css_url ?>elementor/global.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-628-css' href='<?= $css_url ?>elementor/post.css' type='text/css' media='all' />
      <style id="google-fonts-1-css" media="all">
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 100;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiAyp8kv8JHgFVrJJLmE0tCMPc.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 200;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmv1pVF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 300;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLm21lVF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 400;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiGyp8kv8JHgFVrJJLucHtF.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 500;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmg1hVF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 600;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmr19VF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 700;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLmy15VF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 800;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLm111VF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 900;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiDyp8kv8JHgFVrJJLm81xVF9eL.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 100;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiGyp8kv8JHgFVrLPTucHtF.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 200;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLFj_Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 300;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 400;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiEyp8kv8JHgFVrJJfedw.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 500;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 600;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 700;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 800;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLDD4Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 900;
         src: url(<?= $css_url ?>fonts/s/poppins/v15/pxiByp8kv8JHgFVrLBT5Z1xlEA.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 100;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOiCnqEu92Fr1Mu51QrEzAdKg.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 300;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOjCnqEu92Fr1Mu51TjASc6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOkCnqEu92Fr1Mu51xIIzc.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 500;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOjCnqEu92Fr1Mu51S7ACc6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOjCnqEu92Fr1Mu51TzBic6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 900;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOjCnqEu92Fr1Mu51TLBCc6CsE.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 100;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 300;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 500;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
         }
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 900;
         src: url(<?= $css_url ?>fonts/s/roboto/v27/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');
         }
      </style>
      <script type='text/javascript' src='<?= $js_url ?>jquery/jquery.min.js' id='jquery-core-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>love-it.js' id='love-it-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>cookies.js' id='jquery-coookies-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>public.js?ver=1.0.0' id='blutube-js'></script>
      <!-- <script type='application/json' id='wpp-json'>
         /*{"sampling_active":0,"sampling_rate":100,"ajax_url":"https:\/\/blutube.themesawesome.com\/wp-json\/wordpress-popular-posts\/v1\/popular-posts","ID":628,"token":"cfcf769a38","lang":0,"debug":0}*/
         </script> -->
      <script type='text/javascript' src='<?= $js_url ?>wpp.min.js?ver=5.3.5' id='wpp-js-js'></script>
      <!-- <link rel="https://api.w.org/" href="../wp-json/index.html" />
         <link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/628.html" />
         <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://themesawesome.com/" />
         <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.html" /> -->
      <link rel="stylesheet" href="<?= $css_url ?>custom.css"/>
      <!-- <link rel="icon" href="../wp-content/uploads/sites/162/2021/06/cropped-fav-icon-32x32.png" sizes="32x32" />
         <link rel="icon" href="../wp-content/uploads/sites/162/2021/06/cropped-fav-icon-192x192.png" sizes="192x192" />
         <link rel="apple-touch-icon" href="../wp-content/uploads/sites/162/2021/06/cropped-fav-icon-180x180.png" />
         <meta name="msapplication-TileImage" content="https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/06/cropped-fav-icon-270x270.png" /> -->
      <link rel="stylesheet" href="<?= $css_url ?>custom2.css"/>
   </head>
   <body id="body" class="page-template page-template-elementor_header_footer page page-id-628 elementor-default elementor-template-full-width elementor-kit-72 elementor-page elementor-page-628">
      <div id="main-wrapper" class="main-wrapper clearfix">
         <header class="header header-custom clearfix">
            <div class="header-left text-left clearfix">
               <div class="head-item logo-image logo-head">
                  <a href="javascript:void(0)">
                  <img src="<?= $img_url ?>logo.jpg" alt="TitanPro" width="200"/>
                  </a>
               </div>
               <input id="main-menu-state" type="checkbox" />
               <label class="main-menu-btn sub-menu-triger" for="main-menu-state">
               <span class="main-menu-btn-icon"></span>
               </label>
               <nav class="menu main-menu head-item">
                  <!-- <div class="menu-mobile-add">
                     <a href="../myaccount.html">Upload</a>
                  </div> -->
                  <ul id="menu-menu-main-header" class="sm sm-clean">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $base_url ?>">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $base_url ?>/recently_added.php">Recently Added</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $base_url ?>/popular_videos.php">Popular</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-57">
                        <a href="<?= $base_url ?>categories.php">Categories</a>
                        <ul class="sub-menu">
                           <?php $cat = array("General",
                                       "Stock",
                                       "Crypto",
                                       "Forex",
                                       "Due Diligence",
                                       "Market Analysis",
                                       "Trading & Investing",
                                       "Technical",
                                       "News & Press",
                                       "Educational",
                                       "Events & Conference",
                                       "Others");
                                       foreach($cat as $category) { 
                                             $friendly_cat =  str_replace(" & ", "-", $category); ?>
                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-896"><a href="<?= $base_url ?>/<?= $friendly_cat ?>.php"><?= $category ?></a></li>
                                       <?php } ?>
                        </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $base_url ?>/channels.php">Channels</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $base_url ?>/shows.php">Shows</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $base_url ?>/people.php">People</a></li>



                     <!-- <li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-57">
                        <a href="../index.html">Home</a>
                        <ul class="sub-menu">
                           <li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-896"><a href="../index.html">Home Style 1</a></li>
                           <li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897"><a href="../home-2/index.html">Home Style 2</a></li>
                           <li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-628 current_page_item menu-item-898"><a href="index.html" aria-current="page">Home Style 3</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-541" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-541">
                        <a href="../categories/index.html">Videos</a>
                        <ul class="sub-menu">
                           <li id="menu-item-1020" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1020"><a href="../author/creator2/index.html">Creator Video Page</a></li>
                           <li id="menu-item-540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-540"><a href="../video-category/autos-vehicles/index.html">Individual Video Categories</a></li>
                           <li id="menu-item-542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-542"><a href="../video/release-clean-in-anyone-parts-sure-the-of-around-was/index.html">Youtube Video</a></li>
                           <li id="menu-item-543" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-543"><a href="../video/produce-or-cost-into-had-because/index.html">Vimeo Video</a></li>
                           <li id="menu-item-544" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-544"><a href="../video/self-hosted-video/index.html">Self Hosted Video</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-576" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-576"><a href="../blog/index.html">Blog</a></li>
                     <li id="menu-item-546" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-546">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                           <li id="menu-item-577" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-577"><a href="../about-us/index.html">About Us</a></li>
                           <li id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="../contact-us/index.html">Contact Us</a></li>
                           <li id="menu-item-578" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-578"><a href="../faq/index.html">FAQ</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-1542" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1542"><a href="https://themesawesome.zendesk.com/hc/en-us/categories/360006116491-Bluetube">Docs</a></li> -->
                  </ul>
                  <div class="menu-mobile-add"></div>
               </nav>
            </div>
            <div class="header-right text-right clearfix ">
               <div class="header-info-wrapper">
                  <div class="search-wrap head-info-item">
                     <form method="get" class="searchform" action="#" role="search">
                        <input type="search" class="field" name="s" value="" id="s" placeholder="Search Video..." />
                        <input type="hidden" name="post_type" value="blutube-video" />
                        <button type="submit" class="submit search-button open" value=""><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="call-btn head-info-item">
                     <div class="item-wrapper">
                        <!-- <a href="../myaccount.html" class="button-basic add-video"><i class="fa fa-video-camera"></i> Upload</a> -->
                        <a href="../myaccount.html" class="sign-log">Sign In</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div data-elementor-type="wp-page" data-elementor-id="628" class="elementor elementor-628" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
               <section class="elementor-section elementor-top-section elementor-element elementor-element-44dde50 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="44dde50" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ee2e10" data-id="1ee2e10" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-5362a4e5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5362a4e5" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-61f84db3" data-id="61f84db3" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-48b38974 elementor-widget elementor-widget-heading" data-id="48b38974" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <h2 class="elementor-heading-title elementor-size-default">Spotlight</h2>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-5dbe8bb0 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="5dbe8bb0" data-element_type="widget" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-1ed7423f elementor-widget elementor-widget-blutube-video-block" data-id="1ed7423f" data-element_type="widget" data-widget_type="blutube-video-block.default">
                              <div class="elementor-widget-container">
                                 <div class="post-loop">
                                    <div class="video-wrap style-5 ele rand-5915">
                                       <div class="swiper-container">
                                          <div class="swiper-wrapper">
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="../video/self-hosted-video/index.html">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>KICK_O_STOCKS.jpg" alt="7/11 interview with @kickostocks (OTCmethod.com)" data-no-retina />
                                                      </a>
                                                   </div>
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>otc_club.jpg" data-no-retina alt="TheOTCclub">
                                                         <span><a href="javascript:void(0)">TheOTCclub</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">7/11 interview with @kickostocks (OTCmethod.com)</a></h4>
                                                         <span class="views">203 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="javascript:void(0)">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>ant_n_teddy_1.webp" alt="The Halt Episode 6: Incredible Bob Interview" data-no-retina />
                                                      </a>
                                                   </div>
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>ant_n_teddy.jpg" data-no-retina alt="Ant & Teddy">
                                                         <span><a href="javascript:void(0)">Ant & Teddy</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">The Halt Episode 6: Incredible Bob Interview</a></h4>
                                                         <span class="views">176 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="javascript:void(0)">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>1000_bitcoin_shorts.webp" alt="Bitcoin hits 1000% SHORTS!!" />
                                                      </a>
                                                   </div>
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>ryan_rozbiani.jpg" data-no-retina alt="Ryan Rozbiani">
                                                         <span><a href="javascript:void(0)">Ryan Rozbiani</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">Bitcoin hits 1000% SHORTS!!</a></h4>
                                                         <span class="views">232 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             
                                             
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="javascript:void(0)">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>cash_kreator.webp" alt="CBBT (Cerebain Biotech) Stock Analysis and Due Diligence" data-no-retina />
                                                      </a>
                                                   </div>
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>cash_kreator.jpg" data-no-retina alt="Cash Kreator">
                                                         <span><a href="javascript:void(0)">Cash Kreator</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">CBBT (Cerebain Biotech) Stock Analysis and Due Diligence</a></h4>
                                                         <span class="views">161 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="swiper-pagination"></div>
                                    </div>
                                    <script>
                                       (function ($) {
                                       
                                        $(document).ready(function () {
                                       
                                          var swiper = new Swiper('.video-wrap.rand-5915 .swiper-container', {
                                            slidesPerView: 1,
                                            spaceBetween: 20,
                                                    loop : false,
                                                            pagination: {
                                              el: '.video-wrap.rand-5915 .swiper-pagination',
                                              clickable: true,
                                            },
                                                    breakpoints: {
                                              0: {
                                              slidesPerView: 1,
                                              spaceBetween: 20,
                                            
                                              },
                                              
                                              768: {
                                              slidesPerView: 3,
                                              spaceBetween: 20,
                                              
                                              },
                                       
                                              1025: {
                                              slidesPerView: 4,
                                              spaceBetween: 20,
                                              },
                                       
                                            },
                                          });
                                        });
                                       
                                       })( jQuery );
                                    </script>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>




               <section class="elementor-section elementor-top-section elementor-element elementor-element-44dde50 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="44dde50" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ee2e10" data-id="1ee2e10" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-5362a4e5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5362a4e5" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-61f84db3" data-id="61f84db3" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-48b38974 elementor-widget elementor-widget-heading" data-id="48b38974" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <h2 class="elementor-heading-title elementor-size-default">People</h2>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-5dbe8bb0 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="5dbe8bb0" data-element_type="widget" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-1ed7423f elementor-widget elementor-widget-blutube-video-block" data-id="1ed7423f" data-element_type="widget" data-widget_type="blutube-video-block.default">
                              <div class="elementor-widget-container">
                                 <div class="post-loop">
                                    <div class="video-wrap style-jd ele rand-5916">
                                       <div class="swiper-container">
                                          <div class="swiper-wrapper">
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>otc_club.jpg" data-no-retina alt="TheOTCclub" style="width:auto;height:auto;max-width:none">
                                                      </div>
                                                      <div class="post-title">
                                                         TheOTCclub
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>ant_n_teddy.jpg" data-no-retina alt="Ant & Teddy" style="width:auto;height:auto;max-width:none">
                                                      </div>
                                                      <div class="post-title">
                                                         Ant & Teddy
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>ryan_rozbiani.jpg" data-no-retina alt="Ryan Rozbiani" style="width:auto;height:auto;max-width:none">
                                                      </div>
                                                      <div class="post-title">
                                                         Ryan Rozbiani
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>cash_kreator.jpg" data-no-retina alt="Cash Kreator" style="width:auto;height:auto;max-width:none">
                                                      </div>
                                                      <div class="post-title">
                                                         Cash Kreator
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>radio_silent.jpg" data-no-retina alt="Radio Silent Play" style="width:auto;height:auto;max-width:none">
                                                      </div>
                                                      <div class="post-title">
                                                         Radio Silent Play
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                       <div class="swiper-pagination"></div>
                                    </div>
                                    <script>
                                       (function ($) {
                                       
                                        $(document).ready(function () {
                                       
                                          var swiper = new Swiper('.video-wrap.rand-5916 .swiper-container', {
                                            slidesPerView: 1,
                                            spaceBetween: 20,
                                                    loop : false,
                                                            pagination: {
                                              el: '.video-wrap.rand-5916 .swiper-pagination',
                                              clickable: true,
                                            },
                                                    breakpoints: {
                                              0: {
                                              slidesPerView: 2,
                                              spaceBetween: 20,
                                            
                                              },
                                              
                                              768: {
                                              slidesPerView: 5,
                                              spaceBetween: 20,
                                              
                                              },
                                       
                                              1025: {
                                              slidesPerView: 10,
                                              spaceBetween: 20,
                                              },
                                       
                                            },
                                          });
                                        });
                                       
                                       })( jQuery );
                                    </script>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>


               <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-39449f4c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="39449f4c" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f2573e5" data-id="7f2573e5" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-dc44d61 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="dc44d61" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4125128" data-id="4125128" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-e8f4a4e elementor-widget elementor-widget-heading" data-id="e8f4a4e" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <h2 class="elementor-heading-title elementor-size-default">Editor Choice</h2>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-682a238 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="682a238" data-element_type="widget" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-c4d4c5e elementor-widget elementor-widget-blutube-video-block" data-id="c4d4c5e" data-element_type="widget" data-widget_type="blutube-video-block.default">
                              <div class="elementor-widget-container">
                                 <div class="video-wrap style-3 ele rand-6588">
                                    <div class="swiper-container">
                                       <div class="swiper-wrapper">
                                          <div class="video-item swiper-slide" style="background-image: url(<?= $img_url ?>fl1c.jpg); background-size: cover;  min-height: 100vh;">
                                             <div class="inner-img-video">
                                                <div class="tag-wrapper meta-top">
                                                   <a href="../video-category/editor-choice/index.html" rel="tag">Editor Choice</a> <a href="../video-category/film/index.html" rel="tag">Film</a> 
                                                </div>
                                                <h1 class="video-title"><a href="../video/appointed-decorated-the-croissants-thought/index.html">Appointed decorated the croissants thought</a></h1>
                                                <div class="excerpt-video">
                                                   Upper mars temple frame. There basically, due are and collection her a their and that differentiates not, train however merely... 
                                                </div>
                                                <div class="author-wrapper-vid">
                                                   <figure class="author-ava">
                                                      <img src="<?= $img_url ?>pp2-1-150x150.jpg" alt="Jimmy Rilley" data-no-retina>
                                                   </figure>
                                                   <span class="vcard"><a href="../author/creator2/index.html"> Jimmy Rilley</a></span>
                                                </div>
                                             </div>
                                             <div class="overlay-hero"></div>
                                          </div>
                                          <div class="video-item swiper-slide" style="background-image: url(<?= $img_url ?>ent1atiny.jpg); background-size: cover;  min-height: 100vh;">
                                             <div class="inner-img-video">
                                                <div class="tag-wrapper meta-top">
                                                   <a href="../video-category/editor-choice/index.html" rel="tag">Editor Choice</a> <a href="../video-category/entertainment/index.html" rel="tag">Entertainment</a> 
                                                </div>
                                                <h1 class="video-title"><a href="../video/sported-of-put-concepts-using-candidates/index.html">Sported of put concepts using candidates</a></h1>
                                                <div class="excerpt-video">
                                                   It coast way being came in after circumstances was behind shall if story neighbours at cat nor to that who... 
                                                </div>
                                                <div class="author-wrapper-vid">
                                                   <figure class="author-ava">
                                                      <img src="<?= $img_url ?>pp10-150x150.jpg" alt="Lucas Stalone" data-no-retina>
                                                   </figure>
                                                   <span class="vcard"><a href="../author/creator7/index.html"> Lucas Stalone</a></span>
                                                </div>
                                             </div>
                                             <div class="overlay-hero"></div>
                                          </div>
                                          <div class="video-item swiper-slide" style="background-image: url(<?= $img_url ?>comedy4atiny.jpg); background-size: cover;  min-height: 100vh;">
                                             <div class="inner-img-video">
                                                <div class="tag-wrapper meta-top">
                                                   <a href="../video-category/comedy/index.html" rel="tag">Comedy</a> <a href="../video-category/editor-choice/index.html" rel="tag">Editor Choice</a> 
                                                </div>
                                                <h1 class="video-title"><a href="../video/background-her-unmoved-municipal-duties-overall-yet-before/index.html">Background her unmoved municipal duties, overall yet before.</a></h1>
                                                <div class="excerpt-video">
                                                   Pass box far buttons deep from scolded white rippedup, elite. To bit eyes. Gilded back he detailed to diagrams but... 
                                                </div>
                                                <div class="author-wrapper-vid">
                                                   <figure class="author-ava">
                                                      <img src="<?= $img_url ?>pp4-150x150.jpg" alt="Isabel Adams" data-no-retina>
                                                   </figure>
                                                   <span class="vcard"><a href="../author/creator5/index.html"> Isabel Adams</a></span>
                                                </div>
                                             </div>
                                             <div class="overlay-hero"></div>
                                          </div>
                                          <div class="video-item swiper-slide" style="background-image: url(<?= $img_url ?>animation7atiny.jpg); background-size: cover;  min-height: 100vh;">
                                             <div class="inner-img-video">
                                                <div class="tag-wrapper meta-top">
                                                   <a href="../video-category/animation/index.html" rel="tag">Animation</a> <a href="../video-category/editor-choice/index.html" rel="tag">Editor Choice</a> 
                                                </div>
                                                <h1 class="video-title"><a href="../video/torn-wonder-which-a-behind-never-as-own-pretty-kind/index.html">Torn wonder, which a behind never as own pretty kind</a></h1>
                                                <div class="excerpt-video">
                                                   To came they&#8217;d cost. Language and which done of far follow time. The by makers on. Contract, which no&#8230; Completely... 
                                                </div>
                                                <div class="author-wrapper-vid">
                                                   <figure class="author-ava">
                                                      <img src="<?= $img_url ?>pp10-150x150.jpg" alt="Lucas Stalone" data-no-retina>
                                                   </figure>
                                                   <span class="vcard"><a href="../author/creator7/index.html"> Lucas Stalone</a></span>
                                                </div>
                                             </div>
                                             <div class="overlay-hero"></div>
                                          </div>
                                          <div class="video-item swiper-slide" style="background-image: url(<?= $img_url ?>autos3atiny.jpg); background-size: cover;  min-height: 100vh;">
                                             <div class="inner-img-video">
                                                <div class="tag-wrapper meta-top">
                                                   <a href="../video-category/autos-vehicles/index.html" rel="tag">Autos &amp; Vehicles</a> <a href="../video-category/editor-choice/index.html" rel="tag">Editor Choice</a> 
                                                </div>
                                                <h1 class="video-title"><a href="../video/self-hosted-video/index.html">Self-Hosted Video</a></h1>
                                                <div class="excerpt-video">
                                                   Them. We quarter as it pass would as copy relative was the it always of lifted are plans. A gods,... 
                                                </div>
                                                <div class="author-wrapper-vid">
                                                   <figure class="author-ava">
                                                      <img src="<?= $img_url ?>pp9-150x150.jpg" alt="Anneke Leitz" data-no-retina>
                                                   </figure>
                                                   <span class="vcard"><a href="../author/creator10/index.html"> Anneke Leitz</a></span>
                                                </div>
                                             </div>
                                             <div class="overlay-hero"></div>
                                          </div>
                                       </div>
                                       <div class="swiper-pagination"></div>
                                       <div class="prev-next-wrap">
                                          <div class="prev-next-wrap-inner">
                                             <div class="swiper-button-next"></div>
                                             <div class="swiper-button-prev"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <script>
                                    (function ($) {
                                    
                                      $(document).ready(function () {
                                    
                                        var swiper = new Swiper('.video-wrap.rand-6588 .swiper-container', {
                                            slidesPerView: 1,
                                            spaceBetween: 0,
                                          effect: 'fade',
                                          fadeEffect: {
                                            crossFade: true
                                          },
                                            loop : true,
                                                  pagination: {
                                                  el: '.video-wrap.rand-6588 .swiper-pagination',
                                                  clickable: true,
                                                },
                                                navigation: {
                                                  nextEl: '.video-wrap.rand-6588 .swiper-button-next',
                                                  prevEl: '.video-wrap.rand-6588 .swiper-button-prev',
                                                },
                                                        autoplay: {
                                              delay: 4000,
                                              disableOnInteraction: false,
                                            },
                                                });
                                      });
                                    
                                    })( jQuery );
                                 </script> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->
               <!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-3dbebf6a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3dbebf6a" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28337ddb" data-id="28337ddb" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-12f1745f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="12f1745f" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-74aca14b" data-id="74aca14b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-6f4ff33f elementor-widget elementor-widget-heading" data-id="6f4ff33f" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <h2 class="elementor-heading-title elementor-size-default">Recent Videos</h2>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-74d7532 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="74d7532" data-element_type="widget" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-37f8344a elementor-widget elementor-widget-blutube-video-block" data-id="37f8344a" data-element_type="widget" data-widget_type="blutube-video-block.default">
                              <div class="elementor-widget-container">
                                 <div class="video-wrap ele style-1 grid rand-2904">
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/the-really-on-broader-sitting/index.html">
                                             <img src="<?= $img_url ?>Podcast5-535x355.jpg" alt="The really on broader sitting" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp6-150x150.jpg" alt="Tim Carrey" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/the-really-on-broader-sitting/index.html">The really on broader sitting</a></h4>
                                       <span class="vcard"><a href="../author/creator6/index.html"> Tim Carrey</a></span>
                                       <div class="views-video">
                                          <span>126 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/and-the-desires-a-copy/index.html">
                                             <img src="<?= $img_url ?>Podcast4-535x355.jpg" alt="And the desires a copy" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp6-150x150.jpg" alt="Tim Carrey" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/and-the-desires-a-copy/index.html">And the desires a copy</a></h4>
                                       <span class="vcard"><a href="../author/creator6/index.html"> Tim Carrey</a></span>
                                       <div class="views-video">
                                          <span>128 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/the-would-the-in-quite-with/index.html">
                                             <img src="<?= $img_url ?>Podcast3-535x355.jpg" alt="The would the in quite with" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp6-150x150.jpg" alt="Tim Carrey" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/the-would-the-in-quite-with/index.html">The would the in quite with</a></h4>
                                       <span class="vcard"><a href="../author/creator6/index.html"> Tim Carrey</a></span>
                                       <div class="views-video">
                                          <span>127 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/like-spread-our-periodic-the-and/index.html">
                                             <img src="<?= $img_url ?>Podcast1-535x355.jpg" alt="Like spread our periodic the and" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp6-150x150.jpg" alt="Tim Carrey" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/like-spread-our-periodic-the-and/index.html">Like spread our periodic the and</a></h4>
                                       <span class="vcard"><a href="../author/creator6/index.html"> Tim Carrey</a></span>
                                       <div class="views-video">
                                          <span>118 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/into-to-the-to-according-law/index.html">
                                             <img src="<?= $img_url ?>Podcast2-535x355.jpg" alt="Into to the to according law" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp6-150x150.jpg" alt="Tim Carrey" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/into-to-the-to-according-law/index.html">Into to the to according law</a></h4>
                                       <span class="vcard"><a href="../author/creator6/index.html"> Tim Carrey</a></span>
                                       <div class="views-video">
                                          <span>117 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/the-dream-are-yield-times-and/index.html">
                                             <img src="<?= $img_url ?>traditional5-535x355.jpg" alt="The dream. Are yield times, and" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp8-150x150.jpg" alt="Mao Huiqing" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/the-dream-are-yield-times-and/index.html">The dream. Are yield times, and</a></h4>
                                       <span class="vcard"><a href="../author/creator9/index.html"> Mao Huiqing</a></span>
                                       <div class="views-video">
                                          <span>115 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/fresh-on-pouring-that-had-writing/index.html">
                                             <img src="<?= $img_url ?>News7-535x355.jpg" alt="Fresh on pouring that had writing" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp4-150x150.jpg" alt="Isabel Adams" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/fresh-on-pouring-that-had-writing/index.html">Fresh on pouring that had writing</a></h4>
                                       <span class="vcard"><a href="../author/creator5/index.html"> Isabel Adams</a></span>
                                       <div class="views-video">
                                          <span>113 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/uniforms-avarice-so-people-disciplined/index.html">
                                             <img src="<?= $img_url ?>News6-535x355.jpg" alt="uniforms, avarice so, people disciplined" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp4-150x150.jpg" alt="Isabel Adams" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/uniforms-avarice-so-people-disciplined/index.html">uniforms, avarice so, people disciplined</a></h4>
                                       <span class="vcard"><a href="../author/creator5/index.html"> Isabel Adams</a></span>
                                       <div class="views-video">
                                          <span>118 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/for-editorials-made-the-that-with/index.html">
                                             <img src="<?= $img_url ?>traditional4-535x355.jpg" alt="For editorials made the that with" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp8-150x150.jpg" alt="Mao Huiqing" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/for-editorials-made-the-that-with/index.html">For editorials made the that with</a></h4>
                                       <span class="vcard"><a href="../author/creator9/index.html"> Mao Huiqing</a></span>
                                       <div class="views-video">
                                          <span>116 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                    <div class="video-item col-span-2 md:col-span-5 sm:col-span-10">
                                       <div class="video-thumb">
                                          <a href="../video/expenses-looked-this-the-had-day/index.html">
                                             <img src="<?= $img_url ?>News5-535x355.jpg" alt="Expenses looked this the had day." data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                             <div class="overlay-video"></div>
                                          </a>
                                          <figure class="author-ava">
                                             <img src="<?= $img_url ?>pp4-150x150.jpg" alt="Isabel Adams" data-no-retina>
                                          </figure>
                                       </div>
                                       <h4 class="video-title"><a href="../video/expenses-looked-this-the-had-day/index.html">Expenses looked this the had day.</a></h4>
                                       <span class="vcard"><a href="../author/creator5/index.html"> Isabel Adams</a></span>
                                       <div class="views-video">
                                          <span>109 Views</span>
                                          <span>3 months ago</span>
                                       </div>
                                    </div>
                                 </div>
                                 <script>
                                    (function ($) {
                                      var winWidth = $(window).innerWidth();
                                    
                                      function changingWrapBlutube() {
                                        var winWidth = $(window).innerWidth(),
                                          gridMain = $('.video-wrap.style-1.rand-2904');
                                        if(winWidth > 0 && winWidth < 769) {
                                          var posisi = "mob";
                                                  gridMain.removeClass('grid-cols-12');
                                            gridMain.addClass('grid-cols-10');
                                              } else if(winWidth > 769 && winWidth < 1025) {
                                          var posisi = "tab";
                                                  gridMain.removeClass('grid-cols-12');
                                            gridMain.addClass('grid-cols-10');
                                              } else {
                                          var posisi = "desktop";
                                                  gridMain.removeClass('grid-cols-12');
                                            gridMain.addClass('grid-cols-10');
                                              }
                                      }
                                    
                                      $(document).ready(function () {
                                        changingWrapBlutube();
                                      });
                                    
                                      $( window ).on('resize', function() { 
                                        changingWrapBlutube();
                                      });
                                    
                                    })( jQuery );
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section> -->
               <?php 
               $channels = array("TheOTCclub"=>array("videos"=>array('The OTC club presents: 7/14" @MattRiv2 talks stocks"','The OTC club presents: 7/7 "@MattRiv2 talks stocks"','7/11 interview with @kickostocks (OTCmethod.com)','6/27 Interview with @pennystokgurus','6/13 interview w/ @Dogecoinrise','6/6 Interview with @Radiosilentplay'),"images"=>array('otc_club_1.webp','otc_club_3.webp','otc_club_2.webp','otc_club_4.webp','otc_club_5.webp','otc_club_6.webp')),
                                 "Ant & Teddy"=>array("videos"=>array('The Halt Episode 6: Incredible Bob Interview',"Birds Aren't Real... Or Are They? [The Halt]",'NFTs... Bullish or BS? Can New EV Companies Stay Alive? [The Halt]','Long Term Investments [SPCE DKNG NNDM] to Get Rich. Feat. Brady [The Halt]','The Trading Origin of Brady From Atlas [The Halt]','The Halt Episode 5: The Brady Interview'),"images"=>array('ant_n_teddy_1.webp','ant_n_teddy_2.webp','ant_n_teddy_2.webp','ant_n_teddy_2.webp','ant_n_teddy_2.webp','ant_n_teddy_3.webp')),
                                 "Ryan Rozbiani"=>array("videos"=>array('Massive Earnings week starts tmrw! #stockmarket #tesla','MAPS Stock | Best Cannabis Stock | Explained in Just 8 minutes','MARA Stock | Exposing the Real Bitcoin Mining Numbers',"July's CPI Data Could Shake the Stock Market | WATCH BEFORE 7/13!!",'AMC Stock HUGE Catalyst for Monday PLUS Disney Stock','LIVE: AMC is BACK!! | Wins Battle Against Shorts!!'),"images"=>array('ryan_1.webp','ryan_2.webp','ryan_3.webp','ryan_4.webp','ryan_5.webp','ryan_6.webp')),
                                 "Cash Kreator"=>array("videos"=>array('ABML (American Battery Metals) CEO Interview with Doug Cole','$IDEX (Ideanomics) UPDATE! EARNINGS AND NEW BUS!','CTRM STOCK TO EXPLODE? Castor Maritime Stock Analysis','$SURG (SurgePays) Stock Analysis and Due Diligence','IDEX (Ideanomics) BUYS ENERGICA (HUGE UPDATE)!','$ZOM (Zomedica Stock) - HUGE UPDATE!'),"images"=>array('cash_1.webp','cash_2.webp','cash_3.webp','cash_4.webp','cash_5.webp','cash_6.webp')),
                                 "Radio Silent Play"=>array("videos"=>array('Is BITCOIN going to squeeze , what Ethereum is telling us','THIS STOCK WILL BE HUGE BECAUSE ITS IN MUSHROOM AND CRYPTO SPACE','WHY THIS PENNY STOCK IS ABOUT TO GO INSANE','THIS WAS JUST REVEALED and WHAT STOCK CAN BENEFIT BIG because of it.','Top Penny stocks  to buy if your looking for gems on this July 4 Trading week','Could this be the #1 Penny stock in July? If it Launches a Gold Crypto coin, quite possibly'),"images"=>array('rsp_1.webp','rsp_2.webp','rsp_3.webp','rsp_1.webp','rsp_5.webp','rsp_6.webp'))); ?>
                                 <?php $chn_inc=0; foreach($channels as $channel => $details) { ?>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-1dca1dca elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1dca1dca" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-86e907d" data-id="86e907d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-7730da2f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7730da2f" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4de15934" data-id="4de15934" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-5bb85a16 elementor-widget elementor-widget-heading" data-id="5bb85a16" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <h2 class="elementor-heading-title elementor-size-default">Trending in <?= $channel ?></h2>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-558354b9 elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="558354b9" data-element_type="widget" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-2d6da48 elementor-widget elementor-widget-blutube-video-block" data-id="2d6da48" data-element_type="widget" data-widget_type="blutube-video-block.default">
                              <div class="elementor-widget-container">
                                 <div class="post-loop">
                                    <div class="video-wrap style-5 ele rand-787<?= $chn_inc ?>">
                                       <div class="swiper-container">
                                          <div class="swiper-wrapper">
                                             <?php $detail_inc = 0; foreach($details['videos'] as $video) { ?>
                                                <div class="video-item swiper-slide">
                                                   <div class="post-wrap">
                                                      <div class="post-thumb">
                                                         <a href="javascript:void(0)">
                                                            <div class="play-button-hover">
                                                               <i class="fa fa-play play-button"></i>
                                                            </div>
                                                            <?php if(!empty($details['images'])) { ?>
                                                               <img src="<?= $img_url . $details['images'][$detail_inc] ?>" alt="$video" data-no-retina />
                                                            <?php } else { ?>
                                                            <img src="<?= $img_url ?>traveling5-535x355.jpg" alt="Of in nonsense, they ocean. On" data-no-retina />
                                                            <?php } ?>
                                                         </a>
                                                      </div>
                                                      <div class="post-content">
                                                         <div class="post-author clearfix">
                                                            <img src="<?= $img_url ?>pp7-150x150.jpg" data-no-retina alt="Eloisa Campagna">
                                                            <span><a href="javascript:void(0)"><?= $channel ?></a></span>
                                                         </div>
                                                         <div class="post-title">
                                                            <h4><a href="javascript:void(0)"><?= $video ?></a></h4>
                                                            <span class="views">125 Views</span>
                                                            <span class="hours">3 months ago</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             <?php $detail_inc++; } ?>
                                          </div>
                                       </div>
                                       <div class="swiper-pagination"></div>
                                    </div>
                                    <script>
                                       (function ($) {
                                       
                                        $(document).ready(function () {
                                       
                                          var swiper = new Swiper('.video-wrap.rand-787<?= $chn_inc ?> .swiper-container', {
                                            slidesPerView: 1,
                                            spaceBetween: 20,
                                                    loop : true,
                                                            pagination: {
                                              el: '.video-wrap.rand-787<?= $chn_inc ?> .swiper-pagination',
                                              clickable: true,
                                            },
                                                    breakpoints: {
                                              0: {
                                              slidesPerView: 1,
                                              spaceBetween: 20,
                                            
                                              },
                                              
                                              768: {
                                              slidesPerView: 2,
                                              spaceBetween: 20,
                                              
                                              },
                                       
                                              1025: {
                                              slidesPerView: 5,
                                              spaceBetween: 20,
                                              },
                                       
                                            },
                                          });
                                        });
                                       
                                       })( jQuery );
                                    </script>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <?php $chn_inc++; } ?>
               
               <section class="elementor-section elementor-top-section elementor-element elementor-element-aa35d8a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="aa35d8a" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-no">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b663709" data-id="b663709" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-84800b3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="84800b3" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-no">
                                 <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e92497b" data-id="e92497b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-c7aa3b5 elementor-widget elementor-widget-heading" data-id="c7aa3b5" data-element_type="widget" data-widget_type="heading.default">
                                          <div class="elementor-widget-container">
                                             <h2 class="elementor-heading-title elementor-size-default">Latest News</h2>
                                          </div>
                                       </div>
                                       <div class="elementor-element elementor-element-cb903dc elementor-widget__width-initial elementor-widget elementor-widget-spacer" data-id="cb903dc" data-element_type="widget" data-widget_type="spacer.default">
                                          <div class="elementor-widget-container">
                                             <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-f432d6e elementor-widget elementor-widget-blutube-post-block" data-id="f432d6e" data-element_type="widget" data-widget_type="blutube-post-block.default">
                              <div class="elementor-widget-container">
                                 <div class="blog-post main-blog-loop masonry-style-loop row">
                                    <div class="blog-item column column-4">
                                       <div class="wrapper">
                                          <div class="post-content">
                                             <div class="wrapper-inner-blog">
                                                <div class="post-image">
                                                   <a href="javascript:void(0)">
                                                   <img width="500" height="333" src="<?= $img_url ?>features9.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" srcset="https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features9.jpg 500w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features9-300x200.jpg 300w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features9-50x33.jpg 50w" sizes="(max-width: 500px) 100vw, 500px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <img src="<?= $img_url ?>pp9-150x150.jpg" alt="Anneke Leitz" data-no-retina />
                                                      <span>by <a href="javascript:void(0)"> Anneke Leitz</a></span>
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      Personalities no&#8230; Being wherein wrong the to the table </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <div class="swap">April 21, 2021</div>
                                                   </div>
                                                   <div class="excerpt">
                                                      Sisters sometimes have testimony each all has safe sort any word at to a... 
                                                   </div>
                                                   <div class="meta-top"><a href="javascript:void(0)" rel="category tag">Event</a> <a href="javascript:void(0)" rel="category tag">News</a></div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="javascript:void(0)" class="float-link"></a>
                                       </div>
                                    </div>
                                    <div class="blog-item column column-4">
                                       <div class="wrapper">
                                          <div class="post-content">
                                             <div class="wrapper-inner-blog">
                                                <div class="post-image">
                                                   <a href="javascript:void(0)">
                                                   <img width="800" height="632" src="<?= $img_url ?>features8.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" srcset="https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features8.jpg 800w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features8-300x237.jpg 300w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features8-768x607.jpg 768w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features8-50x40.jpg 50w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <img src="<?= $img_url ?>pp11-150x150.jpg" alt="Akim Pushkin" data-no-retina />
                                                      <span>by <a href="javascript:void(0)"> Akim Pushkin</a></span>
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      The once technology advised with two a the design gone </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <div class="swap">April 21, 2021</div>
                                                   </div>
                                                   <div class="excerpt">
                                                      The to attempt, noting issues there would careful for no presentations. And overgrown intentionally... 
                                                   </div>
                                                   <div class="meta-top"><a href="javascript:void(0)" rel="category tag">News</a> <a href="javascript:void(0)" rel="category tag">Update</a></div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="javascript:void(0)" class="float-link"></a>
                                       </div>
                                    </div>
                                    <div class="blog-item column column-4">
                                       <div class="wrapper">
                                          <div class="post-content">
                                             <div class="wrapper-inner-blog">
                                                <div class="post-image">
                                                   <a href="javascript:void(0)">
                                                   <img width="800" height="533" src="<?= $img_url ?>features7.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" srcset="https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features7.jpg 800w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features7-300x200.jpg 300w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features7-768x512.jpg 768w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features7-50x33.jpg 50w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <img src="<?= $img_url ?>pp2-1-150x150.jpg" alt="Jimmy Rilley" data-no-retina />
                                                      <span>by <a href="javascript:void(0)"> Jimmy Rilley</a></span>
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      The good this concept lamps, furnished scarfs, ability distance and </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <div class="swap">April 21, 2021</div>
                                                   </div>
                                                   <div class="excerpt">
                                                      He problem usual. Gods bale examples the uninspired, he the so have her the... 
                                                   </div>
                                                   <div class="meta-top"><a href="javascript:void(0)" rel="category tag">News</a> <a href="javascript:void(0)" rel="category tag">Update</a></div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="javascript:void(0)" class="float-link"></a>
                                       </div>
                                    </div>
                                    <div class="blog-item column column-4">
                                       <div class="wrapper">
                                          <div class="post-content">
                                             <div class="wrapper-inner-blog">
                                                <div class="post-image">
                                                   <a href="javascript:void(0)">
                                                   <img width="800" height="533" src="<?= $img_url ?>features6.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" srcset="https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features6.jpg 800w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features6-300x200.jpg 300w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features6-768x512.jpg 768w, https://blutube.themesawesome.com/wp-content/uploads/sites/162/2021/04/features6-50x33.jpg 50w" sizes="(max-width: 800px) 100vw, 800px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <img src="<?= $img_url ?>pp10-150x150.jpg" alt="Lucas Stalone" data-no-retina />
                                                      <span>by <a href="javascript:void(0)"> Lucas Stalone</a></span>
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      Go of knows, from ancient but think then a parts </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <div class="swap">April 13, 2021</div>
                                                   </div>
                                                   <div class="excerpt">
                                                      Back and I the and space frame. Both by is by day. Boss&#8217;s of... 
                                                   </div>
                                                   <div class="meta-top"><a href="javascript:void(0)" rel="category tag">News</a></div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="javascript:void(0)" class="float-link"></a>
                                       </div>
                                    </div>
                                 </div>
                                 <script type="text/javascript">
                                    (function($) {
                                      'use strict';
                                    
                                      $(document).ready(function(){
                                            var $gridMain = $('.main-blog-loop.masonry-style-loop').imagesLoaded( function() {
                                                // init Masonry after all images have loaded
                                                $gridMain.isotope({
                                                    transitionDuration: '0.65s',
                                                    initLayout: true,
                                                    columnWidth: '.blog-item',
                                                    itemSelector: '.blog-item',
                                                    fitWidth: true,
                                                    stagger: 30,
                                                });
                                            });
                                        });
                                    
                                        $(window).resize(function() {
                                            var $gridMain = $('.main-blog-loop.masonry-style-loop');
                                            $gridMain.isotope('layout');
                                        });
                                    
                                    })(jQuery);
                                 </script>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <footer id="footer" class="footer clearfix">
            <div class="footer-wrapper">
               <div class="footer-top">
                  <div class="pad-container clearfix">
                     <div class="footer-widget-areas grid grid-cols-12">
                        <div class="footer-widget item col-span-3 sm:col-span-12">
                           <div id="custom_html-2" class="widget_text widget-footer widget_custom_html">
                              <div class="textwidget custom-html-widget">
                                 <a href="javascript:void(0)">
                                 <img src="../wp-content/uploads/sites/162/2021/05/logo-blutube-35.png" alt="Footer Logo" />
                                 </a>
                                 <p style="margin-top: 20px;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta finibus justo, vestibulum finibus justo gravida ac. Phasellus hendrerit elementum turpis, ac ornare lectus imperdiet sed.
                                 </p>
                                 <a href="javascript:void(0)" class="footer-button">
                                 <span>About Us</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="footer-widget item col-span-3 sm:col-span-12">
                           <div id="blutube_trending_video-widget-2" class="widget-footer widget_blutube_trending_video">
                              <div class="title">
                                 <h4 class="widget-title">Trending Video</h4>
                              </div>
                              <div class="sidebar-trending-vid sidebar-trending-post">
                                 <div class="post-item video-item">
                                    <div class="inner-post-vid">
                                       <div class="post-image">
                                          <a href="javascript:void(0)">
                                             <img src="<?= $img_url ?>animation7atiny.jpg" alt="Torn wonder, which a behind never as own pretty kind" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             Torn wonder, which a behind never as own pretty kind </a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Lucas Stalone" rel="author">
                                          Lucas Stalone </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="post-item video-item">
                                    <div class="inner-post-vid">
                                       <div class="post-image">
                                          <a href="javascript:void(0)">
                                             <img src="<?= $img_url ?>autos3atiny.jpg" alt="Self-Hosted Video" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             Self-Hosted Video </a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Anneke Leitz" rel="author">
                                          Anneke Leitz </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="post-item video-item">
                                    <div class="inner-post-vid">
                                       <div class="post-image">
                                          <a href="javascript:void(0)">
                                             <img src="<?= $img_url ?>fl1c.jpg" alt="Appointed decorated the croissants thought" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             Appointed decorated the croissants thought </a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Jimmy Rilley" rel="author">
                                          Jimmy Rilley </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="footer-widget item col-span-3 sm:col-span-12">
                           <div id="blutube_video_category-widget-2" class="widget-footer widget_blutube_video_category">
                              <div class="title">
                                 <h4 class="widget-title">Categories Video</h4>
                              </div>
                              <div class="sidebar-categories-video">
                                 <ul>
                                    <li>
                                       <a href="javascript:void(0)">Animation</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Autos &amp; Vehicles</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Blog</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Comedy</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">E-Sport</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Editor Choice</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Education</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Entertainment</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Events</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="footer-widget item col-span-3 sm:col-span-12">
                           <div id="blutube_video_creator-widget-2" class="widget-footer widget_blutube_video_creator">
                              <div class="title">
                                 <h4 class="widget-title">Creators</h4>
                              </div>
                              <div class="sidebar-creator-video">
                                 <div class="author-creator">
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>pp9-150x150.jpg" alt="Anneke Leitz" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Anneke Leitz </a>
                                          </h5>
                                          <span>21 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>pp11-150x150.jpg" alt="Akim Pushkin" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Akim Pushkin </a>
                                          </h5>
                                          <span>12 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>pp10-150x150.jpg" alt="Lucas Stalone" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Lucas Stalone </a>
                                          </h5>
                                          <span>18 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>pp2-1-150x150.jpg" alt="Jimmy Rilley" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Jimmy Rilley </a>
                                          </h5>
                                          <span>21 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img alt='' src='https://secure.gravatar.com/avatar/5188ce89078203663bae878400f36360?s=50&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/5188ce89078203663bae878400f36360?s=100&#038;d=mm&#038;r=g 2x' class='avatar avatar-50 photo' height='50' width='50' loading='lazy' /></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             edu forni </a>
                                          </h5>
                                          <span>0 Videos</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer-bottom">
                  <div class="footer-bot-content">
                     <div class="footer-logo">
                        <div class="foot-logo logo-image">
                           <a href="javascript:void(0)">
                           <!-- <img src="../wp-content/uploads/sites/162/2021/05/logo-blutube-25.png" alt="" /> -->
                           </a>
                        </div>
                     </div>
                     <div class="copyright-wrap">
                        <div class="copyright">
                           Copyright 2021 Blutube. Built by Themes Awesome. 
                        </div>
                     </div>
                     <div class="footer-social">
                        <ul>
                           <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fab fa-twitch"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fab fa-vimeo"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <link rel='stylesheet' id='font-awesome-css' href='<?= $css_url ?>fontawesome.min.css' type='text/css' media='all' />
      <script type='text/javascript' src='<?= $js_url ?>swiper.min.js' id='swiper-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>imagesloaded.min.js' id='imagesloaded-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>isotope.min.js' id='isotope-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>retina.min.js' id='retina-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>lazysizes.min.js' id='lazysizes-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>jquery.smartmenus.min.js' id='smartmenus-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>main.js' id='blutube-main-js-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>jquery.sticky.min.js' id='elementor-sticky-js'></script>
      <!-- <script type='text/javascript' id='elementor-pro-frontend-js-before'>
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/blutube.themesawesome.com\/wp-admin\/admin-ajax.php","nonce":"002dd03ccb","urls":{"assets":"https:\/\/blutube.themesawesome.com\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/blutube.themesawesome.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
         </script> -->
      <script type='text/javascript' src='<?= $js_url ?>frontend.min.js' id='elementor-pro-frontend-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>waypoints.min.js' id='elementor-waypoints-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>jquery/ui/core.min.js' id='jquery-ui-core-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>share-link.min.js' id='share-link-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>dialog.min.js' id='elementor-dialog-js'></script>
      <!-- <script type='text/javascript' id='elementor-frontend-js-before'>
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"landing-pages":true,"form-submissions":true,"video-playlist":true},"urls":{"assets":"https:\/\/blutube.themesawesome.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":628,"title":"Home%203%20%E2%80%93%20Blutube","excerpt":"","featuredImage":false}};
         </script> -->
      <script type='text/javascript' src='<?= $js_url ?>/elementor/frontend.min.js' id='elementor-frontend-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>/elementor/preloaded-elements-handlers.min.js' id='pro-preloaded-elements-handlers-js'></script>
      <script type='text/javascript' src='<?= $js_url ?>preloaded-modules.min.js' id='preloaded-modules-js'></script>
   </body>
</html>