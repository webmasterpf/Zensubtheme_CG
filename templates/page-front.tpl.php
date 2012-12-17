<?php
$theme_path = drupal_get_path('theme', 'zensub_cg');
include ($theme_path.'/includes/inc_header.php');
?>
<!-- ______________________ LAYOUT HOMEPAGE PANORAMIQUE C.GRAWITZ_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->

	<div id="main-wrapper">


          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

        

   <!-- ______________________ ZONE DIAPO PANORAMIQUE _______________________ -->

              <?php if ($DiapoHP): ?>
                 <div id="HPDiapo"><?php print $DiapoHP; ?></div>
              <?php endif; ?>

	<br clear="all"/>


<!-- ______________________ PARTIE BAS GAUCHE _______________________ -->
                 <?php if ($HPBasGauche): ?>
                 <div id="BasGaucheHP"><?php print $HPBasGauche; ?></div>
              <?php endif; ?>

<!-- ______________________ PARTIE BAS DROITE _______________________ -->



        <?php if ($HPBasDroit): ?>
     <div id="BasDroitHP"><?php print $HPBasDroit; ?></div>
        <?php endif; ?>
     <br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php //print $feed_icons; ?>
         <?php endif; ?>


    </div><!-- /#content-bottom -->



	 </div> <!-- /mainPage -->
<?php
$theme_path = drupal_get_path('theme', 'zensub_cg');
include ($theme_path.'/includes/inc_footer.php');
?>
      
