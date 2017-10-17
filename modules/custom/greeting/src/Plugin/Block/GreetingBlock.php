<?php

namespace Drupal\greeting\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Greeting' Block.
 *
 * @Block(
 *   id = "greeting_block",
 *   admin_label = @Translation("Greeting Block"),
 *   category = @Translation("Greeting Block"),
 * )
 */
class GreetingBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t($this->HourChecker()),
        );
    }
    public function HourChecker()
    {
        $hour=date("G");
        if ($hour>=17 && $hour<23 )
        {
            $momentofday="Good Evening!";
        }
        if ($hour>=23 && $hour<6)
        {
            $momentofday="Good Night!";
        }
        if ($hour>= 6 && $hour < 12)
        {
            $momentofday="Good Morning!";
        }
        if ($hour>=12 && $hour<17)
        {
            $momentofday="Good Afternoon!";
        }
        return $momentofday;
    }

}