<?php

namespace GearGag_WooCommerce_Toolkit\admin;

defined('WPINC') || die();

use GearGag_WooCommerce_Toolkit\settings_page\Settings_Page;
use GearGag_WooCommerce_Toolkit\tools\contracts\Bootable;
use GearGag_WooCommerce_Toolkit\tools\contracts\Initable;
use WP_Review_Me;
use function GearGag_WooCommerce_Toolkit\is_woocommerce_active;
use const GearGag_WooCommerce_Toolkit\PLUGIN_BASE;
use const GearGag_WooCommerce_Toolkit\PLUGIN_DOCUMENT_URI;
use const GearGag_WooCommerce_Toolkit\PLUGIN_SLUG;
use const GearGag_WooCommerce_Toolkit\PREMIUM_URL;

class Admin implements Initable, Bootable {
	public function init() {
		new WP_Review_Me(['days_after' => 10, 'type' => 'plugin', 'slug' => PLUGIN_SLUG]);
	}

	public function boot() {
		add_action('admin_notices', [$this, 'global_note']);
		// add options for plugin.
		//add_action('plugin_action_links_' . PLUGIN_BASE, [$this, 'action_links']);
		add_filter('plugin_row_meta', [$this, 'row_meta'], 10, 2);
	}

	public function global_note() {
		if (!is_woocommerce_active()) {
			printf(
				'<div id="message" class="notice notice-error"><p>%s</p></div>',
				esc_html__('Please install and activate WooCommerce to use Toolkit for WooCommerce plugin.', 'toolkit-for-woocommerce')
			);
		}
	}

	public function action_links($links) {
		$deactivate_link = isset($links['deactivate']) ? $links['deactivate'] : '';

		unset($links['deactivate']);

		$links['settings'] = sprintf(
			'<a href="%s">%s</a>',
			add_query_arg(['page' => Settings_Page::PLUGIN_PAGE_SLUG], admin_url('admin.php')),
			esc_html__('Settings', 'toolkit-for-woocommerce')
		);

		if (!empty($deactivate_link)) {
			$links['deactivate'] = $deactivate_link;
		}

		if (!is_plugin_active('toolkit-for-woocommerce-pro/index.php')) {
			$links['pro'] = sprintf(
				'<a href="%s" target="_blank" style="color: #349e34;"><b>%s</b></a>',
				esc_url(PREMIUM_URL),
				__('Go Pro', 'toolkit-for-woocommerce')
			);
		}

		return $links;
	}

	public function row_meta($links, $file) {
		if ($file === PLUGIN_BASE) {
			$links['docs'] = sprintf(
				'<a href="%s" target="_blank">%s</a>',
				esc_url(PLUGIN_DOCUMENT_URI),
				esc_html__('Docs & FAQ', 'toolkit-for-woocommerce')
			);
		}

		return $links;
	}
}
