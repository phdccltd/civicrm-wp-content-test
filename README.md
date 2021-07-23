# civicrm-wp-content-test

CiviCRM 5.39 for WordPress creates an issue for some sites which is solved using 
[phdccltd/civicrm-539-wp-content-fix](https://github.com/phdccltd/civicrm-539-wp-content-fix).

For sites that don't have this issue, this plugin forces the issue to appear by calling `wp_trim_excerpt()` before the main output is returned for display.

# Installation

Follow [these instructions](https://www.wpbeginner.com/beginners-guide/how-to-install-wordpress-plugins-and-themes-from-github/) to download this
plugin's zip file and then upload via Plugins -> Add new on your WordPress site.

# License

[MIT](LICENCE)
