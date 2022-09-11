<?php

class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_plugin_page'));
        add_action('admin_init', array($this, 'page_init'));
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        add_menu_page(
            'Theme Option David',        // Thay title của trang Theme Option
            'Theme Option',            // Thay tên hiển thị trên Menu
            'manage_options',
            'david-theme-option',
            array($this, 'create_admin_page') // Thay icon của bạn
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option('general_option');
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <h2>My Settings</h2>
            <form method="post" action="options.php">
                <?php
                // This prints out all hidden setting fields
                settings_fields('my_option_group');
                do_settings_sections('my-setting-admin');
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'my_option_group', // Option group
            'general_option', // Option name
            array($this, 'sanitize') // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'Cài đặt chung', // Title
            array($this, 'print_section_info'), // Callback
            'my-setting-admin' // Page
        );

        add_settings_field(
            'shipping', // ID
            'Shipping and refund', // Title
            array($this, 'shipping_callback'), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section
        );

        add_settings_field(
            'title',
            'Title',
            array($this, 'title_callback'),
            'my-setting-admin',
            'setting_section_id'
        );

    }

    public function sanitize($input)
    {
        $new_input = array();
        if (isset($input['shipping']))
            $new_input['shipping'] = ($input['shipping']);

        if (isset($input['title']))
            $new_input['title'] = sanitize_text_field($input['title']);

        // Thêm các cài đặt của bạn tại đây tương tự như ví dụ ở trên.
        // Các bạn có thể tham khảo http://codex.wordpress.org/Function_Reference/sanitize_text_field để biết nó dùng làm gì và các hàm tương tự sanitize_text_field

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
//        print 'Enter your settings below:';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function shipping_callback()
    {
        printf(
            '<textarea id="shipping" name="general_option[shipping]" />%s</textarea>',
            isset($this->options['shipping']) ? esc_attr($this->options['shipping']) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="general_option[title]" value="%s" />',
            isset($this->options['title']) ? esc_attr($this->options['title']) : ''
        );
    }

    // Thêm các cài đặt mới của bạn ở đây tương tự như ví dụ ở trên.
}

if (is_admin())
    $my_settings_page = new MySettingsPage();