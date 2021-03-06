<?php
/**
 * Right Sidebar Half Page
 *
 *
 * @file           sidebar-right-half.php
 * @package        StrapPress 
 * @author         Brad Williams 
 * @copyright      2010 - 2015 Brag Interactive
 * @license        license.txt
 * @version        Release: 3.3.6
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
      
        <div class="col-lg-6">
        <aside id="widgets" class="well">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('right-sidebar-half')) : ?>
            
                <div class="widget-title"><?php _e('In Archive', 'responsive'); ?></div>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>

                <div class="widget-title"><?php _e('My Account', 'responsive'); ?></div>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>

            <?php endif; //end of sidebar-right-half ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </aside><!-- end of #widgets -->
    </div>
</div>