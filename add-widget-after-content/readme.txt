=== Add Widget After Content ===
Contributors: apintop
Donate link: https://paypal.me/arelthia?country.x=US&locale.x=en_US
Tags: posts, widget
Requires at least: 4.9
Tested up to: 6.6.2
Stable tag: 2.5.2
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin is built to add a widget area/sidebar after content. 

== Description ==

The plugin adds a sidebar that you can add any widget content to. The widget is then displayed on single posts or pages after the content, before the comments. You can prevent the after content widget from showing on a post or page from the editor page. You can also prevent the after content widget from displaying on specific posts types, categories, or post formats. 

== Installation ==

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
1. Search for 'add-widget-after-content'
1. Click 'Install Now'
1. Activate the plugin on the Plugins dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the Plugins dashboard
1. Navigate to the 'Upload' area
1. Select 'add-widget-after-content.zip' from your computer
1. Click 'Install Now'
1. Activate the plugin in the Plugins dashboard

= Using FTP =

1. Download 'add-widget-after-content.zip'
1. Extract the 'add-widget-after-content' directory to your computer
1. Upload the 'add-widget-after-content' directory to the '/wp-content/plugins/' directory
1. Activate the plugin in the Plugins dashboard

== Frequently Asked Questions ==

= Where is the settings page located? =
The settings page is located under the "Appearance" menu

= Can you tell the widget which post types to display on? =
The settings page is located under the "Appearance" menu. On the settings page you can exclude a post type or a post format. 

= How can I add the widget area after my page builder content? =
Go to Appearance > Widget After Content and set the Widget Priority to 99.

= How can I add the widget area above/before my recent posts? =
Go to Appearance > Widget After Content and set the Widget Priority to a number between 1 and 10.

= How do I style the widget area? =
Style the AWAC After Content Widget Area using the `.awac-wrapper` class in your css file. You can also style the awac class that is nested in the awac-wrapper class.

= Will the widget area show on my front pages? =
The widget area will not show on the pages that you have set to be the front page or the posts page on Settings > Reading Settings > Front Page Displays > A Static Page.


== Screenshots ==

1. Widget After Content Settings Page  
2. Add a widget to the After Content sidebar
3. Remove widget after content for a post



== ChangeLog ==

= 2.5.2 =
*  Fix Undefined array key "awac_meta_metabox_nonce"
= 2.5.1 =
*  bump - No functional changes
= 2.5 =
*  Fix security issue
*  Remove depreciated extensions
= 2.4.5 =
*  bump - No functional changes
*  Fix broken links and remove ads
= 2.4.4 =
*  Fix I18N Issue
*  Update Description 
*  Update includes/ps
= 2.4.1 =
*   Update required version
*   Add filter awac_add_tabs for options tabs
= 2.4 =
*   Add filter based on categories
= 2.3.1 =
*   Fix bug
= 2.3 =
*   Fix depreciated misc argument
* 	Add support for priority numbers from 1 to 100
= 2.2.1 =
*   Fix awac_priority default value
= 2.2 = 
* 	Add option to set filter priority to high or low
*	Add filters for widget area args
* 	Add tabs to the settings page
= 2.1.2 =
* 	Increased filter priority
= 2.1 =
* 	Add filters to awac dynamic sidebar content
* 	Change instance name
= 2.0.4 =
*	Add link to documentation
= 2.0.3 =
*	Fix meta box not showing when post formats not supported
= 2.0.2 =
*   Add widget area to page
*	Remove meta box when post type or post format is excluded.
= 2.0.1 =
*   Fix Uninstall issue
= 2.0.0 =
*   Add settings page to allow exclusion by post type and post format
= 1.0.2 =
*   Changed widget ids to classes so you can add two widgets after the content. 
= 1.0.0 =
*   First release


