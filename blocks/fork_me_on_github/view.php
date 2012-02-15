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
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/5d21241b64dc708fcbb701f68f72f41e9f1fadd6/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67";
			break;
			
		case "Green":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/edc6dae7a1079163caf7f17c60495bbb6d027c93/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67";
			break;

		case "Black":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/bec6c51521dcc8148146135149fe06a9cc737577/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67";
			break;

		case "Orange":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/6429057dfef9e98189338d22e7f6646c6694f032/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67";
			break;	

		case "Grey":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/ce742187c818c67d98af16f96ed21c00160c234a/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67";
			break;

		case "White":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/c641758e06304bc53ae7f633269018169e7e5851/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f77686974655f6666666666662e706e67";
			break;	
	
	}

} else {

	switch($color) {
		case "Red":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/e6bef7a091f5f3138b8cd40bc3e114258dd68ddf/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67";
			break;
			
		case "Green":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/abad93f42020b733148435e2cd92ce15c542d320/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67";
			break;

		case "Black":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/7afbc8b248c68eb468279e8c17986ad46549fb71/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67";
			break;

		case "Orange":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/30f550e0d38ceb6ef5b81500c64d970b7fb0f028/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67";
			break;	

		case "Grey":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/71eeaab9d563c2b3c590319b398dd35683265e85/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67";
			break;

		case "White":
			$colorurl = "https://d3nwyuy0nl342s.cloudfront.net/img/4c7dc970b89fd04b81c8e221ba88ff99a06c6b61/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67";
			break;	
	
	}

}
?>

<a href="<?php   echo $projecturl?>">
<img style="position: absolute; top: 0; <?php   echo $position?>: 0; border: 0;" src="<?php   echo $colorurl?>" alt="<?php   echo t('Fork me on GitHub')?>">
</a>


