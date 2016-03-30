<?php
/**
 * @file
 * Code for the Gov Analytics Dashboard.
 */

/**
 * Implements hook_theme().
 *
 * This defines the template file for the view mode.
 */
function gov_analytics_dashboard_theme() {
  return array(
    'web_analytics' => array(
      'template' => 'web-analytics',
      'path' => drupal_get_path('module', 'gov_analytics_dashboard') . '/templates',
    ),
  );
}

