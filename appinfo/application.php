<?php

namespace OCA\Files_mv\Appinfo;

use OC\AppFramework\Utility\SimpleContainer;
use OCA\Files\Controller\ApiController;
use OCP\AppFramework\App;
use \OCA\Files\Service\TagService;
use \OCP\IContainer;

class Application extends App {
	public function __construct(array $urlParams=array()) {
		parent::__construct('files_mv', $urlParams);
		$container = $this->getContainer();

		/**
		 * UserFolder
		 */
		$container->registerService('UserFolder', function (IContainer $c) {
			return $c->query('ServerContainer')->getUserFolder();
		});
	}
}
