
<style type="text/css">
    .popup-box {
        max-width: 520px;
        margin: auto;
        height: 550px;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
    }
    img{
      max-width: 100%;
    }
    .photo-img-inner {
        position: absolute;
        right: 109px;
        top: 112px;
        width: 241px;
        height: 225px;
        z-index: -1;
    }
    
    .photo-img-inner img {
        object-fit: cover;
        height: 225px;
        width: 100%;
    }
    
    
    </style>
    <div class="popup-box">
    <div id="my-node">
      <img src="images/photo.png">
      <div class="photo-img-inner">
            <img src="images/photo2.jpg">
       </div>
    </div>
    </div>
    
    <button id="foo">download img</button>
    <script type="text/javascript" src="js/FileSaver.min.js"></script>
    <script type="text/javascript" src="js/dom-to-image.min.js"></script>
    <script type="text/javascript">
      var node = document.getElementById('my-node');
    var btn = document.getElementById('foo');
    
    btn.onclick = function() {
      domtoimage.toBlob(document.getElementById('my-node'))
        .then(function(blob) {
          window.saveAs(blob, 'my-node.png');
        });
    }
    </script>