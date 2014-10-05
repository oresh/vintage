<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
  <?php print $appletouchicon; ?>
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <div id="main-slide">
        <ul class="slides">
          <li id="intro" class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
            <div class="container">
                <div class="sixteen columns alpha">
                  <div class="nine columns alpha">
                    <h2>Smart Art that suits you</h2>
                    <p>Vintage enables businesses to decorate their offices with artworks made by the most talented artists from developing countries.</p>
                    <a class="btn" href="gallery.php" value="download">gallery</a>
                  </div>
              </div>
            </div>
          </li>

            <li id="intro2" class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
              <div class="container alpha">
                <div class="nine columns alpha">
                  <h2>How do we help artists?</h2>
                  <p>Artists are the core of our project. Our main efforts are directed towards bringing value to each talented artist presented in our gallery.</p>
                  <a class="btn" href="artists.php">Read more <span>»</span></a>
                </div>          
              </div>                      
            </li>

            <li id="intro3" class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
              <div class="container">
                <div class="eleven columns alpha">
                    <div class="nine columns alpha">
                      <h2>Why do companies love our service?</h2>
                      <p>We can transform your office, hotel or restaurant in an art-gallery, periodically bringing new artworks which will inspire and motivate your employees.</p>
                      <a class="btn" href="bussines.php">Read more <span>»</span></a>
                    </div>
                </div>      
              </div>                  
            </li>
          </ul>

          <div class="bottom-menu">
            <ul>
              <li></li>
              <li class="active"><a><span>01</span> Vintage Catalogue</a></li>
              <li class=""><a><span>02</span> Offer for artists</a></li>
              <li class=""><a><span>03</span> Offer for businesses</a></li>
              <li></li>
            </ul>
          </div>
        <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol></div>
        
        <?php print $page; ?>
        <?php print $page_bottom; ?>

        <section id="help">
        <div class="container">
          <div class="sixteen columns">
            <header>
                <h2>How do we help artists?</h2>
                <p>Artists are the core of our project. Check the benefits of being our partners:</p>
            </header>
          </div>
            <div class="sixteen columns panels">
              <div class="wrap one-third column alpha">                    
                <h3>Promote your art</h3>
                <p>Every artist will have his personal gallery on our site.</p>  
              </div>
              <div class="wrap one-third column">                    
                <h3>It's free!</h3>
                <p>Everyone can join and be a part of the movement.</p>  
              </div>
              <div class="wrap one-third column omega">                    
                <h3>Get paid</h3>
                <p>Earn money by renting or selling your art.</p>  
              </div>
            </div>
            <a href="artists.php" class="button">Find out more &gt;&gt;</a>
          </div>
         <!-- container -->
    </section>
    <section id="why">
        <div class="container">
            <div class="sixteen columns">
                <header>
                    <h2>Why do companies love our service?</h2>
                    <p>We can transform your place in an amazing gallery. Check the benefits of being our partners:</p>
                </header>
            </div>
            <div class="sixteen columns panels">
                <div class="wrap one-third column alpha">                    
                  <h3>It’s affordable</h3>
                  <p>You don’t have to overspend for a single art piece, rent artworks at a fair price.</p>  
                </div>
                 <div class="wrap one-third column">                    
                  <h3>Keep your place fresh</h3>
                  <p>You can change regularly your work ambiance.</p>  
                </div>
                 <div class="wrap one-third column omega">                    
                  <h3>Make your stakeholders happy</h3>
                  <p>Raise your workers productivity &amp; attract more clients. </p>  
                </div>
             </div>
             <a href="bussines.php" title="" class="button">Find out more <span>»</span></a>
        </div> <!-- container -->
    </section>
    <section id="artists">
        <div class="container">
            <header>
                <h3>Who joined us:</h3>
            </header>
            <div class="sixteen columns omega">
                <div id="artist-list" class="flexslider">
                    <ul class="slides">
                      <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                        <div class="profile six columns alpha offset-by-one">
                          <div class="rounded">
                            <img src="img/artist_mudrea.png" alt="" draggable="false">
                          </div>
                          <h4>Andrei Mudrea</h4>
                          <p>Andrei Mudrea's paintings did not inscribe as subject and treatment within the limits of the "Socialist realism" requirements. From the very start Andrei Mudrea necessarily became an unofficial leader of the non-conformist art.</p>
                        </div>
                        <div class="eight columns offset-by-one omega">
                            <div class="frame">                              
                                <img src="img/mudrea-painting.png" alt="" draggable="false">                         
                            </div>
                        </div>
                      </li>
                      <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                        <div class="profile six columns alpha offset-by-one">
                          <div class="rounded">
                            <img src="img/artist_cristina.jpg" alt="" draggable="false">
                          </div>
                          <h4>Cristina Golovatic</h4>
                          <p>An extremely emotional artist, a true volcano eruption, almost impossible to organize and rule. Her paintings are fresh and untraditional, linked together through an unusual dynamism reflecting a very strong energy.</p>
                        </div>
                        <div class="eight columns offset-by-one omega">
                            <div class="frame">                              
                                <img src="img/cristina_work.jpg" alt="" draggable="false">                         
                            </div>
                        </div>
                      </li>
                      <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                        <div class="profile six columns alpha offset-by-one">
                          <div class="rounded">
                            <img src="img/artist_svirstuhin.png" alt="" draggable="false">
                          </div>
                          <h4>Nikifor Sviristuhin</h4>
                          <p>Sviristuhin's works are included in the database of the Museum of Contemporary Arts in Frankfurt, the French Gallery and Picasso Museum in Paris. The artist has had over 50 exhibitions in the past 15 years. </p>
                        </div>
                        <div class="eight columns offset-by-one omega">
                            <div class="frame">                              
                                <img src="img/svirstuhin-painting.png" alt="" draggable="false">                         
                            </div>
                        </div>
                      </li>
                    </ul>
                <ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul></div>
              </div>
              
            
        </div> <!-- container -->
    </section>
    
</body>
</html>
