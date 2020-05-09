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
    <link href="{{asset('css/jquery.simple-popup.min.css')}}" rel="stylesheet" type="text/css">
    <title>Mother's Day photo contest</title>
   <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link rel='stylesheet' id='jevelin-theme-settings-css'  href="{{asset('css/jevelin-dynamic-styles.css?ver=112256582')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='jevelin-fonts-css'  href='https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,|Raleway:200,300,300i,400,400i,600,600i,700,700i,&#038;subset=latin' type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('js/jquery.js?ver=1.12.4-wp')}}"></script>
    <style>
      /* new changes */
      .popup-box {
        max-width: 520px;
        margin: auto;
        height: 538px;
        position: absolute;
        left: 0;
        top: 30px;
        bottom: 0;
        right: 0;
        margin-top: 0;
        margin-bottom: 0;
    }
    </style>
   
   <body>
    <div class="popup-box">
      <div class="photo-img" id="my-node">
         <img src="images/photo.png">
         <div class="photo-img-inner">
         <img src="{{@Request::query('url')}}">
       </div>
     
     </div>

       <div class="sh-social-widgets">
         {{-- <div class="sh-social-share-button sh-noselect">
           <a href="share.html" target="_blank"><i class="icon-share"></i></a>
           <span>Share</span>
       </div> --}}
         <!-- <a href="#" class="sh-social-widgets-item" target="_blank">
           <i class="icon-social-facebook"></i>
         </a>
          <a href="#" class="sh-social-widgets-item" target="_blank">
           <i class="icon-social-twitter"></i>
         </a>
          <a href="#" class="sh-social-widgets-item" target="_blank">
            <i class="icon-social-instagram"></i>
         </a>
          <a href="#" class="sh-social-widgets-item" target="_blank">
             <i class="icon-social-whatsapp"><img src="images/social-media.svg" width="20"></i>
          </a>   -->
          <div class="download-icon sh-social-share-button sh-noselect" id="foo"> <i class="icon-social-download"><img src="images/download.svg" width="30"></i> <span>Download</span>  
            
           </div>  
     </div>
    
     </div>

     <script type="text/javascript" src="js/FileSaver.min.js"></script>
    <script type="text/javascript" src="js/dom-to-image.min.js"></script>
    <script type="text/javascript">
      var node = document.getElementById('my-node');
    var btn = document.getElementById('foo');

    btn.onclick = function() {
      domtoimage.toBlob(document.getElementById('my-node'))
        .then(function(blob) {
          window.saveAs(blob, 'my-photo.png');
        });
    }
    </script>

      <!-- popup end -->
  </body>
</html>