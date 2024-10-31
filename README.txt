=== Plugin Name ===
Contributors: enshrined
Donate link: http://enshrined.co.uk
Tags: Images, Parallelized Downloads, Parallel Downloads, Domain Sharding, Optimisation
Requires at least: 3.0.1
Tested up to: 4.7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Enable Parallelized Downloads / Domain Sharding for your WordPress images.

== Description ==

This plugin enables Parallelized Downloads / Domain Sharding for your WordPress images.

This is a good alternative if you don't want to pay for a CDN but have an image heavy site.

Domain sharding is a technique used to increase the amount of simultaneously downloaded resources for a particular website by using multiple domains.
This allows websites to be delivered faster to users as they do not have to wait for the previous set of resources to be downloaded before beginning the next set.

This plugin is only useful if you have an image heavy site. For sites with very few images you may see an increase in load times with this plugin due to increased numbers of DNS lookups.

See [here](https://www.keycdn.com/support/domain-sharding/) for more information on Domain Sharding

== Installation ==

1. Install "Domain Sharding" either via the WordPress.org plugin directory, or by uploading the files to your server inside the wp-content/plugins folder of your WordPress installation.
2. Activate "Domain Sharding" plugin via WordPress Settings.

Visit `Settings > Parallelize Downloads` to add your domains

== Frequently Asked Questions ==

= My images have broken =

Please double check that your domains' DNS A records are correctly pointed to your website

= How many domains should I use? =

We suggest anywhere between 2 and 4

== Screenshots ==


== Changelog ==

= 1.0 =
* Initial release