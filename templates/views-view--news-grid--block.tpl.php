<?php
/**
 * @file
 * Default view template to display content in a Masonry layout.
 */
?>

<!-- Experimental code to inject a balock in to a masonry view template after
so many tiles have been printed out on the page-->

<?php if (isset($grouping) && $grouping): ?>
  <?php if (!empty($title)): ?>
    <h3 style="clear:both;"><?php print $title; ?></h3>
    <?php endif; ?>
  <?php print $prefix ?>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="masonry-item<?php
  switch ($id){
    case 1:
    case 3:
    case 4:
    case 6:
    case 8:
      $myclasses = 'views-row-even row';
    break;

    default:
      $myclasses = 'views-row-odd row';
  }
  print $myclasses;?>">
    <?php print $row; ?>
  </div>
  <?php if ($id ==4):?>
    <div class="views-row-even row">
    <?php $block=module_invoke('block', 'block_view', '151');
          print render($block['content']); ?>
    </div>
  <?php endif ?>

<?php endforeach; ?>
<?php if(isset($grouping) && $grouping): ?>
  <?php print $suffix ?>
<?php endif;?>
