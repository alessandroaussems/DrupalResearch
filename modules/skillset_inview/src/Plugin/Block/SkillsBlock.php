<?php

namespace Drupal\skillset_inview\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;

/**
 * Class SkillsBlock.
 *
 * @package Drupal\skillset_inview\Form
 *
 * @Block(
 *   id = "skillset_inview_zero",
 *   admin_label = @Translation("Skillset Inview"),
 *   category = @Translation("Custom Blocks"),
 * )
 */
class SkillsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'label_display' => FALSE
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $block = [];
    $block['#cache'] = [
      'contexts' => ['user.permissions'],
    ];
    $db = \Drupal::service('database');
    $results = $db->select('skillset_inview', 'w')
      ->fields('w')
      ->orderBy('weight')
      ->execute()
      ->fetchAll();
    if (!empty($results)) {
      $config = \Drupal::config('skillset_inview.settings');
      $color_active = '0';
      $color = [];
      $heading = '';
      if (!empty($config)) {
        $heading = $config->get('heading');
        $color_active = $config->get('color-active');
        if ($color_active == 1) {
          $color = [
            'bar' => $config->get('color-bar'),
            'bar_opacity' => $config->get('color-bar-opacity'),
            'back' => $config->get('color-back'),
            'back_opacity' => $config->get('color-back-opacity'),
            'border' => $config->get('color-border'),
            'labels' => $config->get('color-labels'),
            'percent_inside' => $config->get('color-percent-inside'),
            'percent_outside' => $config->get('color-percent-outside'),
          ];
        }
      }
      $items = [];
      foreach ($results as $item) {
        $items[] = (array) $item;
      }
      $block['content'] = [
        '#theme' => 'skillset_inview',
        '#header' => $heading,
        '#items' => $items,
        '#color_active' => $color_active,
        '#color' => $color,
        '#cache' => [
          'keys' => ['skillset-inview'],
          'tags' => [
            'colorize' => $color_active,
            'color' => $color,
            'header' => $heading,
            'items' => $items,
          ],
        ],
      ];
      $block['assets'] = [
        '#attached' => [
          'library' => [
            'skillset_inview/block',
          ],
        ],
      ];
    }
    else {
      if (\Drupal::currentUser()->hasPermission('administer skillset inview')) {
        $add_skill = Link::createFromRoute(t('Add Skill'), 'skillset_inview.add_form');
        $block['#markup'] = t('No skills have been added yet!  @url', ['@url' => $add_skill->toString()]);
      }
    }

    return $block;
  }

}
