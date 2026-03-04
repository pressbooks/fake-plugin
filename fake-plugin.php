<?php

/**
 * Plugin Name: Fake Plugin
 * Plugin URI: https://pressbooks.org
 * Description: Plugin for testing purposes.
 * x-release-please-start-version
 * Version: 1.9.15
 * x-release-please-end
 * Requires at least: 6.5.2
 * Requires PHP: 8.1
 * Author: Pressbooks (Book Oven Inc.)
 * Author URI: https://pressbooks.org
 * Text Domain: pressbooks-fake-plugin
 * License: GPL v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Network: True
 */

if (! defined('ABSPATH')) {
    return;
}

/**
 * Load plugin textdomain for translations.
 */
add_action('plugins_loaded', function () {
    load_plugin_textdomain('pressbooks-fake-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages');
});

/**
 * Register the Tools page in the admin menu.
 */
add_action('admin_menu', function () {
    add_management_page(
        __('Fake Plugin Tools', 'pressbooks-fake-plugin'),
        __('Fake Plugin', 'pressbooks-fake-plugin'),
        'manage_options',
        'fake-plugin-tools',
        'pressbooks_fake_plugin_render_tools_page'
    );
});

/**
 * Render the Tools page content.
 */
function pressbooks_fake_plugin_render_tools_page(): void
{
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(__('Fake Plugin Tools', 'pressbooks-fake-plugin')); ?></h1>

        <p><?php echo esc_html(__('This is a test plugin used to verify the Pressbooks translation workflow with Crowdin.', 'pressbooks-fake-plugin')); ?></p>

        <h2><?php echo esc_html(__('Translation Status', 'pressbooks-fake-plugin')); ?></h2>

        <table class="widefat fixed striped">
            <thead>
                <tr>
                    <th><?php echo esc_html(__('Item', 'pressbooks-fake-plugin')); ?></th>
                    <th><?php echo esc_html(__('Status', 'pressbooks-fake-plugin')); ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo esc_html(__('Text domain loaded', 'pressbooks-fake-plugin')); ?></td>
                    <td><?php echo esc_html(__('Yes', 'pressbooks-fake-plugin')); ?></td>
                </tr>
                <tr>
                    <td><?php echo esc_html(__('Translation files directory', 'pressbooks-fake-plugin')); ?></td>
                    <td><code>languages/</code></td>
                </tr>
                <tr>
                    <td><?php echo esc_html(__('Current locale', 'pressbooks-fake-plugin')); ?></td>
                    <td><code><?php echo esc_html(get_locale()); ?></code></td>
                </tr>
            </tbody>
        </table>

        <h2><?php echo esc_html(__('Sample Translatable Strings', 'pressbooks-fake-plugin')); ?></h2>

        <div class="card" style="max-width: 600px;">
            <p><strong><?php echo esc_html(__('Welcome message:', 'pressbooks-fake-plugin')); ?></strong>
                <?php echo esc_html(__('Welcome to the Fake Plugin testing tool.', 'pressbooks-fake-plugin')); ?>
            </p>
            <p><strong><?php echo esc_html(__('Instructions:', 'pressbooks-fake-plugin')); ?></strong>
                <?php echo esc_html(__('Use this page to verify that translations are loaded correctly from Crowdin.', 'pressbooks-fake-plugin')); ?>
            </p>
            <p><strong><?php echo esc_html(__('Tip:', 'pressbooks-fake-plugin')); ?></strong>
                <?php echo esc_html(__('Switch your site language in Settings to see translated strings.', 'pressbooks-fake-plugin')); ?>
            </p>
        </div>

        <h2><?php echo esc_html(__('Actions', 'pressbooks-fake-plugin')); ?></h2>

        <p class="description">
            <?php echo esc_html(__('No actions are available. This page is for translation testing only.', 'pressbooks-fake-plugin')); ?>
        </p>
    </div>
    <?php
}
