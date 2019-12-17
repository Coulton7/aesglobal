<?php
/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and the
 * child template are dependent on one another, sharing the markup for
 * definition lists.
 *
 * Note that modules and themes may implement their own search type and theme
 * function completely bypassing this template.
 *
 * Available variables:
 * - $index: The search index this search is based on.
 * - $result_count: Number of results.
 * - $spellcheck: Possible spelling suggestions from Search spellcheck module.
 * - $search_results: All results rendered as list items in a single HTML
 *   string.
 * - $items: All results as it is rendered through search-result.tpl.php.
 * - $search_performance: The number of results and how long the query took.
 * - $sec: The number of seconds it took to run the query.
 * - $pager: Row of control buttons for navigating between pages of results.
 * - $keys: The keywords of the executed search.
 * - $classes: String of CSS classes for search results.
 * - $page: The current Search API Page object.
 * - $no_results_help: Help text to display under the header if no results were
 *   found.
 *
 * View mode is set in the Search page settings. If you select
 * "Themed as search results", then the child template will be used for
 * theming the individual result. Any other view mode will bypass the
 * child template.
 *
 * @see template_preprocess_search_api_page_results()
 */

?>

<div class="<?php print $classes;?>">
  <?php if ($result_count): ?>
    <?php print render($search_performance); ?>
  <?php endif; ?>
  <?php print render($spellcheck); ?>
  <?php if ($result_count): ?>
    <h2><?php print t('Search results');?></h2>
    <ol class="search-results">
      <?php print render($search_results); ?>
    </ol>
    <?php print render($pager); ?>
  <?php else : ?>
    <h2>No Results</h2>
    <p>Sorry we couldn’t find a result for your search.
       Try to search again by, checking your search for spelling mistakes
       and/or reducing the number of keywords used. You can also try using
       a broader search phrase.</p>
    <h2><?php print t('Are you searching for a Part Number or Serial Number?');?></h2>
    <?php
      $block = module_invoke('views', 'block_view', 'search_part_number-block');
      print render($block['content']);
    ?>
  <?php endif; ?>
</div>
