<?php
function widget_bpNotificationWidget($args) {
	extract($args);
	
	global $bp;
	
	if(is_user_logged_in()) :
		echo $before_widget;
		echo $before_title;
		_e( 'Notifications', 'buddypress' );
		
		if ( $notifications = bp_core_get_notifications_for_user( $bp->loggedin_user->id ) ) { ?>
			<span>(<?php echo count($notifications) ?>)</span>
		<?php
		}		
		echo $after_title;

		echo '<ul>';
		
		if ( $notifications ) { ?>
			<?php $counter = 0; ?>
			<?php for ( $i = 0; $i < count($notifications); $i++ ) { ?>
			<?php $alt = ( 0 == $counter % 2 ) ? ' class="alt"' : ''; ?>
			<li<?php echo $alt ?>><?php echo $notifications[$i] ?></li>
			<?php $counter++; ?>
			<?php } ?>
			<?php } else { ?>
			<li><a href="<?php echo $bp->loggedin_user->domain ?>"><?php _e( 'No new notifications.', 'buddypress' ); ?></a></li>
		<?php
		}
		
		echo '</ul>';
		?>
		    <?php echo $after_widget; ?>
<?php
	endif;
}
register_sidebar_widget('BP-NotificationWidget', 'widget_bpNotificationWidget');
?>