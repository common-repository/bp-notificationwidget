<?php
/*
Plugin Name: BP-NotificationWidget
Plugin URI: http://www.wptoolbox.de/plugins/2010/01/bp-notificationwidget/
Description: This Plugin adds a sidebar widget with the latest notifications for a BuddyPress user. / Dieses BuddyPress-Plugin erstellt ein Sidebar-Widget, welches die Benachrichtigungen f&uuml;r angemeldete BuddyPress-User ausgibt.
Version: 1.4 
Revision Date: 10.03.2010
Author: Yaway Media
Author URI: http://www.yaway.de
License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
*/

function bp_notificationwidget_init() {
	require( dirname( __FILE__ ) . '/bp-notificationwidget.php' );
}
add_action( 'bp_init', 'bp_notificationwidget_init' );
?>