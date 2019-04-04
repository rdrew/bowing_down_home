<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top
 *     class.
 * - $region: The name of the region variable as defined in the theme's .info
 *   file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 */
$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'menu-site-menu'));

?>

<ul class="footer_logos menu">
  <li class="islandora_logo">
<a href="http://islandarchives.ca"><img alt="" src="<?php print drupal_get_path('theme', 'bowing_down_home'); ?>/dist/assets/images/footer_01-island_archives.png"></a>
</li>
  <li class="upei_logo">
<a href="http://islandarchives.ca"><img alt="" src="<?php print drupal_get_path('theme', 'bowing_down_home'); ?>/dist/assets/images/footer_02-upeishield.png"></a>
</li>
  <li class="cmh_logo">
<a href="http://islandarchives.ca"><img alt="" src="<?php print drupal_get_path('theme', 'bowing_down_home'); ?>/dist/assets/images/footer_02-CMH.png"></a>
</li>
</ul>
<div class="islandora-link">
            <h3 class="rtecenter"><a href="http://Islandora.ca">Powered by Islandora</a></h3>
    </div>



<div class="footer_menu">
  <?php print drupal_render($main_menu_tree); ?>
</div>
<?php if ($content): ?>
  <div<?php print $attributes; ?>>
    <?php print $content; ?>
  </div>
<?php endif; ?>
