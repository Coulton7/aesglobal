<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<script type="text/javascript" src="/sites/all/themes/aesbs337/js/hubspot-progressive-profile.js"></script>

<script>

$( document ).ready(function() {
  if($('#content-gate-entityform-edit-form--2').length>0){
       $('.download-field-wrapper').hide();
      }
    });

$(document).ajaxSuccess(function(){

if($('#content-gate-entityform-edit-form--2').length==0 && $('.alert-error').length==0){
     $('.view-entityform-content-gate h2').text('Click below to Download');
}});

</script>


<script>
  $( document ).ready(function() {
    $('#block-block-166').hide();
    if ($('.field-name-field-hubspot-form').length > 0) {
        $('.download-field-wrapper').hide();
    }


  function getUrlVars()
  {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  }

  var submitString = getUrlVars()["fs"];
  if(submitString=='y'){
    $('.download-field-wrapper').show();
    $('.field-name-field-hubspot-form').hide();
    $('#block-sharethis-sharethis-block').hide();
    $('.field-label').hide();
    $('#block-block-166').show();
  }
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
        hide($content['field_reference']);
        hide($content['field_download_form']);
        hide($content['field_deliverable']);
        hide($content['field_hubspot_form']);
        hide($content['field_thumbnail']);
        print render($content);
      ?>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <?php print render($content['field_thumbnail']);?>
    </div>

    <div class="col-sm-6">
      <?php print render($content['field_download_form']);?>
      <?php print render($content['field_hubspot_form']);?>
      <div class="download-field-wrapper">
          <?php print render($content['field_document']);?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 resources-related-products">
      <?php print render($content['field_reference']);?>
      <?php print render($content['field_deliverable']);?>
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
