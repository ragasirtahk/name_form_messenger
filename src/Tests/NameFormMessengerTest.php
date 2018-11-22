<?php

namespace Drupal\name_form_messenger\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provide some basic tests for our NameFormMessenger form.
 *
 * @group name_form
 */
class NameFormMessengerTest extends WebTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = ['node', 'name_form_messenger'];

  /**
   * Tests that 'name/form_messenger' returns a 200.
   */
  public function testNameFormMessengerRouterUrlIsAccessible() {
    $this->drupalGet('name/form_messenger');
    $this->assertResponse(200, 'URL is accessible to user.');
  }

  /**
   * Tests that the form has a submit button to use.
   */
  public function testNameFormMessengerSubmitButtonExists() {
    $this->drupalGet('name/form_messenger');
    $this->assertResponse(200);
    $this->assertFieldById('edit-submit', 'Submit', 'User can submit the form.');
  }

  /**
   * Test the submission of the form.
   */
  public function testNameFormMessengerSubmit() {
    $this->drupalPostForm(
      'name/form_messenger',
      [
        'name' => 'Test Name',
      ],
      t('Submit')
    );

    $this->assertText('Name: Test Name');
  }

}
