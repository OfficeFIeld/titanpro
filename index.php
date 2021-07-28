<?php include 'header.php' ?>
   <body id="body" class="page-template page-template-elementor_header_footer page page-id-628 elementor-default elementor-template-full-width elementor-kit-72 elementor-page elementor-page-628">
      <div id="main-wrapper" class="main-wrapper clearfix">
         <header class="header header-custom clearfix">
            <div class="header-left text-left clearfix">
               <div class="head-item logo-image logo-head">
                  <a href="javascript:void(0)">
                  <img src="<?= $img_url ?>logo.png" alt="TitanPro" width="200"/>
                  </a>
               </div>
               <input id="main-menu-state" type="checkbox" />
               <label class="main-menu-btn sub-menu-triger" for="main-menu-state">
               <span class="main-menu-btn-icon"></span>
               </label>
               <?php include 'menu.php' ?>
            </div>
            <div class="header-right text-right clearfix ">
               <div class="header-info-wrapper">
                  <div class="search-wrap head-info-item">
                     <form method="get" class="searchform" action="#" role="search">
                        <input type="search" class="field" name="s" value="" id="s" placeholder="Search Video..." />
                        <input type="hidden" name="post_type" />
                        <button type="submit" class="submit search-button open" value=""><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <div class="call-btn head-info-item">
                     <div class="item-wrapper">
                        <!-- <a href="../myaccount.html" class="button-basic add-video"><i class="fa fa-video-camera"></i> Upload</a> -->
                        <a href="javascript:void(0)" class="sign-log">Sign In</a>
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
                                       <div class="swiper-container" style="max-height: 650px;">
                                          <div class="swiper-wrapper">
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="../video/self-hosted-video/index.html">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>spotlight_1.jpg" alt="7/11 interview with @kickostocks (OTCmethod.com)" data-no-retina />
                                                      </a>
                                                   </div>
                                                   <!-- <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>otc_club.jpg" data-no-retina alt="TheOTCclub">
                                                         <span><a href="javascript:void(0)">TheOTCclub</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">7/11 interview with @kickostocks (OTCmethod.com)</a></h4>
                                                         <span class="views">203 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div> -->
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="javascript:void(0)">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>spotlight_3.jpg" alt="The Halt Episode 6: Incredible Bob Interview" data-no-retina />
                                                      </a>
                                                   </div>
                                                   <!-- <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>ant_n_teddy.jpg" data-no-retina alt="Ant & Teddy">
                                                         <span><a href="javascript:void(0)">Ant & Teddy</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">The Halt Episode 6: Incredible Bob Interview</a></h4>
                                                         <span class="views">176 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div> -->
                                                </div>
                                             </div>
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="javascript:void(0)">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>spotlight_4.jpg" alt="Bitcoin hits 1000% SHORTS!!" />
                                                      </a>
                                                   </div>
                                                   <!-- <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>ryan_rozbiani.jpg" data-no-retina alt="Ryan Rozbiani">
                                                         <span><a href="javascript:void(0)">Ryan Rozbiani</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">Bitcoin hits 1000% SHORTS!!</a></h4>
                                                         <span class="views">232 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div> -->
                                                </div>
                                             </div>
                                             
                                             
                                             <div class="video-item swiper-slide">
                                                <div class="post-wrap">
                                                   <div class="post-thumb">
                                                      <a href="javascript:void(0)">
                                                         <div class="play-button-hover">
                                                            <i class="fa fa-play play-button"></i>
                                                         </div>
                                                         <img src="<?= $img_url ?>spotlight_2.jpg" alt="CBBT (Cerebain Biotech) Stock Analysis and Due Diligence" data-no-retina />
                                                      </a>
                                                   </div>
                                                   <!-- <div class="post-content">
                                                      <div class="post-author clearfix">
                                                         <img src="<?= $img_url ?>cash_kreator.jpg" data-no-retina alt="Cash Kreator">
                                                         <span><a href="javascript:void(0)">Cash Kreator</a></span>
                                                      </div>
                                                      <div class="post-title">
                                                         <h4><a href="javascript:void(0)">CBBT (Cerebain Biotech) Stock Analysis and Due Diligence</a></h4>
                                                         <span class="views">161 Views</span>
                                                         <span class="hours">3 months ago</span>
                                                      </div>
                                                   </div> -->
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
                                              slidesPerView: 1,
                                              spaceBetween: 20,
                                              
                                              },
                                       
                                              1025: {
                                              slidesPerView: 1.23,
                                              spaceBetween: 15,
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
                                             <h2 class="elementor-heading-title elementor-size-default">Categories</h2>
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
                                                   <img width="500" height="333" src="<?= $img_url ?>stock.jpg" class="attachment- size- wp-post-image" alt="Stock" loading="lazy" data-no-retina="" sizes="(max-width: 500px) 100vw, 500px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      Stock </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <!-- <div class="swap">April 21, 2021</div> -->
                                                   </div>
                                                   <div class="excerpt">
                                                      Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet
                                                   </div>
                                                   <div class="meta-top">
                                                   	<!-- <a href="javascript:void(0)" rel="category tag">Event</a> -->
                                                   	 <a href="javascript:void(0)" rel="category tag">Browse More</a>
                                                   	</div>
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
                                                   <img width="500" height="333" src="<?= $img_url ?>market_analysis.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" sizes="(max-width: 500px) 100vw, 500px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <!-- <img src="<?= $img_url ?>market_analysis.jpg" alt="Market Analysis" data-no-retina /> -->
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      Market Analysis </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <!-- <div class="swap">April 21, 2021</div> -->
                                                   </div>
                                                   <div class="excerpt">
                                                      Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet
                                                   </div>
                                                   <div class="meta-top">
                                                   	<!-- <a href="javascript:void(0)" rel="category tag">Event</a> -->
                                                   	 <a href="javascript:void(0)" rel="category tag">Browse More</a>
                                                   	</div>
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
                                                   <img width="500" height="333" src="<?= $img_url ?>forex.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" sizes="(max-width: 500px) 100vw, 500px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <!-- <img src="<?= $img_url ?>forex.jpg" alt="Forex" data-no-retina /> -->
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      Forex </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <!-- <div class="swap">April 21, 2021</div> -->
                                                   </div>
                                                   <div class="excerpt">
                                                      Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet
                                                   </div>
                                                   <div class="meta-top">
                                                   	<!-- <a href="javascript:void(0)" rel="category tag">Event</a> -->
                                                   	 <a href="javascript:void(0)" rel="category tag">Browse More</a>
                                                   	</div>
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
                                                   <img width="500" height="333" src="<?= $img_url ?>due.jpg" class="attachment- size- wp-post-image" alt="" loading="lazy" data-no-retina="" sizes="(max-width: 500px) 100vw, 500px" /> </a>
                                                </div>
                                                <div class="inner-content">
                                                   <div class="author-wrap">
                                                      <!-- <img src="<?= $img_url ?>due.jpg" alt="Due Dilegence" data-no-retina /> -->
                                                   </div>
                                                   <h2 class="post-title">
                                                      <a href="javascript:void(0)">
                                                      Due Dilegence </a>
                                                   </h2>
                                                   <div class="date-meta">
                                                      <!-- <div class="swap">April 21, 2021</div> -->
                                                   </div>
                                                   <div class="excerpt">
                                                      Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet Lorem Ipsum Dolor Set Amet
                                                   </div>
                                                   <div class="meta-top">
                                                   	<!-- <a href="javascript:void(0)" rel="category tag">Event</a> -->
                                                   	 <a href="javascript:void(0)" rel="category tag">Browse More</a>
                                                   	</div>
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
         <?php include 'footer.php' ?>