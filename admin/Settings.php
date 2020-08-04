<?php

/**
 * @package vouched-plugin
 */

namespace Admin;

defined( 'ABSPATH' ) or die('Your identity has not been verified...');

class Settings {
    public static function main(){
        Settings::settings_init();

        add_action('admin_menu', ['Admin\Settings','add_admin_page']);
    }


    public static function settings_init(){
        register_setting('general', 'vouchedplugin_api_key');
    }


    public static function add_admin_page(){
        add_menu_page(
            'Vouched Plugin', 
            'Vouched Plugin', 
            'manage_options', 
            'vouched_plugin',
            ['Admin\Settings','admin_page_display_content'],
            'dashicons-yes', 
            110
        );
    }
    public static function admin_page_display_content(){
        \Templates\AdminPage::get_admin_page();
    }


    // if we want to add setting to General Settings area
    public static function add_general_settings(){
        add_settings_section(
            'vouchedplugin_settings_section',
            'Vouched Plugin Section',
            ['Admin\Settings','general_settings_section_callback'],
            'general'
        );

        add_settings_field(
            'vouchedplugin_api_key_field',
            'Vouched Plugin API Key',
            ['Admin\Settings','general_settings_api_field_callback'],
            'general',
            'vouchedplugin_settings_section'
        );
    }
    public static function general_settings_section_callback(){
        return;
    }
    public static function general_settings_api_field_callback(){
        return;
    }
}