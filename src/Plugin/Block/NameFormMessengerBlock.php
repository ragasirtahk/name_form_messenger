<?php

namespace Drupal\name_form_messenger\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Asks user's name and then displays it back.
 *
 * @Block(
 *   id = "name_form_messenger",
 *   admin_label = @Translation("Name Form"),
 * )
 */
class NameFormMessengerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return \Drupal::formBuilder()->getForm('Drupal\name_form_messenger\Form\NameFormMessenger');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $form = parent::blockForm($form, $form_state);

    return $form;
  }

}
