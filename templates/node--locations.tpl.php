<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<script type="text/javascript" src="/sites/all/themes/aesbs337/js/hubspot-progressive-profile.js"></script>

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


  <div class="row">

    <div class="col-sm-12">
      <div class="float-right">
        <?php print render($content['field_logo']); ?>
      </div>
      <?php print render($content['body']); ?>
    </div>
  </div>

  <div class="row">
    <?php
			$block = module_invoke('views', 'block_view','employees-block');
      print render($block['content'])
     ?>
  </div>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    hide($content['field_location']);
    hide($content['body']);
    hide($content['field_logo']);
    hide($content['employees_block']);
    hide($content['field_website']);
    hide($content['field_opening_hours']);
    print render($content);
    ?>

  <div class="row location-details">
    <div class="span12 col-sm-12">
      <?php print render($content['field_location'])?>
      <div class="last-details">
        <?php print render($content['field_website']); ?>
        <?php print render($content['field_opening_hours']); ?>
        <?php print render($content['field_location_type']);?>
      </div>

    </div>


  </div>


  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
