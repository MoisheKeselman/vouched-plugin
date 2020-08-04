<?php

namespace Templates;

defined( 'ABSPATH' ) or die('Your identity has not been verified...');

class AdminPage{
    public static function get_admin_page(){
        ?>
        <div>
            <h2>Vouched Plugin Settings</h2>
            <!-- send to options.php to get processed -->
            <form method="post" action="options.php">
                <?php settings_fields( 'general' ); ?>
                <table>
                    <tr valign="top">
                        <th scope="row"><label for="vouchedplugin_api_key">Secret API Key:</label></th>
                        <td><input type="text" placeholder="Enter your key" id="vouchedplugin_api_key" name="vouchedplugin_api_key" value="<?php echo get_option('vouchedplugin_api_key'); ?>" /></td>
                    </tr>
                </table>
                <?php  submit_button(); ?>
            </form>
        </div>
        <?php
    }
}
