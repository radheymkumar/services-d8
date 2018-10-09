<?php
/**
* @file providing the service that say hello world and hello 'given name'.
*
*/

// https://www.valuebound.com/resources/blog/how-to-define-your-own-services-drupal-8

namespace  Drupal\custom_services_example\Services;

class HelloServices {

	 protected $say_something;

	 public function __construct() {
	   $this->say_something = 'Hello World!';
	 }

	 public function sayHello($name = ''){
	   if (empty($name)) {
	     return $this->say_something;
	   }
	   else {
	     return "Hello " . $name . "!";
	   }
	 }

	 public function howAreYou() {
	 	return "HI... How are you?";
	 }

	 public function myloginUser() {
	 	$user[] = \Drupal::currentUser()->getEmail();
	 	$user[] = \Drupal::currentUser()->id();
	 	return $user;
	 }

}