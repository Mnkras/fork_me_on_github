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
 
defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-block-fork-me-on-github">
	<h2><?php   echo t('Project URL:')?></h2>
	<pre><?php   echo t('eg: http://github.com/concrete5/concrete5/')?></pre>
	<?php   echo $form->text('projecturl', $projecturl, array('style' => 'width: 95%;')); ?>
	
	<h2><?php   echo t('Position:')?></h2>
	<input type="radio" name="position" id="position-left" value="left" <?php   if (($position == 'left') || ($add)) { ?> checked<?php   } ?> />
	<?php   echo t('Top Left')?>
			
	<input type="radio" name="position" id="position-right" value="right" <?php   if ($position == 'right') { ?> checked<?php   } ?>>
	<?php   echo t('Top Right')?>

	<h2> <?php   echo t('Color:')?></h2>
	<select name="color" id="color">
		
			<option value="Red" <?php   if ($color == 'Red') { ?> selected <?php   } ?>><?php   echo t('Red')?></option>
			<option value="Green" <?php   if ($color == 'Green') { ?> selected <?php   } ?>><?php   echo t('Green')?></option>
			<option value="Black" <?php   if ($color == 'Black') { ?> selected <?php   } ?>><?php   echo t('Black')?></option>
			<option value="Orange" <?php   if ($color == 'Orange') { ?> selected <?php   } ?>><?php   echo t('Orange')?></option>
			<option value="Grey" <?php   if ($color == 'Grey') { ?> selected <?php   } ?>><?php   echo t('Grey')?></option>
			<option value="White" <?php   if ($color == 'White') { ?> selected <?php   } ?>><?php   echo t('White')?></option>
	
	</select>
	
</div>


