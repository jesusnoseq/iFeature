<?php

/**
* Exit if file is directly accessed. 
*/ 
if ( !defined('ABSPATH')) exit;

/*
	Search Form
	
	Creates the iFeature search form 
	
	Copyright (C) 2011 CyberChimps
*/

?>

<form method="get" class="searchform" action="<?php echo home_url(); ?>/">
	<div id="magnify"><img src="<?php echo get_template_directory_uri() ;?>/images/magnify.png" alt="magnify" /></div>
	<div><input type="text" name="s" class="s" id="searchsubmit" placeholder="<?php printf( __( 'Search', 'core' )); ?>" /></div>
	<div><input type="submit" class="searchsubmit" value="" /></div>
</form>