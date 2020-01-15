<!DOCTYPE html>
<!--
 ___  ___  ________  ________  ___  __    ___  ________     
|\  \|\  \|\   __  \|\   ____\|\  \|\  \ |\  \|\   __  \    
\ \  \\\  \ \  \|\  \ \  \___|\ \  \/  /|\ \  \ \  \|\  \   
 \ \   __  \ \   __  \ \  \    \ \   ___  \ \  \ \  \\\  \  
  \ \  \ \  \ \  \ \  \ \  \____\ \  \\ \  \ \  \ \  \\\  \ 
   \ \__\ \__\ \__\ \__\ \_______\ \__\\ \__\ \__\ \_______\
    \|__|\|__|\|__|\|__|\|_______|\|__| \|__|\|__|\|_______|                                                                                                                         
-->
<html lang="fr">
<head>
    <meta charset="<?php bloginfo( 'UTF-8' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= get_template_directory_uri () ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri () ?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri () ?>/slick/slick-theme.css"/>
    <title>Hackio</title>
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri () ?>/images/favicon.png">
    <?php wp_head(); ?>
</head>
<body class="body">

<!------------------------------------------------------------------NAV BAR------------------------------------------------------------------>
<nav class="navbar navbar-expand-lg navbar-light mynavbar-bg sticky-top">
      <img src="<?= get_template_directory_uri () ?>/images/Logogo.png" class="logo" alt="Responsive image">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<?php 
wp_nav_menu( array(
  'theme_location'  => 'primary',
  'depth'	          => 2,
  'container'       => 'div',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => 'navbarSupportedContent',
  'menu_class'      => 'navbar navbar-expand-lg navbar-light mynavbar-bg sticky-top',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>

<button class="btn btncolor:hover btncolor"> 
  <a href="#sectionecrans">
    <h1 class="txt-btn"> Télécharger </h1>
  </a>
</button>
</nav>
<!------------------------------------------------------------------HOME------------------------------------------------------------------>
<!--LOOP-PHRASE_D'ACROCHE-->
<?php
	    $params = array('pagename' => 'hackio-un-medecin-toujours-a-porte-de-main');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
<section class="w-100 min-vh-100" id="sectionhome" style="background: url('<?php the_post_thumbnail_url()?>');">

    <div class="containerhome container-fluid"id="sectionhome">
        <h1 class="titre paddingtitre"><?php the_title()?> </h1>
    </div>

</section>

<?php
		    endwhile;
	    endif; ?>
<!--FIN-LOOP-PHRASE_D'ACROCHE-->
<!------------------------------------------------------------------PRESENTATION----------------------------------------------------------------->
<section class="min-vh-100 d-flex align-items-center px-5" id="sectionprojet">
<!--LOOP-TITRE_PROJET-->
<?php
      $params = array('pagename' => 'projet');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>

<div class="containerpres">

    <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/Projet.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>

<?php
    endwhile;
  endif; ?>
<!--FIN-LOOP-TITRE_PROJET-->
<!--LOOP-PRESENTATION_DU_PROJET-->
<?php
      $params = array('pagename' => 'presentation-du-projet');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
  
  <div class="row paddingpres">
    <div class="col-md-6">
      <p class="soustitre"><?php the_title()?></p>
      <br>
      <p class="txt"><?php the_content() ?> </p>
    </div>

<?php
    endwhile;
  endif; ?>
<!--FIN-LOOP-PRESENTATION_DU_PROJET-->
<!--LOOP-TECHNOLOGIE_RFID-->
<?php
      $params = array('pagename' => 'technologie-rfid');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>

    <div class="col-md-6">
        <p class="soustitre"><?php the_title()?></p>
        <br>
        <p class="txt"><?php the_content() ?> </p>
    </div>
  </div>

<?php
    endwhile;
  endif; ?>
<!--FIN-LOOP-TECHNOLOGIE_RFID-->
</section>
<!------------------------------------------------------------------ÉCRANS------------------------------------------------------------------>
<section class="w-100 min-vh-100 px-5" id="sectionecrans">
<!--LOOP-TITRE_ECRANS-->
<?php
      $params = array('pagename' => 'ecrans');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>

    <div class="goute paddingecrans">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/ecrans.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>

    <?php
    endwhile;
  endif; ?>
<!--FIN-LOOP-TITRE_ECRANS-->
  <div class="row paddingecrans">
    <div class="col-md-6">
      <div class="slider">
        <div>
          <img src="<?= get_template_directory_uri () ?>/images/CA1.png" class="imgslider">
        </div>
        <div>
          <img src="<?= get_template_directory_uri () ?>/images/CA2.png" class="imgslider">
        </div>
        <div>
          <img src="<?= get_template_directory_uri () ?>/images/CA3.png" class="imgslider">
        </div>
        <div>
          <img src="<?= get_template_directory_uri () ?>/images/CA1.png" class="imgslider">
        </div>
        <div>
          <img src="<?= get_template_directory_uri () ?>/images/CA2.png" class="imgslider">
        </div>
        <div>
          <img src="<?= get_template_directory_uri () ?>/images/CA3.png" class="imgslider">
        </div>
      </div>
    </div>
    
    <div class="col-md-6 paddingtxtfaq">
        <p class="txt"><?php the_content() ?> </p>

      <div class="btndonlowd">
        <a href="https://www.apple.com/befr/ios/app-store/"><img class="sizedonlowdbtn" src="<?= get_template_directory_uri () ?>/images/AppStore-FR.png"></a>
        <a href="https://play.google.com/store/search?q=topla&gl=BE"><img class="sizedonlowdbtn" src="<?= get_template_directory_uri () ?>/images/GooglePlay-FR.png"></a>
      </div>
    </div>
  </div>
</section>
<!------------------------------------------------------------------FONCTIONNALITES-------------------------------------------------------------->
<section class="w-100 min-vh-100" id="sectionfunctions">
<div class="container-fluid fonctionnaliteesbkn">
<!--LOOP-TITRE-->
<div class="titrefct">
<?php
	    $params = array('pagename' => 'fonctionnalitees');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/Fonction.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>

<?php
		    endwhile;
      endif; ?>
</div>
<!--FIN-LOOP-TITRE-->
<!--LOOP-COEUR-->
<?php
	    $params = array('pagename' => 'coeur');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
<div class="container paddingfonctio">
  <div class="row">
    <div class="col-md-6">
      <p class="soustitre text-center"><?php the_title()?></p>

      <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/coeur.svg">
       
      <p class="txt text-center"><?php the_content() ?></p>
    </div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-COEUR-->
<!--LOOP-CONSEILS_NUTRITION-->
<?php
	    $params = array('pagename' => 'conseils-nutritions-zizi');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="col-md-6">
       <p class="soustitre text-center"><?php the_title()?></p>
      
       <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/nutri.svg">
      
       <p class="txt text-center"><?php the_content() ?></p>
      </div>
    </div>
  </div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-CONSEILS_NUTRITION-->
<!--LOOP-CYCLES_MENSTRUEL-->
<?php
	    $params = array('pagename' => 'cycle-menstruel-zizi');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="container paddingfonctio">
    <div class="row">
      <div class="col-md-6">
       <p class="soustitre text-center"><?php the_title()?></p>
      
       <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/calendrier.svg">
     
       <p class="txt text-center"><?php the_content() ?></p>
      </div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-CYCLES_MENSTRUEL-->
<!--LOOP-SOMMEIL-->
<?php
	    $params = array('pagename' => 'sommeil');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="col-md-6">
        <p class="soustitre text-center"><?php the_title()?></p>
     
        <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/sommeil.svg">
     
        <p class="txt text-center"><?php the_content() ?></p>
        </div>
    </div>
  </div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-SOMMEIL-->
</div>
</section>
<!---------------------------------------------------------------FAQ----------------------------------------------------------------->
<section class="w-100 min-vh-100" id="sectionfaq">
<div class="container-fluid paddingfaq">

<!--LOOP-TITRE-->
<?php
	    $params = array('pagename' => 'faq');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/faq.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-TITRE-->

  <div class="row">
    <div class="col-md-6 paddingfaq2">
      <div class="accordion" id="accordionExample">

      <?php
        $params = array('category_name' => 'faq');
        $the_query = new WP_Query($params);

        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>

      <div class="card faqsections border-light">
        <div class="card-header" id="headingOne<?php echo $the_query->current_post ?>">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $the_query->current_post ?>" aria-expanded="true" aria-controls="collapseOne">
              <h1 class="titrefaq"><?php the_title() ; ?></h1>
            </button>
        </div>
        <div id="collapseOne<?php echo $the_query->current_post ?>" class="collapse faqsousections" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt"><?php the_content();?></h1>
          </div>
        </div>
      </div>

<?php
        endwhile;
        endif;
        ?>
  </div>
</div>

<div class="col-md-6 paddingfaq">
  <img class="img-fluid" src="<?= get_template_directory_uri () ?>/images/photo_faq.jpg" alt="Responsive image">
</div>

</section>
<!------------------------------------------------------------------Équipe------------------------------------------------------------------>
<section class="w-100 min-vh-100" id="sectionequipe">
<div class="container-fluid equipebkn paddingequipe">
<!--LOOP-TITRE-->
<?php
	    $params = array('pagename' => 'equipe');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>

    <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/equipo.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>

    <?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-TITRE-->
<!--LOOP-NICO-->
<?php
	    $params = array('pagename' => 'nicolas');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <p class="soustitre marginnico"><?php the_title()?></p>
        <img class="imgequipe mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/nicolo.png">
      </div>

      <div class="col-md-6 paddingphotoequipe">
          <img class="imgequipe mr-auto d-block" src="<?= get_template_directory_uri () ?>/images/quali1.1.svg">
      </div>

      <div class="col-md">
        <h1 class="txt text-center paddingtxtequipe"><?php the_content();?></h1>
      </div>
    </div> 
  </div>
</div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-NIC0-->
<!--LOOP-TANGUY-->
<?php
	    $params = array('pagename' => 'tanguy-zizi');
	    $the_query = new WP_Query($params);
	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
          <div class="container-fluid equipebkn paddingequipe">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md order-3 order-md-1">
          <h1 class="txt text-center paddingtxtequipe"><?php the_content();?></h1>
        </div>

        <div class="col-md paddingphotoequipe order-2">
            <img class="imgequipe ml-auto d-block" src="<?= get_template_directory_uri () ?>/images/quali2.2.svg">
        </div>
  
        <div class="col-md order-1 order-md-3">
            <p class="soustitre margintang"><?php the_title()?></p>
            <img  class="imgequipe mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/tanguyte.png">
        </div>
      </div> 
    </div>

<?php
		    endwhile;
      endif; ?>
<!--FIN-LOOP-TANGUY-->
</div>
</section>

<!------------------------------------------------------------------Footer------------------------------------------------------------------>
<footer class="footer paddingfooter">
  <div class="container-fluid">
    <div class="row flexfooter">

      <div class="col-md-4 footer_column">
        <img src="<?= get_template_directory_uri () ?>/images/Logogo.png" class="logo2" alt="Responsive image">
      </div>

      <div class="col-md-4 footer_column flexml">
          <ul class="flexicon list-unstyled">
            <li>
              <a href="https://www.facebook.com/permalink.php?story_fbid=104213651111254&id=104209101111709"><img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/face.svg"></a>
            </li>
            <li>
              <a href="https://twitter.com/hacki_o/status/1214169884399149061?s=12&fbclid=IwAR295MKVY8Eip9WdHEein4a0JtstDcPq4eF5rxSGyun4b4g_8yvyFWrcPQ4"><img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/twitter.svg"></a>
            </li>
            <li>
              <a href="https://www.instagram.com/p/B6-pTidBtBI/?fbclid=IwAR3IKsyzzh0khrb-6_AbIiuCdOqO2RD233o3y8QH-iDIoB3ibz_LEsDRF6c"><img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/lebonDuFinaldeInsta.svg"></a>
            </li>
          </ul>
          <br>
<!----------- MODAL_ML ------------>
<!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModalScrollable">
<a class="txt text-center"> © Hackio 2019 Mentions Légales </a>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">

<?php 
$params=array('pagename' => 'mentions-legales');
  $the_query = new WP_Query($params);
  $the_query->the_post();?>

<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title soustitre" id="exampleModalScrollableTitle">Mentions Légales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php the_content(); ?>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----------------FIN MODAL_ML------------>

</div>
      <div class="col-md-4 footer_column paddingfooter">
        <div>
            <img class="icon rounded mx-auto d-block sizeicones" src="<?= get_template_directory_uri () ?>/images/gps.svg">
            <img class="icon rounded mx-auto d-block sizeicones" src="<?= get_template_directory_uri () ?>/images/mail.svg">
            <img class="icon rounded mx-auto d-block sizeicones" src="<?= get_template_directory_uri () ?>/images/tel.svg">
        </div>
        <div>
          <p> <a class="txt" href="https://www.google.be/maps/place/Rue+de+la+Poste+111,+1030+Schaerbeek/@50.8594627,4.3655469,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3c370c43d6195:0x6204b8bdc7bfce3!8m2!3d50.8594593!4d4.3677356?hl=fr">Av. De Mai 218 <br> 1200 Bruxelles , Belgique</a> </p>
          <p> <a class="txt" href="mailto:contact@hackio.be">contact@hackio.be</a> </p>
          <p> <a class="txt" href="tel:+32 491 36 42 91">+32 491 36 42 91</a> </p>
        </div>
      </div>

    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/caroussel.js"></script>
<?php wp_footer(); ?>
</body>
</html>
