<?php

namespace Drupal\praktikaylesanne\Controller;

use Drupal\Core\Controller\ControllerBase;

class PraktikaylesanneController extends ControllerBase {

  public function content() {
    return [
      '#theme' => 'praktikaylesanne_template',
      '#time_spent' => '9 tundi',
      '#experience' => 'Puudub',
      '#hardest_part' => 'Routing ja Controlleri ühendamine.',
      '#learned' => 'Sain selgema pildi mooduli struktuurist.',
      '#delivery_date' => '03.08.2025',
    ];
  }
}
