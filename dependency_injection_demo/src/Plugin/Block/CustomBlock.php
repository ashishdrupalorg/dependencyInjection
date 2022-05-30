<?php

/**
 * @file
 * Contains \Drupal\customblock\Plugin\Block\CustomBlock.
 */

 namespace Drupal\dependency_injection_demo\Plugin\Block;

 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Form\FormStateInterface;
 use Drupal\Core\Session\AccountInterface;
 use Drupal\Core\Access\AccessResult;

 /**
  * Provides a 'Custom' Block
  * @Block(
  *     id = "dependency_injection_demo",
  *     admin_label = @Translation("Services and Dependency Injection Block"),
  *     category = @Translation("Custom Block Example"),
  * )
  */
  class CustomBlock extends BlockBase{
      /**
       * {@inheritdoc}
       * 
       */
      public function build(){
          $data = \Drupal::service('dependency_injection_demo.db_insert')->getData();
          return[
              '#theme' => 'my_template',
              '#data' => $data,
          ];
      }
  }