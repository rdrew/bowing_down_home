<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * bowing down home theme.
 */
function bowing_down_home_form_alter(&$form, &$form_state, $form_id) {
   // target a single form
  if($form_id == "islandora_solr_simple_search_form"){
    $form['simple']['islandora_simple_search_query']['#default_value'] = t('Search:'); // Set a default value for the textfield
  $form['simple']['islandora_simple_search_query']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search:';}";
    $form['simple']['islandora_simple_search_query']['#attributes']['onfocus'] = "if (this.value == 'Search:') {this.value = '';}";
  }

} 
