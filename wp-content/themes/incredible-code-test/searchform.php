<?php
/**
 * searchform
 *
 * @package incredible-code-test
 */

?>
<div class="searchform hidden-print">
	<form role="search" method="get" class="navbar-form" action="<?php echo home_url('/'); ?>">
	    <div class="input-group">
	    	<input class="form-control" type="text" name="s" placeholder="Search" title="Search" value="<?php echo get_search_query() ?>">
	        <div class="input-group-btn">
	            <button class="btn btn-default" type="submit" title="Submit Search"><i class="glyphicon glyphicon-search"></i></button>
	        </div>
	    </div>
	</form>
</div>
