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
   <!-- <meta charset="UTF-8"> -->
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
    <?php wp_head(); ?>
</head>
<body class="body">

<!------------------------------------------------------------------NAV BAR------------------------------------------------------------------>
    <nav class="navbar navbar-expand-lg navbar-light mynavbar-bg sticky-top">
      <img src="<?= get_template_directory_uri () ?>/images/Logogo.png" class="logo" alt="Responsive image">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active navelement">
              <a class="nav-link" href="#sectionhome">Accueil </a>
            </li>
            <li class="nav-item navelement">
              <a class="nav-link" href="#sectionprojet">Projet</a>
            </li>
            <li class="nav-item navelement">
              <a class="nav-link" href="#sectionecrans">Écrans</a>
            </li>
            <li class="nav-item navelement">
              <a class="nav-link" href="#sectionfunctions">Fonctionnalitées </a>
            </li>
            <li class="nav-item navelement">
              <a class="nav-link" href="#sectionfaq">FAQ</a>
            </li>
            <li class="nav-item navelement">
             <a class="nav-link" href="#sectionequipe">Équipe</a>
            </li>
          </ul>
          <button class="btn  btncolor:hover btncolor" href="#sectionecrans">Télécharger</button>
        </div>
    </nav>

<!------------------------------------------------------------------HOME------------------------------------------------------------------>
<?php
      // On récupère la "page" ayant "homepage" comme slug.
      // Docs: https://developer.wordpress.org/reference/classes/wp_query/
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

<!------------------------------------------------------------------PRESENTATION------------------------------------------------------------------>
<?php
      $params = array('pagename' => 'projet');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
          
<section class="min-vh-100 d-flex align-items-center px-5" id="sectionprojet">

<div class="containerpres">

    <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/Projet.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>


<?php
    endwhile;
  endif; ?>

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

</section>
<?php
    endwhile;
  endif; ?>

<!------------------------------------------------------------------ÉCRANS------------------------------------------------------------------>
<?php
      $params = array('pagename' => 'ecrans');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
<section class="w-100 min-vh-100 px-5" id="sectionecrans">

    <div class="goute paddingecrans">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/ecrans.svg">
      <p class="titresection text-center"><?php the_title()?></p>
    </div>

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
        <img class="sizedonlowdbtn" src="<?= get_template_directory_uri () ?>/images/AppStore-FR.png">
        <img class="sizedonlowdbtn" src="<?= get_template_directory_uri () ?>/images/GooglePlay-FR.png">
      </div>
    </div>
  </div>

</section>

</div>

<?php
    endwhile;
  endif; ?>

<!------------------------------------------------------------------FONCTIONNALITES------------------------------------------------------------------>
<!--TEST BOUCLE PHP ARTICLES WP-->
<div class="container-fluid fonctionnaliteesbkn">
<?php
// Ce template va lister TOUS les articles liés à la catégorie dont le slug est "news".
?>

<main role="main">

	<section class="py-5 bg-light">
<!--Afficher titre page-->
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
<!--Fin Afficher titre page-->
		<div class="container">
			<div class="row">

				<?php
				if( have_posts() ):
					while( have_posts() ):
						the_post();
						?>
						<div class="col-md-4">
							<div class="card mb-4 shadow-sm">
                <?php
                // Si l'article à une image "mise en avant", on l'affiche.
                if(get_the_post_thumbnail_url()): ?>
                  <a href="<?php the_permalink(); ?>">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
                  </a>
                <?php endif; ?>
								<div class="card-body">
									<p class="card-text">
										<a href="<?php the_permalink() ; ?>">
											<?php the_title() ; ?>
										</a>
									</p>
									<p class="card-text">
										<?php the_excerpt() ; ?>
									</p>
								</div>
							</div>
						</div>
					<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>

</main>

</div>
<!--FIN TEST BOUCLE PHP ARTICLES WP-->

<div class="container-fluid fonctionnaliteesbkn">

<?php
      $params = array('pagename' => 'fonctionnalitees');
      $the_query = new WP_Query($params);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
          $the_query->the_post(); ?>
<section class="w-100 min-vh-100" id="sectionfunctions">

  <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/Fonction.svg">
      <p class="titresection text-center"><?php the_title()?></p>
  </div>

  <div class="container paddingfonctio">
     <div class="row">

     <!-- Loop -->
      <div class="col-md-6">
       <p class="soustitre text-center">Coeur</p>

       <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/coeur.svg">
       
       <p class="txt text-center">Votre rythme cardiaque est constamment enrgistré dans l’application pour que vous puissiez consulter le comportement de votre coeur au fil de la journée. </p>
      </div>
      <!-- endloop --> 
      <div class="col-md-6">
       <p class="soustitre text-center">Conseils nutritions</p>
      
       <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/nutri.svg">
      
       <p class="txt text-center">Grâce à votre puce RFID, Hackio vous informe sur vos carences et vous donne des conseils personnalisés pour y remédier</p>
      </div>

      <div class="col-md-6">
       <p class="soustitre text-center">Cycle menstruel</p>
      
       <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/calendrier.svg">
     
       <p class="txt text-center">Le suivi de votre cycle menstruel peut vous aider à avoir une meilleure compréhension de votre santé globale </p>
      </div>
      <div class="col-md-6">
        <p class="soustitre text-center">Sommeil</p>
     
        <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/sommeil.svg">
     
        <p class="txt text-center">Votre application enregistre vos cycles de sommeils et vous conseille l’heure adéquate pour bénéficier d’un sommeil optimal</p>
      </div>
    </div>
  </div>

</div>

</section>

<?php
    endwhile;
  endif; ?>

<!---------------------------------------------------------------FAQ----------------------------------------------------------------->
<!--TEST FAQ-->
<?php
        // On récupère TOUS les "articles" ayant "faq" comme catégorie
        $params = array('category_name' => 'faq');
        $the_query = new WP_Query($params);

        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>

<section>
<div>
<div class="row">
    <div class="col-md-6 paddingfaq2">
      <div class="accordion" id="accordionExample">

      <div class="card faqsections border-light">
        <div class="card-header" id="headingOne">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h1 class="titrefaq"><?php the_title() ; ?></h1>
            </button>
        </div>
        <div id="collapseOne" class="collapse show faqsousections" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt"><?php the_content() ; ?></h1>
          </div>
        </div>
      </div>

</div>
</section>

<?php
        endwhile;
        endif;
        ?>
<!--FIN TEST FAQ-->


<section class="w-100 min-vh-100" id="sectionfaq">
<div class="container-fluid paddingfaq">

    <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/faq.svg">
      <p class="titresection text-center">FAQ</p>
    </div>

  <div class="row">
    <div class="col-md-6 paddingfaq2">
      <div class="accordion" id="accordionExample">

      <div class="card faqsections border-light">
        <div class="card-header" id="headingOne">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h1 class="titrefaq">Problème d’appairage</h1>
            </button>
        </div>
        <div id="collapseOne" class="collapse show faqsousections" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt">Si vous rencontrez un problème d’apparaige entre votre puce RFID et l’application, essayez premièrement de redémarrer votre puce RFID en appuyant 3 fois sur votre paume, deuxièmement rétablir la connexion entre l’application entre votre appareil et votre puce RFID. </h1>
          </div>
        </div>
      </div>

      <div class="card faqsections border-light">
        <div class="card-header" id="headingTwo">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> 
              <h1 class="titrefaq">Mauvais résulats</h1>
            </button>
       </div>
        <div id="collapseTwo" class="collapse faqsousections" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt">Si vous pensez que les résultats obtenu sur l'application sont mauvais, essayer de refaire le test en ne décollant pas votre appareil de la puce jusqu'à ce que l'écran se remplisse et que le chargement s'éffectue.</h1>
          </div>
        </div>
      </div>

      <div class="card faqsections border-light">
        <div class="card-header" id="headingThree">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h1 class="titrefaq">Erreur de RDV avec mon médecin</h1>
            </button>
        </div>
        <div id="collapseThree" class="collapse faqsousections" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt">Si une erreur se produit lors de la prise de rendez-vous avec votre médecin, cela est peut-être dû au fait que le rdv que vous souhaitez est déjà pris dans ce cas précis c'est à votre docteur de mettre à jour son agenda en ligne, vous pouvez toujours prendre contact avec lui par téléphone pour essayer de fixer un rendez-vous.</h1>
          </div>
        </div>
      </div>

      <div class="card faqsections border-light">
        <div class="card-header" id="headingFour">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <h1 class="titrefaq">Bilan de santé plus disponible</h1>
            </button>
        </div>
        <div id="collapseFour" class="collapse faqsousections" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt">Si vous vous rendez compte qu'un bilan de santé effectué n'est plus disponible, c'est surement parce que votre médecin effectue un check-up de ce bilan dans ce cas essayer de prendre contact avec lui pour avoir plus d'informations.</h1>
          </div>
        </div>
      </div>

      <div class="card faqsections border-light">
        <div class="card-header" id="headingFive">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h1 class="titrefaq">Erreur lors du chek-up matinale </h1>
            </button>
        </div>
        <div id="collapseFive" class="collapse faqsousections" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h1 class="txt">l'algorithme d'Hackio peut estimer que votre système interne n'est pas à 100% encore réveillé afin d'éviter de fausser les résultats il est conseiller de réessayer le check-up dans 30 minutes.</h1>
          </div>
        </div>
      </div>
      
    </div>
  </div>

    <div class="col-md-6 paddingfaq">
      <img class="img-fluid" src="<?= get_template_directory_uri () ?>/images/photo_faq.jpg" alt="Responsive image">
    </div>

  </div>
</div>

</section>


<!------------------------------------------------------------------Équipe------------------------------------------------------------------>
<section class="w-100 min-vh-100" id="sectionequipe">

<div class="container-fluid equipebkn paddingequipe">

    <div class="goute">
        <img class="sizeicon" src="<?= get_template_directory_uri () ?>/images/equipo.svg">
      <p class="titresection text-center">Équipe</p>
    </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <p class="soustitre marginnico">Nicolas</p>
        <img class="imgequipe mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/nicolo.png">
      </div>

      <div class="col-md-6 paddingphotoequipe">
          <img class="imgequipe mr-auto d-block" src="<?= get_template_directory_uri () ?>/images/Quali1.1.svg">
      </div>

      <div class="col-md">
        <h1 class="txt text-center paddingtxtequipe">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</h1>
      </div>
    </div> 
  </div>
</div>

<div class="container-fluid equipebkn paddingequipe">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md order-3 order-md-1">
          <h1 class="txt text-center paddingtxtequipe">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</h1>
        </div>

        <div class="col-md paddingphotoequipe order-2">
            <img class="imgequipe ml-auto d-block" src="<?= get_template_directory_uri () ?>/images/quali2.2.svg">
        </div>
  
        <div class="col-md order-1 order-md-3">
            <p class="soustitre margintang">Tanguy</p>
            <img  class="imgequipe mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/tanguyte.png">
        </div>
      </div> 
    </div>
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
              <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/face.svg">
            </li>
            <li>
              <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/twitter.svg">
            </li>
            <li>
              <img class="icon rounded mx-auto d-block" src="<?= get_template_directory_uri () ?>/images/lebonDuFinaldeInsta.svg">
            </li>
          </ul>
          <br>
            <a class="txt text-center" href="mentionslegales.html"> Mentions Légales </a>
      </div>

      <div class="col-md-4 footer_column paddingfooter">
        <div>
            <img class="icon rounded mx-auto d-block sizeicones" src="<?= get_template_directory_uri () ?>/images/gps.svg">
            <img class="icon rounded mx-auto d-block sizeicones" src="<?= get_template_directory_uri () ?>/images/mail.svg">
            <img class="icon rounded mx-auto d-block sizeicones" src="<?= get_template_directory_uri () ?>/images/tel.svg">
        </div>
        <div>
          <p class="txt">Av. De Mai 218</p>
          <p class="txt">1200 Bruxelles , Belgique</p>
          <p class="txt">contact@hackio.be</p>
          <p class="txt">+32 91 36 42 91</p>
          <p class="txt">© Hackio 2019</p>
        </div>
      </div>

    </div>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= get_template_directory_uri () ?>//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri () ?>//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri () ?>slick/slick.min.js"></script>
<script src="<?= get_template_directory_uri () ?>caroussel.js"></script>
<?php wp_footer(); ?>
</body>
</html>
