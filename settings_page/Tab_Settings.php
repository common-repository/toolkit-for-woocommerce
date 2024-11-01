<?php

namespace GearGag_WooCommerce_Toolkit\settings_page;

defined('WPINC') || die();

use GearGag_WooCommerce_Toolkit\tools\Register_Settings;

class Tab_Settings extends Register_Settings {
	public $default_settings = [
		'enable' => true,
	];

	public function register_setting_fields() {
		return [
			'head' => [
				'title' => __('General', 'toolkit-for-woocommerce'),
				'fields' => [
					[
						'id' => 'enable',
						'name' => __('Toggle', 'toolkit-for-woocommerce'),
						'description' => __('On/off global', 'toolkit-for-woocommerce'),
						'type' => 'toggle',
					],
					[
						'id' => 'text',
						'name' => __('Text', 'toolkit-for-woocommerce'),
						'description' => __('On/off global', 'toolkit-for-woocommerce'),
						'type' => 'text',
						'custom_attributes' => [
							'placeholder' => __('Enter your text here', 'toolkit-for-woocommerce'),
						],
					],
					[
						'id' => 'textarea',
						'name' => __('Textarea', 'toolkit-for-woocommerce'),
						'description' => __('On/off global', 'toolkit-for-woocommerce'),
						'type' => 'textarea',
						'custom_attributes' => [
							'placeholder' => __('Enter your text here', 'toolkit-for-woocommerce'),
						],
					],
					[
						'id' => 'select',
						'name' => __('Select', 'toolkit-for-woocommerce'),
						'description' => __('On/off global', 'toolkit-for-woocommerce'),
						'type' => 'select',
						'options' => [
							'option_1' => __('Option 1', 'toolkit-for-woocommerce'),
							'option_2' => __('Option 2', 'toolkit-for-woocommerce'),
							'option_3' => __('Option 3', 'toolkit-for-woocommerce'),
						],
					],
					[
						'id' => 'number',
						'name' => __('Number', 'toolkit-for-woocommerce'),
						'description' => __('On/off global', 'toolkit-for-woocommerce'),
						'type' => 'number',
						'options' => [
							'min' => 0,
							'max' => 100,
							'step' => 1,
						],
						'custom_attributes' => [
							'placeholder' => __('Enter your number here', 'toolkit-for-woocommerce'),
						],
					],
					[
						'id' => 'repeater',
						'name' => __('Repeater', 'toolkit-for-woocommerce'),
						'description' => __('On/off global', 'toolkit-for-woocommerce'),
						'type' => 'repeater',
						'options' => [
							'add_button' => __('Add Row', 'toolkit-for-woocommerce'),
							'remove_button' => __('Remove', 'toolkit-for-woocommerce'),
						],
						'children' => [
							'condition' => [
								'title' => __('Condition', 'toolkit-for-woocommerce'),
								'type' => 'select',
								'width' => 40,
								'description' => __('Condition vs. destination', 'toolkit-for-woocommerce'),
								'options' => [
									'' => __('None', 'toolkit-for-woocommerce'),
									'items' => __('Item count', 'toolkit-for-woocommerce'),
								],
							],
							'break' => [
								'title' => __('Break', 'toolkit-for-woocommerce'),
								'type' => 'checkbox',
								'width' => 9,
								'description' => __(
									'Break at this point. For per-order rates, no rates other than this will be offered. For calculated rates, this will stop any further rates being matched.',
									'toolkit-for-woocommerce'
								),
							],
							'per_item' => [
								'title' => __('Item Cost', 'toolkit-for-woocommerce'),
								'type' => 'number',
								'width' => 12,
								'description' => __('Cost per item.', 'toolkit-for-woocommerce'),
								'custom_attributes' => [
									'min' => '0',
									'step' => '0.01',
								],
							],
							'shipping_label' => [
								'title' => __('Label', 'toolkit-for-woocommerce'),
								'type' => 'text',
								'width' => 30,
								'description' => __('Label for the shipping method which the user will be presented.', 'toolkit-for-woocommerce'),
							],
						],
					],
				],
			],
		];
	}
}
