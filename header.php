<?php
   $base_url = "http://localhost:91/titanpro/";
   $assets_url = $base_url."assets/";
   $css_url = $assets_url . "css/";
   $js_url = $assets_url . "js/";
   $img_url = $assets_url . "images/";

      $cat = array("General",
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
      <script type='text/javascript' src='<?= $js_url ?>public.js?ver=1.0.0' ></script>
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