<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<!--IE7 conditional stylesheet-->
<!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/aesseal_classic/css/ie7-and-down.css" />

<![endif]-->
</head>

<body class="<?php print $classes; ?>">

  <div class="container-fluid bannercontainer">
	   <div class="row bannerimage">
       <div class="row waveupper row-eq-height">
         <div class="col-sm-2 col-xs-2 fullscreen">
           <div class="wavelogo">
             <img class="wavelogo" src="/sites/aesreliability.com/files/logo/logo.svg" alt ="logo"></img>
           </div>
           <img class= "uppercurve" src="/sites/all/themes/aesbs337/images/logos/wave-upper.svg" alt ="uppercurve"></img>
           <?php if ($logo): ?>
             <div class="logo navbar-btn pull-left" title="<?php print t('Home'); ?>">
               <img src="/sites/aesreliability.com/files/secondary-logo/textonlylogo.svg" alt="<?php print t('Home'); ?> " class="textlogo img-adaptive" alt="image responsive"/>
             </div>
           <?php endif; ?>
         </div>

         <div class="col-sm-10 col-xs-10 fullscreen">
           <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

             <div class="<?php print $container_class; ?>">
               <div class="navbar-header">
               </div>
             </div>

             <div class="navbar-collapse">
               <div class="container-fluid navbar-container">
                 <nav role="navigation">
                   <ul class="menu nav navbar-nav">
                     <li class="first leaf">
                       <a class="btn-disabled disabled" href="#">&nbsp;</a>
                     </li>
                   </nav>
                 </div>
               </div>
               <div class="section-shadow-menu"></div>
             </header>

             <div id="name-and-slogan">
               <?php if (!empty($site_name)): ?>
                 <h1 id="site-name">
                   <div title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></div>
                 </h1>
               <?php endif; ?>

               <?php if (!empty($site_slogan)): ?>
                 <div id="site-slogan"><?php print $site_slogan; ?></div>
               <?php endif; ?>
             </div>
           </div>
         </div>

         <?php if (!empty($header)): ?>
           <div id="header-region">
             <?php print $header; ?>
           </div>
         <?php endif; ?>

         <div class="preface front__flex-margin">
           <div class="flex-gradient">
             <div class="row">
               <div class="col-sm-10 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                 <div class="flex-header">
                     <h1 class="page-header" id="page-main-heading">We are currently under maintenance</h1>
                 </div>
               </div>
               <div class="col-lg-7 col-lg-offset-2 col-md-7 col-md-offset-1 col-sm-8">
                 <div class="flex-caption">
                 </div>
               </div>
             </div>
           </div>
     			</div>
        </div>

        <div class="row wavelower row-eq-height">
 			      <div class="col-sm-9 col-xs-0 fullscreen">
 				         <div class="bottom-gap">
 				         </div>
 			      </div>

 			      <div class="col-sm-3 col-xs-12 fullscreen">
 				      <img class="curve-down" src = "/sites/all/themes/aesbs337/images/logos/wave-lower.svg" alt ="curve-down"></img>
              <div class="socialmedia text-center">
              </div>
 			        </div>
 		     </div>
       </div>

   <div class="container-fluid" class="clearfix">
     <div class="row">
       <div class="col-sm-10 col-lg-8 col-sm-offset-1 col-lg-offset-2">
          <div id="main-squeeze">
            <div id="content">
              <?php if (!empty($title)): ?><h1 class="title" id="page-title"></h1><?php endif; ?>
              <?php if (!empty($messages)): print $messages; endif; ?>
              <div id="main-content" class="clearfix">
                <?php print $content; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>

   <div id="footer-wrapper">
     <div id="footer">
      <?php if (!empty($footer)): print $footer; endif; ?>
     </div>
   </div>

</body>
