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

class ForkMeOnGithubPackage extends Package {

	protected $pkgHandle = 'fork_me_on_github';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '1.2';
	
	public function getPackageName() {
		return t("Fork Me on GitHub");
	}
	
	public function getPackageDescription() {
		return t("Put a ribbon in the top left or right of your screen that points to your project on GitHub.");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage("fork_me_on_github", $pkg);
	}

}