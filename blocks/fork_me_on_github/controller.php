<?php     

/**
 * Fork me on GitHub block
 *
 * @package Blocks
 * @subpackage BlockTypes
 * @author Michael Krasnow <mnkras@gmail.com>
 * @category Packages
 * @copyright  Copyright (c) 2011 Michael Krasnow. (http://www.mnkras.com)
 *
 */
 
defined('C5_EXECUTE') or die("Access Denied.");

class ForkMeOnGithubBlockController extends BlockController {
	
	protected $btName = 'Fork me on GitHub';
	protected $btDescription = 'Put a ribbon in the top left or right of your screen that points to your project on GitHub.';
	protected $btTable = 'btForkMeOnGithub';
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "350";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = false;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = 720;
	
	public function add() {
		$this->set('add', true);
	}
	
	public function edit() {
		$this->set('add', false);
	}

	public function getJavaScriptStrings() {
		return array(
			'url-required' => t('Please enter a url to your GitHub project.')
		);
	}
	
}
