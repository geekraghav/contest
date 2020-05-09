<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    <link href="{{asset('css/jquery.mobile-1.4.5.min.css')}}" rel="stylesheet">
    <link media="all" href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link media="all" href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet" />
    <link media="only screen and (max-width: 768px)" href="{{asset('css/mobile.css')}}" rel="stylesheet" />
    <title>Mother's Day photo contest</title>
   <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel='stylesheet' id='jevelin-theme-settings-css'  href="{{asset('css/jevelin-dynamic-styles.css?ver=112256582')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='jevelin-fonts-css'  href='https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,|Raleway:200,300,300i,400,400i,600,600i,700,700i,&#038;subset=latin' type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('js/jquery.js?ver=1.12.4-wp')}}"></script>
   
    <div class="sh-page-loader sh-table sh-page-loader-style-spinner">
      <div class="sh-table-cell">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
        </div>
      </div>
    </div>
    <style type="text/css">
      body {
      overflow: hidden;
      }
      .sh-page-loader {
      background-color: #ffffff;
      }
      .sk-cube-grid .sk-cube,
      .sk-folding-cube .sk-cube:before,
      .sk-spinner > div,
      .sh-page-loader-style-spinner .object {
      background-color: #294cff!important;
      }
      .not-live-txt > h3{
        color: gray;
      font-size: 15px;
      font-weight: 400;
      }

    </style>

    <?php 
          
    $url = null;
    if(Request::query('is_participate')){
      if(Request::query('is_participate')==true){
        $url = 'http://lskt.me/MySpectacularMom';
      }else{
        $url = ''; 
      }
    }

    ?>
    
    <script type="text/javascript">function setREVStartSize(e){     
      try {               
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
        pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
        e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);    
        if(e.layout==="fullscreen" || e.l==="fullscreen")             
          newh = Math.max(e.mh,window.innerHeight);       
        else{         
          e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
          for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];          
          e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
          e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
          for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                    
          var nl = new Array(e.rl.length),
            ix = 0,           
            sl;         
          e.tabw = e.tabhide>=pw ? 0 : e.tabw;
          e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
          e.tabh = e.tabhide>=pw ? 0 : e.tabh;
          e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;          
          for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
          sl = nl[0];                 
          for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}                             
          var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);          
      
          newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
        }     
        
        if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));         
        document.getElementById(e.c).height = newh;
        window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";        
      } catch(e){
        console.log("Failure at Presize of Slider:" + e)
      }            
       };
    </script>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1571430172334{padding-bottom: 0px !important; margin-top: 0%;}.vc_custom_1571430219837{padding-bottom: 100px !important;}</style>
    <noscript>
      <style> .wpb_animate_when_almost_visible { opacity: 1; }</style>
    </noscript>
  </head>
  <body class="home page-template-default page page-id-584 theme-jevelin woocommerce-no-js wpb-js-composer js-comp-ver-6.1 vc_responsive sh-header-mobile-spacing-compact sh-body-header-sticky carousel-dot-style3 carousel-dot-spacing-12px carousel-dot-size-small">
   
    <div id="page-container" class="">
      <div role="banner">
        <header class="primary-desktop">
          <div class="sh-header sh-header-6 sh-sticky-header sh-header-6-clean">
            <div class="container">
              <div class="sh-table">
                <div class="sh-table-cell sh-group">
                  <div class="header-logo sh-group-equal">
                  <a href="{{url('/')}}" class="header-logo-container sh-table-small" rel="home">
                      <div class="sh-table-cell">
                        <img class="sh-standard-logo" src="{{asset('images/logo.svg')}}" alt="Mothers days" width="200"/>
                        
                      </div>
                    </a>
                  </div>
                </div>
                
              </div>
            </div>
           
          </div>
        </header>
      </div>

  
    <a href="{{$url}}" disabled class="banner"></a>
      <div id="wrapper">
        <div class="content-container">
          <div class="container entry-content">
            <div id="content" class="page-content  page-default-content">
              <div class="vc_row wpb_row vc_row-fluid vc_custom_1571430172334 vc_row_1532184558">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper" style="width: 100%; max-width: 1100px;margin-left: auto; margin-right: auto;">
                     
                      <!-- <div class="sh-heading" id="heading-animated-0ZnoWrIMaw">
                        <h3 class="sh-heading-content size-custom sh-heading-animated-content">
                          <span class="sh-heading-animated-fixed">
                            Mother's Day photo contest
                        </span>
                         
                        </h3>
                      </div> -->
                      <style type="text/css">
                        @media (max-width: 1024px) {#heading-animated-0ZnoWrIMaw .sh-heading-content {font-size: 42px!important;}}#heading-animated-0ZnoWrIMaw .sh-heading-animated-content {font-size: 60px;line-height: 120%!important;text-align: center;}#heading-animated-0ZnoWrIMaw .sh-heading-animated-typed,#heading-animated-0ZnoWrIMaw .typed-cursor {color: #294cff;}            
                      </style>
                      <div class="sh-empty-space vc_empty_space sh-empty-space-7TgBYwk6cX  " style="height: 32px">
                        <span class="vc_empty_space_inner"></span>
                      </div>
                      <div class="sh-heading  " id="heading-LKHwUedtrT">
                        <div class="video-frame"><iframe width="420" height="315"
                          src="https://www.youtube.com/embed/f4gMSmc4IHI">
                          </iframe></div>
                        <div class="sh-element-margin">
                          <h2>Happy Mother's Day</h2>
                          <p>Share a Selfie & Win a Pair Free! <br>
                            We’ll Choose a Winner Every 5 Minutes!
                          </p>

                            <h3>Click, Share, and Win Free Eyewear!</h3>
                            <p>We’d love to see you win and feature you on the Lenskart Website and Social Media platforms. 
                              Get started!</p>

                              <h2 class="sh-heading-content size-custom text-center">
                                <?php 
                                  if(!empty($url)){
                                    ?>
                                    <a href="{{$url}}" class="participate">SHARE A SELFIE NOW</a>     
                                    <?php
                                  }
                                  ?>
                            
                          </h2>

                         <a href="#" class="tc popup-tc"><i>Terms & Conditions</i></a>


                          <!--  <div class='term-cd' style="display: none;">

                              <p>1- By submitting your entry, you are indicating your agreement to these terms and conditions.</p>
                              <p>2- The last entries will be allowed until 12 AM. Fresh sets of entries start at 9 AM. </p>
                              <p>3- The images submitted should be clear and feature your mother. </p>
                              <p>4- Lenskart shall have the right to all content that in its sole discretion violates, or is alleged to violate, any applicable law or either the spirit or letter of these Terms of Use. We hereby acknowledge and affirm that these images constitute the opinion of the Individuals in their personal capacity, and may not represent official positions of Lenskart in any manner. </p>
                              <p>5- Lenskart retains all copyright to these images.</p>
                          </div> -->

                          <h2>Contest Entries</h2>
          
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <style type="text/css">@media (max-width: 800px) { #content .vc_row_1532184558, .sh-footer-template .vc_row_1532184558, .sh-header-template .vc_row_1532184558 { padding: 0px 0px 0px 0px!important;}}</style>
              </div>
              {{-- <div class="text-center not-live-txt" >
                <h3>The contest is not live yet.</h3>
              </div> --}}
              <div id="gallery-data" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1571430219837 vc_row-no-padding vc_row_1140879858" >
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_column_1668033939">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      
                      <div id="menuall-content">
                        <div class="menu-nav">
                        {{-- <div class="process-menu">
                          <span class="sh-filter-item active">
                            Current 
                          </span> 
                        </div> --}}
                     
                      
                      <?php
                      
                      $cactive = "active";
                      $wactive = null;
                      $tactive = null;

                        if(Request::query('data')){
                          if(Request::query('data')=='current'){
                            $cactive = 'active';
                          } 
                          if(Request::query('data')=='winner'){
                            $wactive = 'active';
                            $cactive = null;
                          }
                          if(Request::query('timing')){
                            $tactive = Request::query('timing');
                            $cactive = null;
                          }
                        
                        }  
                      ?>



                      <div class="current-menu"> 
                      <span class="sh-filter-item {{$cactive}}" id="currentdata">
                          Current Contest
                        </span> 
                        <span id="winnerdata" class="sh-filter-item {{$wactive}}" >
                          All Winners
                        </span>                    
                    </div>

                    <div class="select-all">
                      
                      <select id="getdropdowndata">
                        <option selected>Previous Slots</option>>
                        <option value="9-10" <?php if($tactive=='9-10'){  echo "selected"; }  ?>>9:00AM to 10:00AM</option>
                        <option value="10-11" <?php if($tactive=='10-11'){  echo "selected"; }  ?>>10:00AM to 11:00AM</option>
                        <option value="11-12" <?php if($tactive=='11-12'){  echo "selected"; }  ?>>11:00AM to 12:00PM</option>
                        <option value="12-13" <?php if($tactive=='12-13'){  echo "selected"; }  ?>>12:00PM to 1:00PM</option>
                        <option value="13-14" <?php if($tactive=='13-14'){  echo "selected"; }  ?>>1:00PM to 2:00PM</option>
                        <option value="14-15" <?php if($tactive=='14-15'){  echo "selected"; }  ?>>2:00PM to 3:00PM</option>
                        <option value="15-16" <?php if($tactive=='15-16'){  echo "selected"; }  ?>>3:00PM to 4:00PM</option>
                        <option value="16-17" <?php if($tactive=='16-17'){  echo "selected"; }  ?>>4:00PM to 5:00PM</option>
                        <option value="17-18" <?php if($tactive=='17-18'){  echo "selected"; }  ?>>5:00PM to 6:00PM</option>
                        <option value="18-19" <?php if($tactive=='18-19'){  echo "selected"; }  ?>>6:00PM to 7:00PM</option>
                        <option value="19-20" <?php if($tactive=='19-20'){  echo "selected"; }  ?>>7:00PM to 8:00PM</option>
                        <option value="20-21" <?php if($tactive=='20-21'){  echo "selected"; }  ?>>8:00PM to 9:00PM</option>
                        <option value="21-22" <?php if($tactive=='21-22'){  echo "selected"; }  ?>>9:00PM to 10:00PM</option>
                        <option value="22-23" <?php if($tactive=='22-23'){  echo "selected"; }  ?>>10:00PM to 11:00PM</option>
                        <option value="23-00" <?php if($tactive=='23-00'){  echo "selected"; }  ?>>11:00PM to 00:00AM</option>
                      </select>
                    </div>
                  </div>

                  </div>
                  

                      <div id="portfolio-fancy-7F42qo5iwf" class="sh-portfolio-fancy sh-portfolio-fancy-columns3">
                        
                        @if(!empty($images))
                        @foreach ($images as $item)
                        <div class="sh-portfolio-fancy-item category-packaging" id="portfolio-661">
                          <div class="sh-portfolio-fancy-itemc-container">
                          <img class="sh-portfolio-img lazy" src="{{$item->image_url}}" alt="" />
                            <div class="sh-portfolio-fancy-item-overlay">
                              <div class="sh-portfolio-fancy-item-overlay-container">
                                <div class="sh-portfolio-fancy-item-overlay-categories">
                                <a id="shareimage" data-imageurl="{{$item->image_url}}" data-rel="popup" data-position-to="window" class="sh-portfolio-category sh-heading-font ui-btn ui-corner-all ui-shadow ui-btn-inline">View Photo</a>           
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach()
                        @else
                        <h2 class="text-center">No Data Found.</h2>
                        @endif
                      </div>


                      <style type="text/css">
                        #portfolio-fancy-7F42qo5iwf .sh-portfolio-fancy-item-overlay-bg {background: rgba(0,0,0,0.55);background: -moz-linear-gradient(45deg, rgba(0,0,0,0.55) 0%, rgba(41,76,255,0.53) 100%);background: -webkit-linear-gradient(45deg, rgba(0,0,0,0.55) 0%, rgba(41,76,255,0.53) 100%);background: linear-gradient(45deg, rgba(0,0,0,0.55) 0%, rgba(41,76,255,0.53) 100%);}#portfolio-fancy-7F42qo5iwf .sh-portfolio-fancy-item {padding: 0 0px; margin: 0px 0;}            
                      </style>
                      <style type="text/css"> .vc_column_1668033939:not(.vc_parallax):not(.jarallax) { overflow: center!important; position: relative; }</style>
                    </div>
                  </div>
                </div>
                <style type="text/css">@media (max-width: 800px) { #content .vc_row_1140879858, .sh-footer-template .vc_row_1140879858, .sh-header-template .vc_row_1140879858 { padding: 0px 0px 0px 0px!important;}}</style>
              </div>
              <div class="vc_row-full-width vc_clearfix"></div>
              <div class="sh-clear"></div>
              <div class="sh-comments">
                <div class="sh-comment-form">
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="sh-footer-template" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
          <div class="container">
            <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1571415669001{padding-top: 80px !important;padding-bottom: 80px !important;background-color: #252525 !important;}.vc_custom_1571414279790{background-color: #252525 !important;}.vc_custom_1570627715459{margin-right: 0px !important;margin-left: 0px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1570627774523{padding-top: 0px !important;}.vc_custom_1553695818577{margin-right: 0px !important;margin-left: 0px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}</style>
            <!-- <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571415669001 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex vc_row_1611052491">
              <div class="wpb_column vc_column_container vc_col-sm-6 vc_column_mobile_element_alignment_center vc_column_2143106740">
                <div class="vc_column-inner vc_custom_1570627715459">
                  <div class="wpb_wrapper">
                    <div class="sh-heading  " id="heading-DGWNA3ZX1d">
                      <div class="sh-element-margin">
                        <h2 class="sh-heading-content size-custom text-left">
                          Mother's Day photo contest - Join us    
                        </h2>
                      </div>
                    </div>
                    <style type="text/css">
                      #heading-DGWNA3ZX1d .sh-element-margin {}@media (max-width: 1024px) {#heading-DGWNA3ZX1d .sh-heading-content {font-size: 30px!important;}}#heading-DGWNA3ZX1d .sh-heading-content {font-size: 39px;line-height: 130%!important;font-weight: 700!important;color: #ffffff;}#heading-DGWNA3ZX1d .sh-heading-content,#heading-DGWNA3ZX1d .sh-heading-additional-text {}            
                    </style>
                    <style type="text/css">@media (max-width: 800px) { .vc_column_2143106740 > .vc_column-inner { padding: 0px 30px 30px 30px!important;}}</style>
                  </div>
                </div>
              </div>
              <div class="wpb_column vc_column_container vc_col-sm-6 vc_column_mobile_element_alignment_center">
                <div class="vc_column-inner vc_custom_1570627774523">
                  <div class="wpb_wrapper">
                    <div id="button-JaD6tprKRP" class="sh-button-container  sh-button-style-1">
                      <div class="sh-element-margin">
                        <a href="#" target="_self" class="sh-button sh-button-medium ">
                        <span class="sh-button-text">
                        Participate       
                       </span>
                        </a>
                      </div>
                    </div>
                    <style type="text/css">
                      #button-JaD6tprKRP .sh-button-text {font-weight: 900;}#button-JaD6tprKRP .sh-button {line-height: 35px;padding: 10px 30px;text-transform:uppercase;border-radius: 32px;font-size: 18px;background-color: #3b9f95;color: #ffffff;}#button-JaD6tprKRP {text-align: right;}#button-JaD6tprKRP:not(.sh-button-style-2) .sh-button:hover {background-color: #23527c;}#button-JaD6tprKRP.sh-button-style-2 .sh-button:after {background-color: rgba(41,76,255,0.81);}#button-JaD6tprKRP.sh-button-style-2 .sh-button:hover {}@media (max-width: 800px) {#button-JaD6tprKRP {text-align: center;}}            
                    </style>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="vc_row-full-width vc_clearfix"></div>
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571414279790 vc_row-has-fill vc_row_1731273741">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1553695818577">
                  <div class="wpb_wrapper">
                   
                    <style type="text/css">
                      #divider-u84RqmpQLJ {}#divider-u84RqmpQLJ.sh-divider-content-none .sh-divider-line {border-top-width: 1px;border-top-color: rgba(76,76,76,0.48);border-top-style: solid;}            
                    </style>
                    <div class="sh-empty-space vc_empty_space sh-empty-space-8H5Xsedtwl  " style="height: 3px">
                      <span class="vc_empty_space_inner"></span>
                    </div>
                    <style media="screen">
                      #header-navigation-3ODhY7NMdU .sh-nav-container {
                      display: table;
                      margin: 0 auto;
                      }
                      #header-navigation-3ODhY7NMdU,
                      #header-navigation-3ODhY7NMdU ul.sh-nav > li > a {
                      font-size: ;
                      }
                      #header-navigation-3ODhY7NMdU ul.sh-nav > li > a {
                      color: !important;
                      font-weight: 400!important;
                      }
                      #header-navigation-3ODhY7NMdU ul.sh-nav > li:hover > a {
                      color: !important;
                      }
                      #header-navigation-3ODhY7NMdU ul.sh-nav > li.current_page_item > a,
                      #header-navigation-3ODhY7NMdU ul.sh-nav > li.current-menu-ancestor > a {
                      font-weight: 0!important;
                      }
                      #header-navigation-3ODhY7NMdU .sh-header-builder-main-element-divider {
                      margin-right: !important;
                      }
                    </style>
                   
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
            <div class="vc_row wpb_row vc_row-fluid vc_row_385796354">
              <div class="wpb_column vc_column_container vc_col-sm-12 vc_column_1987948417">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div id="text-block-PoT57FShCc" class="sh-text-block">
                      </p>
                      <p style="text-align: center;">Copyright © Lenskart Solution Private Limited</p>
                      <p>
                    </div>
                    <style type="text/css">
                      #text-block-PoT57FShCc {font-size: 12px;color: #a1a1a1;margin: 0px;}#text-block-PoT57FShCc a:hover,#text-block-PoT57FShCc a:focus {color: #5470ff;}#text-block-PoT57FShCc .drop-cap {font-weight: bold;font-size: 50px;display: block;float: left;margin: 8px 10px 0 0;}#text-block-PoT57FShCc p {margin-bottom: 0;}            
                    </style>
                    <div class="sh-empty-space vc_empty_space sh-empty-space-rVUK0ES3tN  " style="height: 30px">
                      <span class="vc_empty_space_inner"></span>
                    </div>
                    <style type="text/css"> .vc_column_1987948417:not(.vc_parallax):not(.jarallax) { overflow: center!important; position: relative; }</style>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="sh-back-to-top sh-back-to-top1">
        <i class="icon-arrow-up"></i>
      </div>
    </div>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        
        
             $('.primary-desktop .header-logo-container, .primary-mobile .header-logo-container').attr('href','https://www.lenskart.com/');
      
        function jevelin_settings() {
          if( $(window).width() < 600 ) {
            $('.sh-settings').hide();
          } else {
            $('.sh-settings').show();
          }
        }
        jevelin_settings();
      
          $(window).resize(function() {
              clearTimeout(window.resizedFinished2);
              window.resizedFinished2 = setTimeout(function(){
                  jevelin_settings();
              }, 500);
          });
      
        $('.sh-settings-hide').on( 'click', function() {
          $('.sh-settings').toggleClass( 'sh-settings-active' );
        });
      
          $(document).keyup(function(e) {
              if (e.keyCode == 27) {
                  if( $('.sh-settings').hasClass('sh-settings-active') ) {
                      $('.sh-settings').removeClass('sh-settings-active');
                  }
              }
          });
      
        jQuery('.form-submit #submit').on('click', function( event ) {
          alert( 'This feature is disabled in our demo site. Sorry for any inconvenience.' );
          event.preventDefault()
          event.stopPropagation()
          return false;
        });
      
      });
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
          "use strict";
      
          $(".sh-page-loader").fadeOut(500);
          $("body").css('overflow-y', 'visible').css('overflow-x', 'hidden');
      
        $(window).bind('beforeunload', function(e){
          $('.sh-page-loader').fadeIn();
        });
      
      });
    </script>
    <style>
      .sh-page-loader {
      background-color: rgba(255,255,255,0.98)!important;
      }
    </style>
    <style type="text/css">
      .sh-side-options {
      position: fixed;
      top: 0; bottom: 0;
      right: 0;
      z-index: 12345678902;
      transition: 0.3s all ease;
      transition: 0.2s all;
      padding: 0 0;
      width: 420px;
      transform: translateX(420px);
      }
      .sh-side-options.open {
      transform: translateX(0px);
      box-shadow: 0 0px 39px 10px rgba(0,0,0,0.2);
      }
      .sh-side-options-container {
      position: absolute;
      top: 216px; left: -75px;
      width: 60px;
      background-color: rgba(255,255,2555,1);
      border-radius: 5px;
      margin-right: 15px;
      box-shadow: -10px 0px 20px 2px rgba(0,0,0,.06);
      }
      .sh-side-options.sh-side-options-pages .sh-side-options-container {
      top: 150px;
      }
      .sh-side-options-item {
      display: block;
      text-align: center;
      margin: 0px;
      transition: 0.3s all ease-in-out;
      position: relative;
      padding: 7px;
      cursor: pointer;
      }
      .sh-side-options-item:not(:last-child) {
      border-bottom: 1px solid #f1f3fc;
      }
      .sh-side-options-item-container {
      border-radius: 4px;
      padding: 8px 0;
      }
      .sh-side-options-item:hover .sh-side-options-item-container,
      .sh-side-options-item:focus .sh-side-options-item-container,
      .sh-side-options.open .sh-side-options-item-trigger-demos .sh-side-options-item-container {
      background-color: #f3f5fd;
      }
      .sh-side-options-item i {
      font-size: 22px;
      }
      .sh-side-options-item:not(:hover):not(:focus) {
      color: #9396a5!important;
      }
      .sh-side-options-item:hover .sh-side-options-hover {
      opacity: 1;
      transform: translateX(-97%);
      }
      .sh-side-options-hover {
      position: absolute;
      background-color: #ffffff;
      color: #32343d;
      padding: 20px 26px;
      transform: translateX(-70%);
      left: 0px;
      top: 0;
      bottom: 0;
      opacity: 0;
      transition: 0.2s all ease-in-out;
      z-index: -100;
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      font-size: 13px;
      box-shadow: 0px 0px 20px 2px rgba(0,0,0,0.08);
      }
      .sh-side-options-hover span {
      padding: 0px 3px;
      }
      @media (max-width: 700px) {
      .sh-side-options {
      width: 52px;
      }
      .sh-side-options-item {
      padding: 10px 0;
      }
      .sh-side-options-item i {
      font-size: 16px;
      }
      }
      @media (max-width: 600px) {
      .sh-side-options {
      display: none;
      }
      }
      @media (max-height: 500px) {
      .sh-side-options {
      top: 120px!important;
      }
      }
      .sh-side-options-item i {
      color: #9396a5!important;
      }
      .sh-side-options.open .sh-side-options-item-trigger-demos i,
      .sh-side-options-item:hover i,
      .sh-side-options-item:focus i {
      color: #294cff!important;
      }
      /*
      ** Side Demos
      */
      .sh-side-demos-container {
      top: 0; left: 0; right: -17px; bottom: 0;
      position: absolute;
      overflow-y: scroll;
      background-color: #fff;
      background-repeat: no-repeat;
      background-position: right top;
      padding: 22px;
      }
      body.admin-bar .sh-side-demos-container {
      top: 32px;
      }
      /* Demos Text */
      .sh-side-demos-intro {
      text-align: center;
      }
      .sh-side-demos-intro-title {
      font-size: 24px;
      font-weight: 300;
      margin-top: 25px;
      margin-bottom: 15px;
      }
      .sh-side-demos-intro-title img {
      height: 24px;
      top: -6px;
      position: relative;
      }
      .sh-side-demos-intro-descr {
      max-width: 250px;
      margin: 0 auto;
      display: table;
      color: #838794;
      }
      /* Demos Close Button */
      .sh-side-demos-container-close {
      position: absolute;
      top: 22px;
      right: 22px;
      cursor: pointer;
      }
      .sh-side-demos-container-close i {
      color: #c5c5c5;
      font-size: 18px;
      transition: 0.3s all ease;
      }
      .sh-side-demos-container-close:hover i,
      .sh-side-demos-container-close:focus i {
      color: #7f7f7f;
      }
      /* Demo Items */
      .sh-side-demos-loop-container {
      position: relative;
      margin: 0 -10px;
      margin-top: 28px;
      }
      .sh-side-demos-item {
      display: inline-block;
      position: relative;
      margin-right: -4px;
      margin-bottom: 25px;
      width: 50%;
      padding: 0 10px;
      text-align: center;
      transition: .3s all ease;
      top: 0;
      }
      .sh-side-demos-item:hover {
      top: -4px;
      }
      .sh-side-demos-item .sh-image-lazy-loading {
      border-radius: 3px;
      box-shadow: 0 2px 20px 1px rgba(0,0,0,.1);
      }
      .sh-side-demos-item img {
      border-radius: 3px;
      }
      .sh-side-demos-item-name {
      font-size: 12px;
      color: #32343d;
      font-weight: 600;
      padding-top: 10px;
      }
      .sh-side-demos-item-tag {
      position: absolute!important;
      width: auto!important;
      height: auto!important;
      top: 4px;
      left: 6px;
      background-color: #ff5944;
      color: #fff;
      font-size: 9px;
      font-weight: 600;
      display: block;
      padding: 1px 9px;
      text-transform: capitalize;
      border-radius: 100px;
      }
    </style>
   
    </div>
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        /*if( $(window).width() > 1000) {
          if( $.cookie( 'gillion.sidebartest', { path: '', domain: 'jevelin.shufflehound.com' } ) == 'opened' ) {
            $('.sh-side-demos').addClass('open');
          } else {
            $('.sh-side-demos').removeClass('open');
          }
        }*/
      
        $('.sh-side-options-item-trigger-demos').on('click', function() {
          $('.sh-side-options').css( 'transition', '0.3s all ease-in-out' );
      
          if( $('.sh-side-options').hasClass( 'open' ) ) {
            $('.sh-side-options').removeClass('open');
          } else {
            $('.sh-side-options .sh-side-demos-image').each( function() {
              $(this).attr( 'src', $(this).attr( 'data-src' ) );
            });
            $('.sh-side-options').addClass('open');
          }
        });
      
        $('.sh-side-demos-container-close').on( 'click', function() {
          $('.sh-side-options').css( 'transition', '0.3s all ease-in-out' );
          $('.sh-side-options').removeClass('open');
        });
      });
    </script>
   
    <script type="text/javascript"> jQuery(document).ready(function ($) { "use strict"; });</script>
    <script defer src="{{asset('js/autoptimize_43d73b4ccfaee0f2c331232a350ec699.js')}}"></script>
    <script src="{{asset('js/jquery.simple-popup.min.js')}}"></script>

    <!-- popup start -->
    <link href="{{asset('css/jquery.simple-popup.min.css')}}" rel="stylesheet" type="text/css">
    <script> 
      $(document).ready(function(){
        $("#term_cd").click(function(){
          $(".term-cd").toggle();
        });
      });
    // jQuery(document).ready(function() {
    //   jQuery(".popup").simplePopup({ type: "html", htmlSelector: "#popup1" });
    // });
    </script>

     <div data-role="popup" id="popupVideo" data-overlay-theme="b" data-theme="a" data-tolerance="15,15" class="ui-content">
          <iframe src="{{url('share')}}" width="497" height="298" seamless=""></iframe>
      </div>

       <div class="popup-terms">
      <div class="close-tc"></div>
        <div class="popup-main">
          <h2>Participation Terms and Conditions: </h2>
         <ol>
         <li> The contest is open to all Indian citizens of 18 years of age or more residing in India, except the employees and the family members of the Lenskart. </li>

          <li> By participating in this Contest, the Contestant agrees to accept the Terms and Conditions of the Contest.</li> 
          <li> Contest starts from __ PM IST on 9th May 2020 and ends at 4:00 PM IST on 11th May 2020 (“Contest Period”), both the dates inclusive. Contestants sending entries after the Contest Period will not be eligible for the prize. </li>
          <li>No Purchase Required. Participation is optional. To participate in the Contest, the Contestants have to submit their entries through the timeline of the Lenskart Website.  </li>
          <li>To participate in the Contest, the Participant needs to do the following activities.

            <ul>
              <li>Like the <a href="https://www.instagram.com/lenskart/?hl=en">@lenskart. </a></li>
            <li>To enter the contest and mark the entry, the contestant needs to submit their Name, Phone Number and Email ID on the link <a href="{{($url)?$url:''}}">{{($url)?$url:''}}</a></li>
              <li>Share a fun or cute selfie with his/her Mom along with your message for her. </li>
            </ul>
          </li>

          <li>The sole discretion of choosing the contest winner lies with the contest organizers and no inquiries will be entertained regarding the winning criterion. </li>
          <li>Winners will be announced every 1 hour from the Contest start date, that is, 9th May 2020. This excludes time from 12 AM-9 AM each day, in the duration of the contest.</li>
          <li>The winners will be announced on Lenskart’s website and Instagram page and will be contacted by the representatives of the organizers through their contact details provided by the winner. In case the winner is not traceable, the organizers have the sole discretion to either forfeit the prize or to pass on the prize to the next best entry. </li>
          <li>Vouchers worth Rs. 999 (applicable on all collections of Vincent Chase and John Jacobs) will be shared with winners within 24-48 hours of winning via SMS and email.</li>
          <li>Lenskart shall have the right to all content that in its sole discretion violates, or is alleged to violate, any applicable law or either the spirit or letter of these Terms of Use. Lenskart retains all copyright to these images.</li>
          <li>For more information or queries, get in touch here: <a href="mailto:support@lenskart.com">support@lenskart</a>.com</li>
         </ol>

          
        </div>
      </div>
      <!-- popup end -->
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/index.js')}}"></script>
      <script src="{{asset('js/jquery.mobile-1.4.5.min.js')}}"></script>
      <script src="{{asset('js/popup-iframe-map.js')}}"></script>
      <script src="{{asset('js/popup-iframe-video.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
      <script>
        window.dropdownDataURL = "{{url('/image/api')}}";
        window.winnerData = "{{url('/winner/images')}}";
      </script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script>
        $('.popup-tc').click(function(){
          $('.popup-terms').fadeIn();
        });
        $('.close-tc').click(function(){
          $('.popup-terms').fadeOut();
        })
      </script>
  </body>
</html>