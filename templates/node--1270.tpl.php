<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/brands.css" integrity="sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
<script type="text/javascript" src="/sites/all/themes/aesbs337/js/modernizr.custom.26633.js"></script>
<script type="text/javascript" src="/sites/all/themes/aesbs337/js/jquery.gridrotator.js"></script>
<script type="text/javascript" src="/sites/all/themes/aesbs337/js/gridrotator-init.js"></script>
   <script type="text/javascript">
     $(function() {

       $( '#ri-grid' ).gridrotator( {
         rows : 3,
         columns : 4,
         animType	: 'slideBottom',
         animSpeed	: 1000,
         interval	: 600,
         step		: 1,
         interval : 2000,
         w1024 : {
           rows : 3,
           columns : 4
         },
         w768 : {
           rows : 4,
           columns : 3
         },
         w480 : {
           rows : 4,
           columns : 3
         },
         w320 : {
           rows : 2,
           columns : 4
         },
         w240 : {
           rows : 1,
           columns : 7
         },
       } );

     });
</script>



  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <span class="submitted">
       <?php
            print t("Published") . " " . format_date($node->created, 'custom', 'd/m/Y');
        ?>
      </span>
    <?php endif; ?>
  </header>

  <?php
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    hide($content['field_thumbnail_sq']);
    print render($content);
  ?>
  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article>
