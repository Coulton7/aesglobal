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
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>
  </header>

  <div class="row">
    <div class="col-sm-12">
      <?php
        hide($content['comments']);
        hide($content['links']);
        hide($content['field_tags']);
        hide($content['field_document']);
        hide($content['field_thumbnail']);
        hide($content['field_case_ref']);
        hide($content['field_country']);
        hide($content['field_api__plan_types']);
        hide($content['field_thumbnail_sq']);
        hide($content['field_q_a']);
        print render($content);
      ?>
    </div>
  </div>
  <hr />
  <div class="row">
    <div class="col-sm-6">
      <?php print render($content['field_thumbnail']);?>
    </div>

    <div class="col-sm-6">
      <div class="download-field-wrapper">
        <?php print render($content['field_document']);?>
      </div>
      <div class="margin-top">
        <?php print render($content['field_case_ref']);?>
        <?php print render($content['field_country']);?>
      </div>
      <div class="margin-top">
        <?php print render($content['field_api__plan_types']); ?>
        <?php
					 $block = module_invoke('views', 'block_view', 'industry_icons-block_1');
					 print render($block['content']);
				  ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 resources-related-products">
      <?php print render($content['field_reference']);?>
    </div>
  </div>

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
  <footer>
    <?php print render($content['field_tags']); ?>
    <?php print render($content['links']); ?>
  </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

  </article>
