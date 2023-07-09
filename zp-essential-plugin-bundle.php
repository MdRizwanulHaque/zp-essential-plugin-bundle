<?php
/**
 * Plugin Name: ZP Essential Plugin Bundle
 * Description: Installs a bundle of essential plugins for bloging and blog monetization.
 * Version: 1.0.0
 * Author: Md. Rizwanul Haque
 */

// Include the TGM Plugin Activation library
require_once plugin_dir_path(__FILE__) . 'includes/class-tgm-plugin-activation.php';

// Register and enqueue the TGM Plugin Activation library
add_action('tgmpa_register', 'plugin_bundle_register_required_plugins');
function plugin_bundle_register_required_plugins() {
    $plugins = array(
        array(
            'name' => 'WordPress SEO',
            'slug' => 'wordpress-seo',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/wordpress-seo.zip',
        ),
        array(
            'name' => 'Elementor',
            'slug' => 'elementor',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/elementor.zip',
        ),
        array(
            'name' => 'Pro Elements',
            'slug' => 'pro-elements',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://github.com/proelements/proelements/releases/download/v3.14.0/pro-elements.zip',
        ),
        array(
            'name' => 'WP Rocket LoadCSS',
            'slug' => 'wp-rocket-loadcss',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://github.com/ensemblebd/wp-rocket-loadcss/archive/master.zip',
        ),
        array(
            'name' => 'Easy Table of Contents',
            'slug' => 'easy-table-of-contents',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/easy-table-of-contents.zip',
        ),
        array(
            'name' => 'Mashsharer',
            'slug' => 'mashsharer',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/mashsharer.zip',
        ),
        array(
            'name' => 'WP Smush',
            'slug' => 'wp-smushit',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/wp-smushit.zip',
        ),
        array(
            'name' => 'Convertful',
            'slug' => 'convertful',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/convertful.zip',
        ),
        array(
            'name' => 'Pretty Link',
            'slug' => 'pretty-link',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/pretty-link.zip',
        ),
        array(
            'name' => 'Google Site Kit',
            'slug' => 'google-site-kit',
            'required' => true,
            'force_activation' => true,
            'source' => 'https://downloads.wordpress.org/plugin/google-site-kit.zip',
        ),
    );

    $config = array(
        'id' => 'zp-essential-plugin-bundle', // Unique ID for your plugin bundle
        'default_path' => '', // Default path for bundled plugins.
        'menu' => 'install-required-plugins',
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => true,
        'message' => '',
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'text-domain'),
            'menu_title' => __('Install Plugins', 'text-domain'),
            'installing' => __('Installing Plugin: %s', 'text-domain'),
            'oops' => __('Something went wrong with the plugin API.', 'text-domain'),
            'notice_can_install_required' => _n_noop(
                'This plugin requires the following plugins: %1$s.',
                'This plugin requires the following plugins: %1$s.',
                'text-domain'
            ),
            'notice_can_install_recommended' => _n_noop(
                'This plugin recommends the following plugins: %1$s.',
                'This plugin recommends the following plugins: %1$s.',
                'text-domain'
            ),
            'notice_cannot_install' => _n_noop(
                'Sorry, but you do not have the correct permissions to install the %s plugin.',
                'Sorry, but you do not have the correct permissions to install the %s plugins.',
                'text-domain'
            ),
            'notice_ask_to_update' => _n_noop(
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'text-domain'
            ),
            'notice_ask_to_update_maybe' => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'text-domain'
            ),
            'notice_cannot_update' => _n_noop(
                'Sorry, but you do not have the correct permissions to update the %s plugin.',
                'Sorry, but you do not have the correct permissions to update the %s plugins.',
                'text-domain'
            ),
            'notice_can_activate_required' => _n_noop(
                'The following required plugins are currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'text-domain'
            ),
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugins are currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'text-domain'
            ),
            'notice_cannot_activate' => _n_noop(
                'Sorry, but you do not have the correct permissions to activate the %s plugin.',
                'Sorry, but you do not have the correct permissions to activate the %s plugins.',
                'text-domain'
            ),
            'install_link' => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'text-domain'
            ),
            'update_link' => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'text-domain'
            ),
            'activate_link' => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'text-domain'
            ),
            'return' => __('Return to Required Plugins', 'text-domain'),
        ),
    );

    tgmpa($plugins, $config);
}
