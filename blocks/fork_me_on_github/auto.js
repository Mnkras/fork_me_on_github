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
 
ccmValidateBlockForm = function() {

	if ($('#projecturl').val() == '') {
		ccm_addError(ccm_t('url-required'));
	}
	
	return false;
}
