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

$c = Page::getCurrentPage();
if($c->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item">
		<div style="padding:8px 0px;"><?php   echo t('Fork me on GitHub Block.'); ?></div>
	</div>
<?php   } 

$colorurl = "";
if($position == 'left') {
	
	switch($color) {
		case "Red":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png";
			break;
			
		case "Green":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_left_green_007200.png";
			break;

		case "Black":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png";
			break;

		case "Orange":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png";
			break;	

		case "Grey":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png";
			break;

		case "White":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_left_white_ffffff.png";
			break;	
	
	}

} else {

	switch($color) {
		case "Red":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png";
			break;
			
		case "Green":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png";
			break;

		case "Black":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png";
			break;

		case "Orange":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png";
			break;	

		case "Grey":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png";
			break;

		case "White":
			$colorurl = "https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png";
			break;	
	
	}

}
?>

<a href="<?php   echo $projecturl?>">
<img style="position: absolute; top: 0; <?php   echo $position?>: 0; border: 0;" src="<?php   echo $colorurl?>" alt="<?php   echo t('Fork me on GitHub')?>">
</a>


