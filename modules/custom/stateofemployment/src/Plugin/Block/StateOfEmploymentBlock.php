<?php

namespace Drupal\stateofemployment\Plugin\Block;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'State Of Employment' Block.
 *
 * @Block(
 *   id = "stateofemployment_block",
 *   admin_label = @Translation("State of Employment Block"),
 *   category = @Translation("State of Employment Block"),
 * )
 */
class StateOfEmploymentBlock extends BlockBase implements BlockPluginInterface {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->configuration['stateofemployment_block'],//take values from block
            '#cache' => ['max-age' => 0,],
        );
    }
    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        $form = parent::blockForm($form, $form_state); //the form is first defined by the reference to its parent class through the following code statement

        $config = $this->getConfiguration();

        $form['stateofemployment_block'] = array(
            //Next, we are adding a new field to the form. This process is called polymorphism
            '#type' => 'textfield',
            '#title' => $this->t('State Of Employment'),
            '#description' => $this->t('What is your current state of employment?'),
            '#default_value' => isset($config['stateofemployment_block']) ? $config['stateofemployment_block'] : '',
        );

        return $form;
    }
    public function blockSubmit($form, FormStateInterface $form_state) {
        //we have to tell Drupal to save the values from our form into the configuration for this block.
        parent::blockSubmit($form, $form_state);
        $values = $form_state->getValues();
        $this->configuration['stateofemployment_block'] = $values['stateofemployment_block'];
    }
}