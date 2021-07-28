
         <footer id="footer" class="footer clearfix">
            <div class="footer-wrapper">
               <div class="footer-top">
                  <div class="pad-container clearfix">
                     <div class="footer-widget-areas grid grid-cols-12">
                        <div class="footer-widget item col-span-3 sm:col-span-12">
                           <div id="custom_html-2" class="widget_text widget-footer widget_custom_html">
                              <div class="textwidget custom-html-widget">
                                 <a href="javascript:void(0)">
                                 <img src="<?= $img_url ?>logo.png" alt="TitanPro" width="200"/>
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
                                             <img src="<?= $img_url ?>KICK_O_STOCKS.jpg" alt="7/11 interview with @kickostocks (OTCmethod.com)" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             7/11 interview with @kickostocks (OTCmethod.com)</a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Lucas Stalone" rel="author">
                                          TheOTCclub </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="post-item video-item">
                                    <div class="inner-post-vid">
                                       <div class="post-image">
                                          <a href="javascript:void(0)">
                                             <img src="<?= $img_url ?>ant_n_teddy_1.webp" alt="The Halt Episode 6: Incredible Bob Interview" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             The Halt Episode 6: Incredible Bob Interview </a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Anneke Leitz" rel="author">
                                          Ant & Teddy </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="post-item video-item">
                                    <div class="inner-post-vid">
                                       <div class="post-image">
                                          <a href="javascript:void(0)">
                                             <img src="<?= $img_url ?>1000_bitcoin_shorts.webp" alt="Bitcoin hits 1000% SHORTS!!" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             Bitcoin hits 1000% SHORTS!! </a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Jimmy Rilley" rel="author">
                                          Ryan Rozbiani </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="post-item video-item">
                                    <div class="inner-post-vid">
                                       <div class="post-image">
                                          <a href="javascript:void(0)">
                                             <img src="<?= $img_url ?>cash_kreator.webp" alt="CBBT (Cerebain Biotech) Stock Analysis and Due Diligence" data-no-retina />
                                             <div class="play-button-hover">
                                                <i class="fa fa-play play-button"></i>
                                             </div>
                                          </a>
                                       </div>
                                       <div class="latest-video-content">
                                          <h4 class="video-title">
                                             <a href="javascript:void(0)">
                                             CBBT (Cerebain Biotech) Stock Analysis and Due Diligence </a>
                                          </h4>
                                          <span class="author-name">
                                          <a href="javascript:void(0)" title="Jimmy Rilley" rel="author">
                                          Cash Kreator </a>
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
                                    <?php foreach($cat as $category) { ?>
                                       <li>
                                          <a href="javascript:void(0)"><?= $category ?></a>
                                       </li>
                                    <?php } ?>
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
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>otc_club.jpg" alt="TheOTCclub" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             TheOTCclub </a>
                                          </h5>
                                          <span>21 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>ant_n_teddy.jpg" alt="Ant & Teddy" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Ant & Teddy </a>
                                          </h5>
                                          <span>12 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>ryan_rozbiani.jpg" alt="Ryan Rozbiani" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Ryan Rozbiani </a>
                                          </h5>
                                          <span>18 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img class="author" src="<?= $img_url ?>cash_kreator.jpg" alt="Cash Kreator" data-no-retina></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Cash Kreator </a>
                                          </h5>
                                          <span>21 Videos</span>
                                       </div>
                                    </div>
                                    <div class="creator-item">
                                       <div class="author-img">
                                          <a href="javascript:void(0)"><img alt='Radio Silent Play' src='<?= $img_url ?>radio_silent.jpg' class='avatar avatar-50 photo' height='50' width='50' loading='lazy' /></a>
                                       </div>
                                       <div class="author-info">
                                          <h5 class="author-name">
                                             <a href="javascript:void(0)">
                                             Radio Silent Play </a>
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