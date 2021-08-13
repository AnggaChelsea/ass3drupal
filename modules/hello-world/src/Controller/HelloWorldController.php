<?php

namespace Drupal\hello_world\Controller;

class HelloWorldController {
  public function hello() {
    return array(
      '#title' => 'Hello world',
      '#markup' => 'this is about Hello world'
      );
  }
}