<?php
namespace TYPO3\TYPO3\Controller\Module;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.TYPO3".                *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * The TYPO3 Standard module controller
 *
 * @FLOW3\Scope("singleton")
 */
class StandardController extends \TYPO3\FLOW3\MVC\Controller\ActionController {

	/**
	 * @var array
	 */
	protected $moduleConfiguration;

	/**
	 * @return void
	 */
	protected function initializeAction() {
		$this->moduleConfiguration = $this->request->getInternalArgument('__moduleConfiguration');
	}

	/**
	 * @param \TYPO3\FLOW3\MVC\View\ViewInterface $view
	 * @return void
	 */
	protected function initializeView(\TYPO3\FLOW3\MVC\View\ViewInterface $view) {
		$view->assign('moduleConfiguration', $this->moduleConfiguration);
	}

	/**
	 * Use this method to set an alternative title than the module label
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->request->setArgument('title', $title);
	}

	/**
	 * @return void
	 */
	public function indexAction() {
	}

}
?>