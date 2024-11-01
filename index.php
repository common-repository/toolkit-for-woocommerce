<?php
/**
 * Plugin Name: Toolkit for WooCommerce
 * Description: Toolkit for WooCommerce is essential toolkit for WooCommerce
 * Version: 1.0.2
 * Tags: woocommerce, toolkit, hide product title, change product title, paypal
 * Author: GearGag Team
 * Author URI: https://geargag.com
 * License: GPL-3.0
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 * Document URI: https://geargag.com
 * Text Domain: toolkit-for-woocommerce
 * Tested up to: WordPress 5.3
 * WC requires at least: 3.2.0
 * WC tested up to: 3.8.0
 */

namespace GearGag_WooCommerce_Toolkit;

defined('WPINC') || die();

use GearGag_WooCommerce_Toolkit\admin\Admin;
use GearGag_WooCommerce_Toolkit\tools\KSES;

const PLUGIN_FILE = __FILE__;
const PLUGIN_DIR = __DIR__;

final class Plugin {
	public $admin_notices;
	public $batch_delete;
	public $change_paypal_item_name;

	public function __construct() {
		$this->load();
		$this->init();
		$this->core();
		$this->boot();
	}

	public function load() {
		require_once PLUGIN_DIR . '/vendor/autoload.php';
		require_once PLUGIN_DIR . '/constants.php';
		require_once PLUGIN_DIR . '/helpers.php';
	}

	public function init() {
		new KSES();

		if (is_admin()) {
			$this->admin_notices = new Admin();
			$this->admin_notices->init();
			$this->admin_notices->boot();
		}
	}

	public function core() {
		if (!is_woocommerce_active()) {
			return;
		}

		$this->change_paypal_item_name = new Change_Paypal_Item_Name();
		$this->change_paypal_item_name->boot();

		if (!class_exists('GearGag_Toolkit\Batch_Delete_Products')) {
			$this->batch_delete = new Batch_Delete_Products();
			$this->batch_delete->boot();
		}
	}

	public function boot() {
		add_action('plugin_loaded', [$this, 'load_plugin_textdomain']);
	}

	public function load_plugin_textdomain() {
		load_plugin_textdomain('toolkit-for-woocommerce');
	}
}

new Plugin();
