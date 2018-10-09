<?php

	// https://www.valuebound.com/resources/blog/how-to-define-your-own-services-drupal-8
namespace Drupal\custom_services_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\custom_services_example\Services\HelloServices;
/**
* 
*/
class CtrlPage extends ControllerBase
{
	public function servicesPage() {
		
		$service = \Drupal::service('custom_services_example.say_hello');
		$myService1 = $service->sayHello('radhey');
		$myService2 = $service->howAreYou();
		$myService3 = $service->myloginUser();
		
		$msg['msg1'] = [
			'#type' => 'markup',
			'#markup' => $myService1,
		];
		$msg['msg2'] = [
			'#type' => 'markup',
			'#markup' => $myService2,
		];
		$msg['msg3'] = [
			'#type' => 'markup',
			'#markup' => $myService3[0],
		];

		return $msg;
	}
	
}