<!DOCTYPE html>
<html lang="en" class="wow-animation">

<!-- Mirrored from kei-four.adr.com.ua/templates/elevation/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2017 08:34:54 GMT -->
<head>
    <!-- Site Title -->
      <?php include_once "header.php"?>
</head>
<body class="bg-image">


<!-- The Main Wrapper -->
<div class="main-wrapper sub-page">

  <!--/////////////////////////// HEADER \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
  <header  class="main-header">
    <div class="top-header">
      <div class="container">
          <address>
            <a href="mailto:ilepeakinyemi@gmail.com">
              <span class="icon icon-sm fa fa-envelope"></span>
              <span>ilepeakinyemi@gmail.com</span>
            </a>
            <a href="tel:+234 07063660684">
              <span class="icon icon-sm fa fa-phone"></span>
              <span>+234 07063660684</span>
            </a>
          </address>
          
      </div>
    </div>
    <!-- Nav -->
    <?php include_once "headbar.php"?>

    <div class="sub-page-entry">
      <div class="container all-light">
        <div class="entry-content">
          <div>
            <h2 class="page-title">Contact</h2>
            <hr class="divider divider-left">
            <h5 class="page-subtitle">Sub-title for this page</h5>
          </div>
          <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
     
  <!--/////////////////////////// CONTENT \\\\\\\\\\\\\\\\\\\\\\\\\\\-->
  <main class="main-container">

    <!--========== Contact section ==========-->
    <section class="p-80">
      <div class="container text-md-left">
        <div class="row flex-center">
          <div class="col-md-5 col-md-order-1 contact-data">
            <div class="row">
                <div class="col-sm-4 col-md-12 media media-sm">
                  <div class="media-left"><span class="icon icon-md fa fa-map-marker"></span></div>
                  <div class="media-body">
                    <h6>Location:</h6>
                    <p>
                      Nicholas Desmond Simon PO Box 1230 <br>
                      CAYMAN ISLANDS - UK
                    </p>
                  </div>
                </div>
                <div class="col-sm-4 col-md-12 media media-sm">
                  <div class="media-left"><span class="icon icon-md fa fa-phone"></span></div>
                  <div class="media-body">
                    <h6>Phones:</h6>
                    <p><a href="#">+(234) 09068423737</a></p>
                    <p><a href="#">+(234) 09068423737</a></p>
                  </div>
                </div>
                <div class="col-sm-4 col-md-12 media media-sm">
                  <div class="media-left"><span class="icon icon-md fa fa-envelope-o"></span></div>
                  <div class="media-body">
                    <h6>Email:</h6>
                    <p><a href="#">stormhacker789@gmail.com</a></p>
                    <p><a href="#">ilepeakinyemi@gmail.com</a></p>
                    <p><a href="#">ilepeakinyemi@gmail.com</a></p>
                    <p><a href="#">ilepeakinyemi@gmail.com</a></p>
                    <p><a href="#">ilepeakinyemi@gmail.com</a></p>
                    <p><a href="#">ilepeakinyemi@gmail.com</a></p>

                  </div>
                </div>
            </div>
          </div>
          <div class="col-md-7 mt-30 mt-md-0">
            <h3>Leave us a Message</h3>
            <form class="contact-form js-form row">
              <div class="form-group col-sm-4"><input autocomplete="off" type="text" name="name" class="form-control required" placeholder="Full Name"></div>
              <div class="form-group col-sm-4 mt-20 mt-sm-0"><input autocomplete="off" type="email" name="email" class="form-control required" placeholder="Email address"></div>
              <div class="form-group col-sm-4 mt-20 mt-sm-0"><input autocomplete="off" type="text" name="phone" class="form-control required" placeholder="Phone"></div>
              <div class="form-group col-md-12 height100 mt-20"><textarea name="message" class="form-control required" placeholder="Your message"></textarea></div>
              <div class="col-md-12"><button type="submit" class="btn btn-sm btn-primary mt-20">Send message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!--========== Map section ==========-->
    <section class="map-wrapper">
      <div data-text="Mr John Doe 221, My Street, Sometown 05 4NZ England" data-x-coord="51.5183522" data-y-coord="0.3848209" class="map" id="google-map"></div>
    </section>

    <!--========== Style Switcher ==========-->
    <div id="style-switcher" class="">
      <a href="#" class="toggle-switcher"><span class="icon fa fa-wrench"></span></a>
      <div class="switcher-color">
        <h6>Select color</h6>
        <ul class="colors" id="color1">
          <li><a href="#" class="style1" data-color-src="css/switcher/style1.css"></a></li>
          <li><a href="#" class="style2" data-color-src="css/switcher/style2.css"></a></li>
          <li><a href="#" class="style3" data-color-src="css/switcher/style3.css"></a></li>
          <li><a href="#" class="style4" data-color-src="css/switcher/style4.css"></a></li>
          <li><a href="#" class="style5" data-color-src="css/switcher/style5.css"></a></li>
          <li><a href="#" class="style6" data-color-src="css/switcher/style6.css"></a></li>
          <li><a href="#" class="style7" data-color-src="css/switcher/style7.css"></a></li>
          <li><a href="#" class="style8" data-color-src="css/switcher/style8.css"></a></li>
        </ul>
      </div>
      <div class="switcher-layout">
        <h6>Layout style</h6>
        <ul class="layout" id="layout">
          <li class="boxed">Boxed</li>
          <li class="wide active">Wide</li>
        </ul>
      </div>
      <div class="only-boxed switcher-layout-bg">
        <h6>Layout Background</h6>
        <ul class="layout-bg">
          <li><a href="#" data-bg-src="img/pattern-1.jpg"><img src="img/pattern-small-1.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-2.jpg"><img src="img/pattern-small-2.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-3.jpg"><img src="img/pattern-small-3.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-4.jpg"><img src="img/pattern-small-4.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-5.jpg"><img src="img/pattern-small-5.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-8.jpg"><img src="img/pattern-small-8.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-6.jpg"><img src="img/pattern-small-6.jpg" width="30" height="30" alt=""/></a></li>
          <li><a href="#" data-bg-src="img/pattern-7.jpg"><img src="img/pattern-small-7.jpg" width="30" height="30" alt=""/></a></li>
        </ul>
      </div>
    </div>  

  </main>
  
  
</div>

<!-- Core Scripts -->
<script src="js/minified.js"></script>

<!-- Additional Functionality Scripts -->
<script src="js/main.js"></script>

</body>

<!-- Mirrored from kei-four.adr.com.ua/templates/elevation/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2017 08:34:54 GMT -->
</html>