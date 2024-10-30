=== BP-NotificationWidget ===
Contributors: tom@yaway
Tags: Buddypress, Notifications, Widget
Requires at least: WP 2.9.1, BuddyPress 1.2.3
Tested up to: WP 2.9.2, BuddyPress 1.2.3
Stable tag: 1.4

This Plugin adds a sidebar widget with the latest notifications for a BuddyPress user.

== Description ==

English: This Plugin adds a sidebar widget with the latest notifications for a BuddyPress user.

German: Dieses BuddyPress-Plugin erstellt ein Sidebar-Widget, welches die Benachrichtigungen f&uuml;r angemeldete BuddyPress-User ausgibt.


== Installation ==
= English Version: =
1. Upload this plugin to your `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add the BP-NotificationWidget to your sidebar.
4. Done!

Important: Please deactivate the plugin before upgrading to a newer version of the plugin!

= German Version: =
1. Pluginordner in das Verzeichnis `/wp-content/plugins/` hochladen.
2. Plugin via Adminpanel aktivieren.
3. Das BP-NotificationWidget zum Sidebar hinzuf&uuml;gen.
4. Fertig!

Wichtig: Vor dem Upgrade auf eine neuere Version des Plugins das Plugin deaktivieren und danach wieder aktivieren!

== Frequently Asked Questions ==

= How can I disable the BuddyPress admin bar? =

Copy the following code in your wp-config.php in the root folder of your WordPress installation:
`define ( 'BP_DISABLE_ADMIN_BAR', true );`


== ChangeLog ==

= 1.0 =
* Initial release

= 1.1 =
* Added check that BuddyPress is active and loaded

= 1.2 =
* Minor code changes for BuddyPress 1.2

= 1.3 =
* Added a loader.php to check that BuddyPress it is active before doing anything
* Minor code changes for BuddyPress 1.2.1

= 1.4 =
* Added check if user is logged in
* Other minor changes (Thanks to r-a-y) 